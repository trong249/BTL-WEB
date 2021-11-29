<?php

    // Initialize the session
    
    session_start();
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
    // redirect the nay cung duoc, da log in roi thi se khong the login "kep".
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: trang_chu.php");
        exit();
    }

    $error_username = $error_email = $error_password = 0;
    $user_name = $user_email = $user_password = $remember = "";
    $error_name = 0;
    $invalid_account = 0;
    function clean_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //setup a connection
        $hostname = "mysql5037.site4now.net";
    $username = "a7cc8e_dapoet1";
    $password = "123456aA@";
    $database = "db_a7cc8e_dapoet1";

        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            echo "Cannot connect to database " . mysqli_connect_error();
        }

        if (isset($_POST["submit_btn"]) && $_POST["submit_btn"] == "sign_in") {
            echo "Đăng nhập";
            
            $user_name = clean_input($_POST["sign_in_email"]);
            $user_email = clean_input($_POST["sign_in_email"]);
            $user_password = clean_input($_POST["sign_in_password"]);
            if (isset($_POST["remember-me"])) {
                $remember = clean_input($_POST["remember-me"]);
            }

            //validate username
            if (empty($user_name)) {
                $error_username = 1;
            }
            else if (!preg_match('/^[a-zA-Z0-9_]+$/', $user_name)) {
                $error_username = 2;
            } 

            //validate email
            if (empty($user_email)) {
                $error_email = 1;
            }
            else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $error_email = 2;
            }

            if ($error_email > 0 && $error_username > 0) {
                $error_name = 1;
            }

            //validate password
            if (empty($user_password)) {
                $error_password = 1;
            } else if (strlen($user_password) < 6) {
                $error_password = 2;
            }

            
            if (($error_name + $error_password) == 0) {
                //neu khong co loi nao, thi insert vao data base thoi!
                $cmd = "SELECT * FROM users WHERE email=? OR username=?";
                $prepare_stmt = mysqli_prepare($conn, $cmd);

                mysqli_stmt_bind_param($prepare_stmt, 'ss', $user_email, $user_name);

                mysqli_stmt_execute($prepare_stmt);

                $result = mysqli_stmt_get_result($prepare_stmt);

                if (!($row = mysqli_fetch_assoc($result))) {
                    $invalid_account = 1;
                    header("Location: dang_nhap_dang_ki.php?page=sign_in&cp=$invalid_account");
                    exit();
                }

                $hashedPass = $row["mat_khau"];

                $checkPass = password_verify($user_password, $hashedPass); // Creates a password hash
                
                if ($checkPass) {
                    session_start();
                            
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $row["userID"];
                    $_SESSION["username"] = $row["username"];   
                    $_SESSION["vai_tro"] =  $row["vai_tro"];    
                    
                    if (isset($_POST["remember-me"])) {
                        $remember = clean_input($_POST["remember-me"]);
                        setcookie("user_login", $_SESSION["username"], time() + 24*60*60*365, "/");
                    } else {
                        setcookie("user_login", "");
                    }

                   
                    // Redirect user to welcome page
                    header("location: trang_chu.php");
                    exit();
                } else {
                    $invalid_account = 1;
                    header("Location: dang_nhap_dang_ki.php?page=sign_in&cp=$invalid_account");
                    exit();
                }

                mysqli_stmt_close($prepare_stmt);

            } else {
                header("Location: dang_nhap_dang_ki.php?page=sign_in&n=$error_name&p=$error_password");
                exit();
            }

            mysqli_close($conn);
        }
    }
?>

