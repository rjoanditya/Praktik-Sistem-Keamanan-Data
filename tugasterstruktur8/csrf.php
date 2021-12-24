<?php


function csrf_token()

{
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;
    return $token;
}
ini_set('display_errors', 0);
// validate token empty
if (isset($_POST['token']) && empty($_POST['token'])) {
    $error .= "<div class='alert alert-danger text-center' role='alert'>CSRF token missing</div>";
} elseif ($_POST['token'] != $_SESSION['token']) {
    // $error .= "<div class='alert alert-danger text-center' role='alert'>Incorrect csrf token</div>";
} else {
    // validate email empty
    if (isset($_POST['email']) && empty($_POST['email'])) {
        $error .= "<div class='alert alert-danger text-center' role='alert'>Name is invalid, please try again.</div>";
    } else {
        // validate
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST['email'])) {
            $error  .= "<div class='alert alert-success text-center' role='alert'>'Name is valid.</div>";
        }
    }
    // validate password empty
    if (isset($_POST['password']) && empty($_POST['password'])) {
        $error .= "<div class='alert alert-danger text-center' role='alert'>Password is invalid, please try again.</div>";
    } else {

        // validate
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST['password'])) {
            $error  .= "<div class='alert alert-success text-center' role='alert'>'Password is valid.</div>";
        }
    }
}