<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "timeregistration";

$conn = mysqli_connect($dbhost , $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("ERROR: Could not connect: " . mysqli_connect_error());
}
?>