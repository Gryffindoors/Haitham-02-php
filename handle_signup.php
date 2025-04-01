<?php

session_start();

//redirect
if(!isset($_POST['submitBtn'])) {
    header(header: "Location: http://localhost/02_php_task/task/account.php"); //redirect to new page
}


//receive
$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];

//Clean (validate step 1)
$username   = htmlspecialchars(strip_tags(trim($username)));
$password   = htmlspecialchars(strip_tags(trim($password)));
$password2  = htmlspecialchars(strip_tags(trim($password2)));
$email      = htmlspecialchars(strip_tags(trim($email)));
$phone      = htmlspecialchars(strip_tags(trim($phone)));
$facebook   = htmlspecialchars(strip_tags(trim($facebook)));
$twitter    = htmlspecialchars(strip_tags(trim($twitter)));
$instagram  = htmlspecialchars(strip_tags(trim($instagram)));


// store in session for optional edit
$edit["username"] = $username;
$edit["password"] = $password;
$edit["password2"] = $password2;
$edit["email"] = $email;
$edit["phone"] = $phone;
$edit["facebook"] = $facebook;
$edit["twitter"] = $twitter;
$edit["instagram"] = $instagram;

// validate step 2
$error = [];

if (empty($username)) {
    $error ["username_error"] = "Username Required";
} elseif (strlen($username) <3 || strlen($username) >12) {
    $error ["username_error"] = "Username must be 3 to 12 characters long";
}

if (empty($password)) {
    $error ["password_error"] = "Password Required";
} elseif (strlen($password) <3 || strlen($password) >12) {
    $error ["password_error"] = "Password must be 3 to 12 characters long";
}

if (empty($password2)) {
    $error ["password2_error"] = "Password confirmation Required";
} elseif ($password !== $password2) {
    $error ["password2_error"] = "Password and Password confirmation do not match";
}

if (empty($email)) {
    $error ["email_error"] = "Email required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error ["email_error"] = "Email incorrect";
}

if (empty($phone)) {
    $error["phone_error"] = "Phone number required";
} elseif (!preg_match('/^(01|\+201|00201)[0-9]{9}$/', $phone)) {
    $error["phone_error"] = "Phone number must start with 01, +201, or 00201 and be valid";
}


if (!empty($facebook) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
    $error["facebook_error"] = "Facebook link is invalid";
}

if (!empty($twitter) && !filter_var($twitter, FILTER_VALIDATE_URL)) {
    $error["twitter_error"] = "Twitter link is invalid";
}

if (!empty($instagram) && !filter_var($instagram, FILTER_VALIDATE_URL)) {
    $error["instagram_error"] = "Instagram link is invalid";
}

if (!empty($error)){
    $_SESSION["error"] = $error;
    $_SESSION["edit"] = $edit;
    header("Location: http://localhost/02_php_task/task/account.php");

}else{
    $_SESSION["message"] = "User Saved Successfully";
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location: http://localhost/02_php_task/task/products.php");
    $_SESSION["error"] = [];
    $_SESSION["edit"] = $edit;
}

    

