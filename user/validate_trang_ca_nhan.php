<?php
    //phai luon co session_start();
    session_start();



    $error_username = $error_email = $error_address = 0;
    $user_name = $user_email = $user_address = "";

    function clean_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //setup a connection
       require_once "./connectDB.php";

        $user_name = clean_input($_POST["user_name"]);
        $user_email = clean_input($_POST["user_email"]);
        $user_address = clean_input($_POST["user_address"]);
        

        //validate username
        if (empty($user_name)) {
            $error_username = 0;
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
            $error_email = 0;
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

        //validate address
        if ($user_address == "") {
            $error_address = 0;
        }
        else if (!preg_match('/^[ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\d\w,.\/]*$/', $user_address)) {
            $error_address = 1;
        }
        

        
        if (($error_email + $error_username + $error_address) == 0) {
            //neu khong co loi nao, thi insert vao data base thoi!

            $userid = $_SESSION["id"];
            $select_cmd = "SELECT * FROM users WHERE userID = $userid";
            $result = mysqli_query($conn, $select_cmd);
            $result = mysqli_fetch_assoc($result);
            if (empty($user_name)) {
                $user_name = $result["username"];
            }
            if (empty($user_email)) {
                $user_email = $result["email"];
            }
            if (empty($user_address)) {
                $user_address = $result["dia_chi"];
            }
            $update_cmd = "UPDATE `users` SET `username`=?,`email`=?,`dia_chi`=? WHERE userID=$userid;";
            $prepare_stmt = mysqli_prepare($conn, $update_cmd);


            mysqli_stmt_bind_param($prepare_stmt, 'sss', $user_name, $user_email, $user_address);

            if (!mysqli_stmt_execute($prepare_stmt)) {
                echo "Something went wrong, I can feel it";
                exit();
            } else {
                $_SESSION["username"] = $user_name;
                header("Location: ./trang_ca_nhan.php?error=none");
                exit();
            }

            mysqli_stmt_close($prepare_stmt);

        } else {
            header("Location: ./trang_ca_nhan.php?n=$error_username&e=$error_email&cp=$error_address");
            exit();
        }

        mysqli_close($conn);
        
    }
?>

