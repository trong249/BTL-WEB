<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "data_ishine";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    echo "Cannot connect to database: Error " . mysqli_connect_error();
    exit;
}


?>