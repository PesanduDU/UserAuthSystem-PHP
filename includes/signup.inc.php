<?php

if(isset($_POST['signup-submit'])){

    require 'dbhelper.inc.php';

    $userName = $_POST['username'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userPasswordRepeat = $_POST['reenter_password'];

    if(empty($userName) || empty($userEmail) || empty($userPassword) || empty($userPasswordRepeat)){
        header("Location: ../signup.php?error=emptyfields&username=".$userName."&email=".$userEmail);
        exit();
    }
    elseif (!filter_var($userEmail,FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&username=".$userName);
        exit();
    }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
        header("Location: ../signup.php?error=invalidemail&username=".$userName);
        exit();
    }
}