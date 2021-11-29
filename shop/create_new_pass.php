
<?php

function consolelog($message) {
    echo "<script> console.log(\"$message\"); </script>";
}


    $error_password = $error_confirm_password = 0;
    $user_password = $confirm_password = "";

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
            
        
        $user_password = clean_input($_POST["new_pass"]);
        $confirm_password = clean_input($_POST["confirm_pass"]);
        $code = clean_input($_POST["code"]);

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

        
        if (($error_password + $error_confirm_password) == 0) {
            //neu khong co loi nao, thi insert vao data base thoi!
            $update_cmd = "UPDATE users SET mat_khau=?, reset_code=? WHERE reset_code=$code";
            $prepare_stmt = mysqli_prepare($conn, $update_cmd);


            mysqli_stmt_bind_param($prepare_stmt, 'si', $param_password, $reset_code);

            $reset_code = 0;
            $param_password = password_hash($user_password, PASSWORD_DEFAULT); // Creates a password hash

            if (!mysqli_stmt_execute($prepare_stmt)) {
                echo "Something went wrong, I can feel it" . mysqli_stmt_error($prepare_stmt);
            } else {
                header("Location: ../user/alert_page.php?message=\"Đổi mật khẩu thành công! Xin hãy đăng nhập lại bằng mật khẩu mới\"&redirect=../shop/logout.php");
                exit();
            }

            mysqli_stmt_close($prepare_stmt);

        } else {
            $md5=md5($code);
            header("Location: create_new_pass.php?code=$user_code&m=$md5&p=$error_password&cp=$error_confirm_password");
            exit();
        }

        mysqli_close($conn);
        
    }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //comment dong if nay neu muon xem nhanh trang web. dong if nay dam bao trang check_reset_code phai co $_GET["code"] va $_GET["m"]
       if (!isset($_GET["code"]) || !isset($_GET["m"])) {
        echo "Something went wrong, I can feel it";
        header("refresh:3;url=\"trang_chu.php\"");
        exit;
    }
    //---------------------------------------------
    $code = $_GET["code"];
    $md5 = $_GET["m"];
 
    if (md5($code) == $md5) {

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thay mật khẩu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="../css/reset_code/reset_code.css" rel="stylesheet">
        <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
    </head>
    <body>
    <script>
            function to_sign_in() {
                var si = document.getElementById("sign-in").style.display = "flex";
                var su = document.getElementById("sign-up").style.display = "none";
                var forgor = document.getElementById("forgor-password").style.display="none";
            }
            function to_sign_up() {
                var su = document.getElementById("sign-up").style.display = "flex";
                var si = document.getElementById("sign-in").style.display = "none";
                var forgor = document.getElementById("forgor-password").style.display="none";
            }
            function to_forgor()  {
                var su = document.getElementById("sign-up").style.display = "none";
                var si = document.getElementById("sign-in").style.display = "none";
                var forgor = document.getElementById("forgor-password").style.display="flex";
            }
    </script>
        <?php
            $n = $e = $p = $cp = 0;
 
            $error_password = array("",
                                    "Xin hãy nhập mật khẩu",
                                    "Mật khẩu phải dài ít nhất 6 kí tự");
            $error_confirm_password = array("",
                                            "Xin hãy nhập mật khẩu xác nhận",
                                            "Mật khẩu không khớp");

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
           
                consolelog("I was in sign_up page");
                if(isset($_GET["p"])) $p = $_GET["p"];
                if(isset($_GET["cp"])) $cp = $_GET["cp"];
        }

        ?>
        <!-- how to center a div on a page and make it scrollable with flex box: make a wrapper div, specify height -->
        <!-- as 100vh, put align-seft and justify-content and display:flex. this bigger div will center everything -->
        <!-- inside it, while allow scrolling. All thanks to this link https://stackoverflow.com/questions/48516538/flex-align-items-center-not-centering-items -->
        <div style="display:flex; height:100vh; align-self:center; justify-content:center;">
            <div class="container main-block">
            <div id="sign-up">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-3 round-btn">
                                <a href="./trang_chu.php" aria-label="Return to homepage"><button class="btn" aria-label="return"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button></a>
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Thay mật khẩu</h1>
                                </div>
                                <form action="create_new_pass.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="new_pass" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="new_pass" id="new_pass" class=" form-control input-field" placeholder="Mật khẩu" required>  
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_password[$p] ?>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="confirm_pass" class="visually-hidden-focusable">
                                        Confirm Password
                                        </label>
                                        <input type="password" name="confirm_pass" id="confirm_pass" class=" form-control input-field" placeholder="Xác nhận mật khẩu" required>
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_confirm_password[$cp] ?>
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit" name="submit_btn" value="sign_up">Đổi mật khẩu</button>
                                    </div>
                                    <?php
                                    echo "<input type=\"hidden\" id=\"code\" name=\"code\" value=". $code .">";
                                    ?>
                                </form>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container col-12">
                                <img src="../css/reset_code/img/mumei-nanashi-mumei.gif" alt="wow" class="my-img">
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/dang_nhap_dang_ki/script.js"></script>
        
        <script>

            function reportErrorPassword(id, invalid_location) {
                var input_field = $(id);
                var password = input_field.val();
                var error = 0;

                if (password == "") {
                    error = 1;
                } else if (password.length < 6){
                    error = 2;
                }
                if (error == 0) {
                    if (!input_field.hasClass("is-valid")) {
                        input_field.addClass("is-valid");
                    }
                    if (input_field.hasClass("is-invalid")) {
                        input_field.removeClass("is-invalid");
                    }
                } else {
                    if (!input_field.hasClass("is-invalid")) {
                        input_field.addClass("is-invalid");
                    }
                    if (input_field.hasClass("is-valid")) {
                        input_field.removeClass("is-valid");
                    }
                    var error_message = "";
                    switch (error) {
                        case 1: 
                            error_message = "<?php echo $error_password[1] ?>";
                            break;
                        case 2:
                            error_message = "<?php echo $error_password[2] ?>";
                            break;
                    }

                    input_field.parent().parent().children(".invalid").eq(invalid_location).html(error_message);
                }
            }

            function reportErrorConfirmPassword(preid, id, invalid_location) {
                var input_field = $(id);
                var cpassword = input_field.val();
                var password = $(preid).val();
                var error = 0;

                if (cpassword == "") {
                    error = 1;
                } else if (cpassword != password){
                    error = 2;
                }
                if (error == 0) {
                    if (!input_field.hasClass("is-valid")) {
                        input_field.addClass("is-valid");
                    }
                    if (input_field.hasClass("is-invalid")) {
                        input_field.removeClass("is-invalid");
                    }
                } else {
                    if (!input_field.hasClass("is-invalid")) {
                        input_field.addClass("is-invalid");
                    }
                    if (input_field.hasClass("is-valid")) {
                        input_field.removeClass("is-valid");
                    }
                    var error_message = "";
                    switch (error) {
                        case 1: 
                            error_message = "<?php echo $error_confirm_password[1] ?>";
                            break;
                        case 2:
                            error_message = "<?php echo $error_confirm_password[2] ?>";
                            break;
                    }

                    input_field.parent().parent().children(".invalid").eq(invalid_location).html(error_message);
                }
            }



            $("document").ready(function() {
                //sign_up--------------------------------------------------------

                //password
                $("#new_pass").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(0).empty();
                });
                $("#new_pass").focusout(function() {
                    var id = "#new_pass";
                    var invalid_location = 0;
                    reportErrorPassword(id, invalid_location);
                });

                //confirm password
                $("#confirm_pass").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(1).empty();
                });
                $("#confirm_pass").focusout(function() {
                    var id = "#confirm_pass";
                    var preid = "#new_pass"
                    var invalid_location = 1;
                    reportErrorConfirmPassword(preid, id, invalid_location);
                });

                $("form").eq(0).submit(
                    function(e) {
                        var res = $("form").eq(0).find(".is-invalid");
                        if (res.length > 0) {
                            e.preventDefault();
                            console.log("Some field is in bad state");
                        }
                    }
                )
            //----------------------------------------------------------------   

            
    
            });
            console.log($("#sign_in_email").parent().parent().children(".invalid").eq(1));
        </script>
        
    </body>
</html>

<?php
    }
}
?>