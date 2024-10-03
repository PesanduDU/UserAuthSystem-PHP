<?php
require "header.php";
?>

<main class="container mt-5">

    <?php
        if (isset($_SESSION['userId'])) {
            echo " <p>You are logged in now!</p>";
        } else {
            echo " <p>You are logged out now!</p>";
        }
    ?>

    <!-- <p>You are logged in now!</p>
    <p>You are logged out now!</p> -->

</main>

<?php
require "footer.php";
?>