<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$password = "bossmanX01"; // Replace this with your actual password

$con = mysqli_connect("localhost", "root", $password, "missing_person_database");

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "Connected successfully";
}
?>
