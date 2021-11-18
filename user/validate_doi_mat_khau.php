<?php
    //phai luon co session_start();
    session_start();

    $error_old_pw = $error_new_pw = $error_confirm_password = 0;
    $old_pw = $new_pw = $confirm_password = "";

    function clean_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //setup a connection
       require_once "./connectDB.php";

        $old_pw = clean_input($_POST["old_password"]);
        $new_pw = clean_input($_POST["new_password"]);
        $confirm_password = clean_input($_POST["confirm_password"]);
        

        
        //validate password
        if (empty($old_pw)) {
            $error_old_pw = 1;
        } else if (strlen($old_pw) < 6) {
            $error_old_pw = 2;
        } else {
            $userid = $_SESSION["id"];
            $select_cmd = "SELECT * FROM users WHERE userID = $userid";
            $result = mysqli_query($conn, $select_cmd);
            $result = mysqli_fetch_assoc($result);
            
            $hashedpw = $result["mat_khau"];
            $checkPass = password_verify($old_pw, $hashedpw);
            if (!$checkPass) {
                $error_old_pw = 3;
            }
        }

        if (empty($new_pw)) {
            $error_new_pw = 1;
        } else if (strlen($new_pw) < 6) {
            $error_new_pw = 2;
        }

        if (empty($confirm_password)) {
            $error_confirm_password = 1;
        } else if ($confirm_password != $new_pw) {
            $error_confirm_password = 2;
        }
        

        
        if (($error_confirm_password + $error_new_pw + $error_old_pw) == 0) {
            //neu khong co loi nao, thi insert vao data base thoi!

            $update_cmd = "UPDATE `users` SET `mat_khau`=? WHERE userID=$userid;";
            $prepare_stmt = mysqli_prepare($conn, $update_cmd);

            mysqli_stmt_bind_param($prepare_stmt, 's', $new_hashed_pass);

            $new_hashed_pass = password_hash($new_pw, PASSWORD_DEFAULT); // Creates a password hash

            if (!mysqli_stmt_execute($prepare_stmt)) {
                echo "Something went wrong, I can feel it";
                exit();
            } else {
                header("Location: ./alert_page.php?message=\"Đổi mật khẩu thành công! Xin hãy đăng nhập lại bằng mật khẩu mới\"&redirect=../shop/logout.php");
                exit();
            }

            mysqli_stmt_close($prepare_stmt);

        } else {
            header("Location: ./doi_mat_khau.php?op=$error_old_pw&np=$error_new_pw&cp=$error_confirm_password");
            exit();
        }

        mysqli_close($conn);
        
    }
?>

