<?php
    $error_username = $error_email = $error_password = $error_confirm_password = 0;
    $user_name = $user_email = $user_password = $confirm_password = "";

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

        if (isset($_POST["submit_btn"]) && $_POST["submit_btn"] == "sign_up") {
            echo "Đăng kí";
            
            $user_name = clean_input($_POST["sign_up_username"]);
            $user_email = clean_input($_POST["sign_up_email"]);
            $user_password = clean_input($_POST["sign_up_password"]);
            $confirm_password = clean_input($_POST["confirm-password"]);

            //validate username
            if (empty($user_name)) {
                $error_username = 1;
            }
            else if (!preg_match('/^[a-zA-Z0-9_]+$/', $user_name)) {
                $error_username = 2;
            } else {
                $find_cmd = "SELECT userID FROM users WHERE username=?";
                $prepare_stmt = mysqli_prepare($conn, $find_cmd);

                mysqli_stmt_bind_param($prepare_stmt, 's', $user_name);

                if (mysqli_stmt_execute($prepare_stmt)) {
                    //store result
                    mysqli_stmt_store_result($prepare_stmt);
                    //get row.
                    if (mysqli_stmt_num_rows($prepare_stmt) > 0) {
                        $error_username = 3;
                    }

                } else {
                    echo "Something went wrong";
                }
                mysqli_stmt_close($prepare_stmt);
            }

            //validate email
            if (empty($user_email)) {
                $error_email = 1;
            }
            else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $error_email = 2;
            } else {
                $find_email_cmd = "SELECT userID FROM users WHERE email=?";
                $prepare_stmt = mysqli_prepare($conn, $find_email_cmd);

                mysqli_stmt_bind_param($prepare_stmt, 's', $user_email);

                if (mysqli_stmt_execute($prepare_stmt)) {
                    //store result
                    mysqli_stmt_store_result($prepare_stmt);
                    //get row.
                    if (mysqli_stmt_num_rows($prepare_stmt) > 0) {
                        $error_email = 3;
                    }

                } else {
                    echo "Something went wrong";
                }
            }

            //validate password
            if (empty($user_password)) {
                $error_password = 1;
            } else if (strlen($user_password) < 6) {
                $error_password = 2;
            }

            //validate confirm password
            if (empty($confirm_password)) {
                $error_confirm_password = 1;
            } else if ($user_password != $confirm_password) {
                $error_confirm_password = 2;
            }

            
            if (($error_email + $error_password + $error_username + $error_confirm_password) == 0) {
                //neu khong co loi nao, thi insert vao data base thoi!
                $insert_cmd = "INSERT INTO users (username, email, mat_khau, dia_chi, vai_tro, reset_code) VALUE (?,?,?,?,?,?);";
                $prepare_stmt = mysqli_prepare($conn, $insert_cmd);

                $temp_dia_chi = "Hồ Chí Minh";
                $vai_tro = 0;
                $reset_code = 0;

                mysqli_stmt_bind_param($prepare_stmt, 'ssssii', $user_name, $user_email, $param_password, $temp_dia_chi, $vai_tro, $reset_code);

                $param_password = password_hash($user_password, PASSWORD_DEFAULT); // Creates a password hash

                if (!mysqli_stmt_execute($prepare_stmt)) {
                    echo "Something went wrong, I can feel it" . mysqli_stmt_error($prepare_stmt);
                } else {
                    header("Location: trang_chu.php");
                    exit();
                }

                mysqli_stmt_close($prepare_stmt);

            } else {
                header("Location: dang_nhap_dang_ki.php?page=sign_up&n=$error_username&e=$error_email&p=$error_password&cp=$error_confirm_password");
                exit();
            }

            mysqli_close($conn);
        }
    }
?>

