<?php

if (isset($_POST['login-submit'])) {

    require 'dbhelper.inc.php';

    $unameuemial = $_POST['mailuid'];
    $upwd = $_POST['pwd'];

    if (empty($unameuemial) || empty($upwd)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {

        $sql = "SELECT * FROM users WHERE user_name=? OR email=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "ss", $unameuemial, $unameuemial);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if ($raw = mysqli_fetch_assoc($result)) {

                $passwordcheck = password_verify($upwd, $raw['password']);

                if ($passwordcheck == false) {
                    header("Location: ../index.php?error=wrongpassword&mailuid=".$unameuemial);
                    exit();
                } elseif ($passwordcheck == true){

                    session_start();

                    $_SESSION['userId'] = $raw['user_id'];
                    $_SESSION['userName'] = $raw['user_name'];

                    header("Location: ../index.php?login=success");
                    exit();

                } else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
} else {

    header("Location: ../index.php");
    exit();
}
