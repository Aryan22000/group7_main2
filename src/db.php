<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "DF";

// Creating connection
$connection = new mysqli ($servername, $username, $password, $dbname);

// Checking the connection
if ($connection -> connect_error){
    die("connection failed:".$connection->connect_error);
}

?>