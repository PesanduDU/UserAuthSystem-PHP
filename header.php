<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
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
    </header>

</body>

</html>