<?php 


if (!isset($_SESSION["loggedin"]) && isset($_COOKIE["user_login"])) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "data_ishine";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if (!$conn) {
        echo "Cannot connect to database " . mysqli_connect_error();
    }

    $username = $_COOKIE["user_login"];
    $username = trim($username);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);

    $sql = "SELECT * FROM users WHERE username = ?";

    $prepare_stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($prepare_stmt, 's', $username);

    mysqli_stmt_execute($prepare_stmt);

    $result = mysqli_stmt_get_result($prepare_stmt);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "Something went wrong, I can feel it. Redirecting to main page after 2 second!";
        header("refresh:2;url=logout.php");
        exit;
    } else {
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $row["userID"];
        $_SESSION["username"] = $row["username"];   
        $_SESSION["vai_tro"] =  $row["vai_tro"];    
    }
}

