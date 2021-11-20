
<?php

function consolelog($message) {
    echo "<script> console.log(\"$message\"); </script>";
}

function clean_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_code = clean_input($_POST["reset_code"]);
    $hash_code = clean_input($_POST["code"]);

    $check = password_verify($user_code, $hash_code);
    if ($check) {
        $md5 = md5($user_code);
        header("Location: create_new_pass.php?code=$user_code&m=$md5");
        exit();
    } else {
        header("Location: check_reset_code.php?code=$hash_code&n=3");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //comment dong if nay neu muon xem nhanh trang web. dong if nay dam bao trang check_reset_code phai co $_GET["code"]
    if (!isset($_GET["code"])) {
        echo "Something went wrong, I can feel it";
        header("refresh:3;url=\"trang_chu.php\"");
        exit;
    }
    //---------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset code</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="../css/reset_code/reset_code.css" rel="stylesheet">
        
    </head>
    <body>
        <?php
            $n = 0;
            $error_username = array("",
                                "Xin hãy nhập mã code", 
                                "Độ dài code chỉ tối đa 6 kí tự",
                                "Code không hợp lệ");

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            
                consolelog("I was in sign_up page");
                if(isset($_GET["n"])) $n = $_GET["n"];
            
        }

        ?>
        <!-- how to center a div on a page and make it scrollable with flex box: make a wrapper div, specify height -->
        <!-- as 100vh, put align-seft and justify-content and display:flex. this bigger div will center everything -->
        <!-- inside it, while allow scrolling. All thanks to this link https://stackoverflow.com/questions/48516538/flex-align-items-center-not-centering-items -->
        <div style="display:flex; height:100vh; align-self:center; justify-content:center;">
        <div class="container main-block">
            <div id="reset">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-3 round-btn">
                                <a href="./trang_chu.php" aria-label="Return to homepage"><button class="btn" aria-label="return"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button></a>
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Tạo mật khẩu mới</h1>
                                    <p>Nhập vào mã code đã được gửi qua mail của bạn để tiến hành tạo mật khẩu mới cho tài khoản của bạn</p>
                                </div>
                                <form action="check_reset_code.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-key-fill input-group-text bg-white border-white"></span>
                                        <label for="reset_code" class="visually-hidden-focusable">Mã code</label>
                                        <input type="text" name="reset_code" id="reset_code" class=" form-control input-field" placeholder="reset code" required> 
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_username[$n] ?>
                                    </div>
                                    <?php
                                    echo "<input type=\"hidden\" id=\"code\" name=\"code\" value=". $_GET["code"] .">";
                                    ?>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit" name="submit_btn" value="sign_up">Xác nhận</button>
                                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/dang_nhap_dang_ki/script.js"></script>
        

        <script>
            function reportErrorUsername(id, invalid_location) {
                    var input_field = $(id);
                    var username = input_field.val();
                    console.log(username);
                    var error = 0;
                    
                    if (username == "") {
                            error = 1;
                    } else {
                        if (username.length > 6) error = 2;
                    }
                    
                    if (error == 0) {
                        // neu user name ok
                        if (!input_field.hasClass("is-valid")) {
                            input_field.addClass("is-valid");
                        }
                        if (input_field.hasClass("is-invalid")) {
                            input_field.removeClass("is-invalid");
                        }
                    } else {
                        // neu username khong ok
                        if (!input_field.hasClass("is-invalid")) {
                            input_field.addClass("is-invalid");
                        }
                        if (input_field.hasClass("is-valid")) {
                            input_field.removeClass("is-valid");
                        }
                        
                        var error_message = "";
                        switch (error) {
                            case 1: 
                                error_message = "<?php echo $error_username[1] ?>";
                                break;
                            case 2:
                                error_message = "<?php echo $error_username[2] ?>";
                                break;
                        }

                        input_field.parent().parent().children(".invalid").eq(invalid_location).html(error_message);
                    }
            }



            $("document").ready(function() {
                //sign_up--------------------------------------------------------
                //user name
                $("#reset_code").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(0).empty();
                });
                $("#reset_code").focusout(function() {
                    var id = "#reset_code";
                    var invalid_location = 0;
                    reportErrorUsername(id, invalid_location);
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
            
    
            });
            console.log($("#sign_in_email").parent().parent().children(".invalid").eq(1));
        </script>
        
    </body>
</html>
<?php
}
?>