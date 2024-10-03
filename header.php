<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <!-- <header>
        <nav>
            <a href="" class="" id="">
                <img src="" alt="logo">
            </a>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                    <a href="aboutMe">About me</a>
                    <a href="contactMe">Contact me</a>
                    <a href=""></a>
                </li>
            </ul>

            <div>
                <form action="includes/login.inc.php" method="post">

                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>

                <a href="signup.php">Sign Up</a>

                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header> -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/logo.jpg" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                    My Website
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Me</a>
                        </li>
                    </ul>

                    <div class="d-flex">

                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
                        </form>';
                        } else {
                            echo '<form class="d-flex me-2" action="includes/login.inc.php" method="post">
                            <input class="form-control me-2" type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input class="form-control me-2" type="password" name="pwd" placeholder="Password...">
                            <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
                        </form>

                        <a class="btn btn-outline-primary me-2" href="signup.php">Sign Up</a>';
                        }
                        ?>

                        <!-- <form class="d-flex me-2" action="includes/login.inc.php" method="post">
                            <input class="form-control me-2" type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input class="form-control me-2" type="password" name="pwd" placeholder="Password...">
                            <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
                        </form>

                        <a class="btn btn-outline-primary me-2" href="signup.php">Sign Up</a> -->

                        <!-- <form action="includes/logout.inc.php" method="post">
                            <button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>