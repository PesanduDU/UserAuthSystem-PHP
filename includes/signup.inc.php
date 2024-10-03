<?php

if (isset($_POST['signup-submit'])) {

    require 'dbhelper.inc.php';

    $userName = $_POST['username'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userPasswordRepeat = $_POST['reenter_password'];

    if (empty($userName) || empty($userEmail) || empty($userPassword) || empty($userPasswordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&username=" . $userName . "&email=" . $userEmail);
        exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        header("Location: ../signup.php?error=invalidUsernameEmail");
        exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&username=" . $userName);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        header("Location: ../signup.php?error=invalidusername&useremail=" . $userEmail);
        exit();
    } elseif ($userPassword !== $userPasswordRepeat) {
        header("Location: ../signup.php?error=passwordmismatch&username=" . $userName . "&email=" . $userEmail);
        exit();
    } else {
        $sql = "SELECT user_name FROM users WHERE user_name=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $checkResult = mysqli_stmt_num_rows($stmt);

            if ($checkResult > 0) {
                header("Location: ../signup.php?error=usernamealreadyexist&&email=" . $userEmail);
                exit();
            } else {
                $sql = "INSERT INTO users (user_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {

                    $hashpassword = password_hash($userPassword, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $userName, $userEmail, $hashpassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
