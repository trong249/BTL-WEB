
<?php

function consolelog($message) {
    echo "<script> console.log(\"$message\"); </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập / Đăng kí</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="../css/dang_nhap_dang_ki/dang_nhap_dang_ki.css" rel="stylesheet">
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
            $error_username = array("",
                                "Xin hãy nhập Username của bạn", 
                                "Username chỉ nên chứa kí tự, số hoặc dấu gạch dưới",
                                "Username đã tồn tại");
            $error_email = array("",
                                "Xin hãy nhập email của bạn",
                                "Định dạng email không hợp lệ",
                                "Email đã tồn tại");
            $error_password = array("",
                                    "Xin hãy nhập mật khẩu",
                                    "Mật khẩu phải dài ít nhất 6 kí tự");
            $error_confirm_password = array("",
                                            "Xin hãy nhập mật khẩu xác nhận",
                                            "Mật khẩu không khớp");
            $error_name = array("",
                                "Xin hãy nhập Username hoặc Email của bạn",
                                "Username hoặc email không hợp lệ");
            $dang_nhap_fail = array("",
                                    "Username hoặc mật khẩu không đúng");

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET["page"]) && $_GET["page"] == "sign_up") {
                consolelog("I was in sign_up page");
                if(isset($_GET["n"])) $n = $_GET["n"];
                if(isset($_GET["e"])) $e = $_GET["e"];
                if(isset($_GET["p"])) $p = $_GET["p"];
                if(isset($_GET["cp"])) $cp = $_GET["cp"];
            }

            if(isset($_GET["page"]) && $_GET["page"] == "sign_in") {
                consolelog("I was in sign_in page");
                if(isset($_GET["n"])) $n = $_GET["n"];
                if(isset($_GET["p"])) $p = $_GET["p"];
                if(isset($_GET["cp"])) $cp = $_GET["cp"];
            }
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
                                    <h1>Đăng kí</h1>
                                </div>
                                <form action="dang_ki.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="sign_up_username" class="visually-hidden-focusable">User name</label>
                                        <input type="text" name="sign_up_username" id="sign_up_username" class=" form-control input-field" placeholder="User name" required> 
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_username[$n] ?>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-envelope-fill input-group-text bg-white border-white"></span>
                                        <label for="sign_up_email" class="visually-hidden-focusable">Email</label>
                                        <input type="" name="sign_up_email" id="sign_up_email" class=" form-control input-field" placeholder="Email" required> 
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_email[$e] ?>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="sign_up_password" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="sign_up_password" id="sign_up_password" class=" form-control input-field" placeholder="Mật khẩu" required>  
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_password[$p] ?>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="confirm-password" class="visually-hidden-focusable">
                                        Confirm Password
                                        </label>
                                        <input type="password" name="confirm-password" id="confirm-password" class=" form-control input-field" placeholder="Xác nhận mật khẩu" required>
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_confirm_password[$cp] ?>
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit" name="submit_btn" value="sign_up">Đăng kí</button>
                                    </div>
                                </form>
                                <div class="center-text mb-3">
                                    <span>Đã có tài khoản? </span><a class="black-link" onclick="to_sign_in()">Đăng nhập ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container col-12">
                                <img src="../css/dang_nhap_dang_ki/img/online-shopping.jpg" alt="wow" class="my-img">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sign-in">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-3 round-btn">
                                <a href="./trang_chu.php" aria-label="Return to homepage"><button class="btn" aria-label="return"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button></a>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container">
                                <img src="../css/dang_nhap_dang_ki/img/1106_U1RVRElPIEtBVCAwODUtODE.jpg" alt="wow" class="my-img">
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Đăng nhập</h1>
                                </div>
                                <form action="dang_nhap.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="sign_in_email" class="visually-hidden-focusable">Email/User name</label>
                                        <input type="text" name="sign_in_email" id="sign_in_email" class=" form-control input-field" placeholder="Email/User name" required> 
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_name[$n] ?>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="sign_in_password" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="sign_in_password" id="sign_in_password" class=" form-control input-field" placeholder="Mật khẩu" required>
                                    </div>
                                    <div class="invalid">
                                        <?php echo $error_password[$p] ?>
                                    </div>
                                    <div class="my-3">
                                        <label class="form-check-label" for="remember-me">
                                            Nhớ tài khoản
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="remember-me" value="remember" id="remember-me">
                                    </div>
                                    <div class="invalid">
                                        <?php echo $dang_nhap_fail[$cp] ?>
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit" name="submit_btn" value="sign_in">Đăng nhập</button>
                                        <span style="display:block; width:100%; text-align: center;" class="mt-3"><a href="#" class="black-link mx-3" onclick="to_forgor()">Quên mật khẩu?</a></span>
                                    </div>
                                </form>
                                <div class="center-text mb-3">
                                    <span>Chưa có tài khoản? </span><a class="black-link" href="#" onclick="to_sign_up()">Tạo tài khoản</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="forgor-password">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-3 round-btn">
                                <button class="btn" aria-label="Trở lại trang đăng nhập" onclick="to_sign_in()"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button>
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Quên mật khẩu</h1>
                                </div>
                                <form action="xu_ly_tai_khoan.php" method="post">
                                    <p>Nhập email của bạn và làm theo hướng dẫn để đặt lại mật khẩu cho tài khoản của bạn</p>
                                    <div class="input-group my-3">
                                        <span class="bi bi-envelope-fill input-group-text bg-white border-white"></span>
                                        <label for="forgor_email" class="visually-hidden-focusable">Email</label>
                                        <input type="text" name="forgor_email" id="forgor_email" class=" form-control input-field" placeholder="Email" required> 
                                    </div>
                                    <div class="invalid"><?php echo $error_email[$e]?></div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit" name="submit_btn" value="forgor">Xác nhận</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container col-12">
                                <img src="../css/dang_nhap_dang_ki/img/lqn26d6enxj71.png" alt="wow" class="img-fluid my-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/dang_nhap_dang_ki/script.js"></script>
        

        <?php
        // phai dat o duoi, boi vi ham to_sign_up can phai truy cap vao DOM, neu DOM ko ton tai, no cung ko truy cap duoc.
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET["page"]) && $_GET["page"] == "sign_up") {
            echo "<script>
                console.log(\"calling here from sign_up\");
                to_sign_up();
                </script>";
            }

            if(isset($_GET["page"]) && $_GET["page"] == "sign_in") {
                echo "<script>
                    console.log(\"calling here from sign_in\");
                    to_sign_in();
                    </script>";
            }

            if(isset($_GET["page"]) && $_GET["page"] == "forgor") {
                echo "<script>
                    console.log(\"calling here from forgor\");
                    to_forgor();
                    </script>";
            }
        }

        ?>
        <script>
            function reportErrorUsername(id, invalid_location) {
                    var input_field = $(id);
                    var username = input_field.val();
                    console.log(username);
                    var error = 0;
                    
                    if (username == "") {
                            error = 1;
                    } else {
                        var pattern = /^[a-zA-Z0-9_]+$/;
                        if (!pattern.test(username)) {
                            error = 2;
                        }
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

            function reportErrorEmail(id, invalid_location) {
                    var input_field = $(id);
                    var email = input_field.val();
                    var error = 0;
                    
                    if (email == "") {
                            error = 1;
                    } else {
                        var pattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
                        if (!pattern.test(email)) {
                            error = 2;
                        }
                    }
                    
                    if (error == 0) {
                        // neu email ok
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
                                error_message = "<?php echo $error_email[1] ?>";
                                break;
                            case 2:
                                error_message = "<?php echo $error_email[2] ?>";
                                break;
                        }

                        input_field.parent().parent().children(".invalid").eq(invalid_location).html(error_message);
                    }
            }

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

            function reportErrorName(id, invalid_location) {
                    var input_field = $(id);
                    var username = input_field.val();
                    console.log(username);
                    var error = 0;
                    
                    if (username == "") {
                            error = 1;
                    } else {
                        var pattern = /(^[a-zA-Z0-9_]+$)|([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$)/;
                        if (!pattern.test(username)) {
                            error = 2;
                        }
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
                                error_message = "<?php echo $error_name[1] ?>";
                                break;
                            case 2:
                                error_message = "<?php echo $error_name[2] ?>";
                                break;
                        }

                        input_field.parent().parent().children(".invalid").eq(invalid_location).html(error_message);
                    }
            }

            $("document").ready(function() {
                //sign_up--------------------------------------------------------
                //user name
                $("#sign_up_username").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(0).empty();
                });
                $("#sign_up_username").focusout(function() {
                    var id = "#sign_up_username";
                    var invalid_location = 0;
                    reportErrorUsername(id, invalid_location);
                });


                //email
                $("#sign_up_email").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(1).empty();
                });
                $("#sign_up_email").focusout(function() {
                    var id = "#sign_up_email";
                    var invalid_location = 1;
                    reportErrorEmail(id, invalid_location);
                });

                //password
                $("#sign_up_password").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(2).empty();
                });
                $("#sign_up_password").focusout(function() {
                    var id = "#sign_up_password";
                    var invalid_location = 2;
                    reportErrorPassword(id, invalid_location);
                });

                //confirm password
                $("#confirm-password").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(3).empty();
                });
                $("#confirm-password").focusout(function() {
                    var id = "#confirm-password";
                    var preid = "#sign_up_password"
                    var invalid_location = 3;
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

            //sign in-------------------------------------------------------- 
                    //vi su dung hon hop ca email va user name, nen chac 
                $("#sign_in_email").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(0).empty();
                });
                $("#sign_in_email").focusout(function() {
                    var id = "#sign_in_email";
                    var invalid_location = 0;
                    reportErrorName(id, invalid_location);
                });


                //password
                $("#sign_in_password").focusin(function() {
                    $(this).parent().parent().children(".invalid").eq(1).empty();
                });
                $("#sign_in_password").focusout(function() {
                    var id = "#sign_in_password";
                    var invalid_location = 1;
                    reportErrorPassword(id, invalid_location);
                });

                $("form").eq(1).submit(
                    function(e) {
                        var res = $("form").eq(1).find(".is-invalid");
                        if (res.length > 0) {
                            e.preventDefault();
                            console.log("Some field is in bad state");
                        }
                    }
                )
                //forgot-------------------------------------------------------------
                $("#forgor_email").focusin(function() {
                    $(this).parent().parent().find(".invalid").eq(0).empty();
                })
                
                $("#forgor_email").focusout(function() {
                    var id = "#forgor_email";
                    var invalid_location = 0;
                    reportErrorEmail(id, invalid_location);
                })

                function isValidJSONString(str) {
                    try {
                        JSON.parse(str);
                    } catch (e) {
                        return false;
                    }
                    return true;
                }

                $("form").eq(2).submit(function(e) {
                    console.log("Prevent form submit success!");
                    e.preventDefault();
                    var error = $(this).find(".is-invalid").length;
                    if (error == 0) {
                        var fg_email = $("#forgor_email").val();
                        console.log(fg_email);
                        $.post("./forgor.php",
                        {
                            forgor_email: fg_email
                        },
                        function(returnData, status) {
                            console.log(returnData);
                            if (!isValidJSONString(returnData)) {
                                var alertbox = $("<div></div>").text("Có lỗi xảy ra! Chúng tôi không thể gửi email tới bạn. Vui lòng thử lại sau").addClass("alert alert-danger");
                                console.log(alertbox);
                                console.log($(".container-fluid").eq(2));
                                $(".container-fluid").eq(2).append(alertbox).find("form").remove();
                                return;
                            }
                            result = JSON.parse(returnData)
                            console.log(result);
                            if (result["error_email"] != "") {
                                $("form").eq(2).find(".invalid").eq(0).empty().html(result["error_email"]);
                                var input_field = $("#forgor_email");
                                if (!input_field.hasClass("is-invalid")) {
                                    input_field.addClass("is-invalid");
                                }
                                if (input_field.hasClass("is-valid")) {
                                    input_field.removeClass("is-valid");
                                }
                            } else {
                                var alertbox = $("<div></div>").text(result["valid_email"]).addClass("alert alert-success");
                                console.log(alertbox);
                                console.log($(".container-fluid").eq(2));
                                var link_to_next_page = "<a class=\"text-white\"href=\"./check_reset_code.php?code=" + result["hashed_code"] +"\"><button class=\"btn btn-primary my-btn container\">Tới trang reset code</button></a>";
                                $(".container-fluid").eq(2).append(alertbox, link_to_next_page).find("form").remove();
                               
                            }
                        });
                    }
                })
    
            });
            console.log($("#sign_in_email").parent().parent().children(".invalid").eq(1));
        </script>
        
    </body>
</html>