<?php

$servername = "localhost";
$username = "onlineshop";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db, 3306);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
