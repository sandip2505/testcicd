<?php

$servername = "localhost";
$username = "onlineshop";
$password = "4LFTx%HN73K}";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
