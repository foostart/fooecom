<?php namespace Foostart\Mail\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use URL;
use Route,
	App,
	View,
    Redirect;

use LaravelAcl\Library\Form\FormModel;
use LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

use LaravelAcl\Authentication\Models\User;
use LaravelAcl\Authentication\Validators\UserValidator;
use LaravelAcl\Authentication\Validators\UserProfileValidator;
use LaravelAcl\Authentication\Helpers\FormHelper;
use LaravelAcl\Authentication\Interfaces\AuthenticateInterface;
use LaravelAcl\Authentication\Presenters\UserPresenter;

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

        return View::make('mail::user_type.list')->with(["users" => $users, "request" => $request]);
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

    public function addGroup(Request $request){
        $user_id = $request->get('id');
        $group_id = $request->get('group_id');

        try
        {
            $this->user_repository->addGroup($user_id, $group_id);
        } catch(JacopoExceptionsInterface $e)
        {
            return Redirect::route('users.edit', ["id" => $user_id])
                           ->withErrors(new MessageBag(["name" => Config::get('acl_messages.flash.error.user_group_not_found')]));
        }
        return Redirect::route('users.edit', ["id" => $user_id])
                       ->withMessage(Config::get('acl_messages.flash.success.user_group_add_success'));
    }
}