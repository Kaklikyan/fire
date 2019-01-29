<?php

session_start();

require './models/User.php';

use models\User;

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: category.php");
    exit;
}

// Define variables and initialize with empty values
$login = $password = "";
$login_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["login"]))){
        $login_err = "Please enter login.";
    } else{
        $login = trim($_POST["login"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($login_err) && empty($password_err)) {

        $user = new User();
        $admin = $user->getAdmin();

        if ($login == $admin['login']) {
            if ($password == $admin['password']) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = 1;
                $_SESSION["login"] = $login;
                header("location: category.php");
            } else {
                $password_err = "The password you entered was not valid.";
            }
        } else {
            $login_err = "No account found with that email.";
        }
    }
}