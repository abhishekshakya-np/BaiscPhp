<?php
$host = "localhost";
$username = "root";
$password = "X@bickx2024";
$database = "tutorial";


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


