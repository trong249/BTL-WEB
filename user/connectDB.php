<?php 

$hostname = "mysql5038.site4now.net";
$username = "a85bff_ishine";
$password = "n24v9t2001";
$database = "db_a85bff_ishine";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    echo "Cannot connect to database: Error " . mysqli_connect_error();
    exit;
}


?>