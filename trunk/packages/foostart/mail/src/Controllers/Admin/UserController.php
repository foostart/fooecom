<?php namespace Foostart\Mail\Controllers\Admin;

use App\Http\Controllers\Controller;
/**
 * Class UserController
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use LaravelAcl\Authentication\Exceptions\PermissionException;
use LaravelAcl\Authentication\Exceptions\ProfileNotFoundException;
use LaravelAcl\Authentication\Helpers\DbHelper;
use Foostart\Mail\Models\UserProfile;
use LaravelAcl\Authentication\Presenters\UserPresenter;
use LaravelAcl\Authentication\Services\UserProfileService;
use LaravelAcl\Authentication\Validators\UserProfileAvatarValidator;
use LaravelAcl\Library\Exceptions\NotFoundException;
use Foostart\Mail\Models\User;
use LaravelAcl\Authentication\Helpers\FormHelper;
use LaravelAcl\Authentication\Exceptions\UserNotFoundException;
use LaravelAcl\Authentication\Validators\UserValidator;
use LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;
use LaravelAcl\Authentication\Validators\UserProfileValidator;
use View, Redirect, App, Config;
use LaravelAcl\Authentication\Interfaces\AuthenticateInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use LaravelAcl\Library\Form\FormModel;

class UserController extends Controller {
	/**
     * @var \LaravelAcl\Authentication\Repository\SentryUserRepository
     */
    protected $user_repository;
    protected $user_validator;
    /**
     * @var \LaravelAcl\Authentication\Helpers\FormHelper
     */
    protected $form_helper;
    protected $profile_repository;
    protected $profile_validator;
    /**
     * @var use LaravelAcl\Authentication\Interfaces\AuthenticateInterface;
     */
    protected $auth;
    protected $register_service;
    protected $custom_profile_repository;

    public function __construct(UserValidator $v, FormHelper $fh, UserProfileValidator $vp, AuthenticateInterface $auth)
    {
        $this->user_repository = App::make('user_repository');
        $this->user_validator = $v;
        //@todo use IOC correctly with a factory and passing the correct parameters
        $this->f = new FormModel($this->user_validator, $this->user_repository);
        $this->form_helper = $fh;
        $this->profile_validator = $vp;
        $this->profile_repository = App::make('profile_repository');
        $this->auth = $auth;
        $this->register_service = App::make('register_service');
        $this->custom_profile_repository = App::make('custom_profile_repository');
    }

    public function getList(Request $request) {
        $users = $this->user_repository->all($request->except(['page']));
        $params = $request->all();

        return View::make('mail::user_type.list')
            ->with([
                "users" => $users, 
                "request" => $request,
                "params" => $params
            ]);
    }

    public function editUser(Request $request) {
        try {
            $user = $this->user_repository->find($request->get('id'));
        } catch(JacopoExceptionsInterface $e) {
            $user = new User;
        }
        $presenter = new UserPresenter($user);
        // var_dump($presenter);
        // var_dump($user);
        // die();
        return View::make('mail::user_type.edit')->with(["user" => $user, "presenter" => $presenter]);
    }

    public function postEditUser(Request $request)
    {
        $id = $request->get('id');

        DbHelper::startTransaction();
        try
        {
            $user = $this->f->process($request->all());
            $this->profile_repository->attachEmptyProfile($user);
        } catch(JacopoExceptionsInterface $e)
        {
            DbHelper::rollback();
            $errors = $this->f->getErrors();
            // passing the id incase fails editing an already existing item
            return Redirect::route("user_type.edit", $id ? ["id" => $id] : [])->withInput()->withErrors($errors);
        }

        DbHelper::commit();

        return Redirect::route('user_type.edit', ["id" => $user->id])
                       ->withMessage(Config::get('acl_messages.flash.success.user_edit_success'));
    }

    public function deleteUser(Request $request)
    {
        try
        {
            $this->f->delete($request->all());
        } catch(JacopoExceptionsInterface $e)
        {
            $errors = $this->f->getErrors();
            return Redirect::route('user_type.list')->withErrors($errors);
        }
        return Redirect::route('user_type.list')
                       ->withMessage(Config::get('acl_messages.flash.success.user_delete_success'));
    }
}