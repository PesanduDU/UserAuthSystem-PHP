<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "Asusf15@123";
$databasename = "userauthsystem";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $databasename);

if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}