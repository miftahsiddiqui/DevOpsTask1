<?php

$servername = "db";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
