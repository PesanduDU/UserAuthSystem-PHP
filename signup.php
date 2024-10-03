<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Center form at the top-middle */
        .signup-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <?php
    require "header.php";
    ?>

    <div class="container">
        <div class="signup-form">
            <h2 class="text-center">Sign Up</h2>

            <?php

            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<br><h3 style="color: red; font-size: 14px; text: center;"> Fill In All Fields!</h3><br>';
                } elseif($_GET['error'] == "invalidUsernameEmail"){
                    echo '<br><h3 style="color: red; font-size: 14px; text: center;"> Invalid User Name Or Password!</h3><br>';
                } elseif ($_GET['error'] == "invalidemail"){
                    echo '<br><h3 style="color: red; font-size: 14px; text: center;"> Enter Valid Email!</h3><br>';
                } elseif ($_GET['error'] == "invalidusername"){
                    echo '<br><h3 style="color: red; font-size: 14px; text: center;"> Enter Valid Username!</h3><br>';
                } elseif ($_GET['error'] == "passwordmismatch"){
                    echo '<br><h3 style="color: red; font-size: 14px; text: center;"> Check Password Again!</h3><br>';
                }
            } elseif (isset($_GET['signup']) == "success"){
                echo '<br><h3 style="color: green; font-size: 14px; text: center;"> Successfully Signup!</h3><br>';
            }

            ?>



            <form action="./includes/signup.inc.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="reenter-password" class="form-label">Re-enter Password</label>
                    <input type="password" class="form-control" id="reenter-password" name="reenter_password">
                </div>
                <div class="d-grid">
                    <button type="submit" name="signup-submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    require "./footer.php";
    ?>
</body>

</html>