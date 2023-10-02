<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

$con = new mysqli($servername, $username, $password, $dbname);

if (!$con) {
    die(mysqli_error($con));
} else {
    // No need to print everytime
    // echo ("Sucess");
}
