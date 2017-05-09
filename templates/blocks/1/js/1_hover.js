$(document).ready(function () {
    $(".hover").hover(function () {
        $('#main_img').attr('src', $(this).attr('src'));
        $('#main_img').attr('xoriginal', $(this).attr('src'));
    })
});