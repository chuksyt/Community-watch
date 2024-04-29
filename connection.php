<!-- <?php

 $con=mysqli_connect("localhost","root","bossmanX01","missing_person_database");
   if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database'):</script>";
    exit();
 }

?> -->


<?php
$password = "bossmanX01"; // Replace this with your actual password

$con = mysqli_connect("localhost", "root", $password, "missing_person_database");

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "Connected successfully";
}
?>
  