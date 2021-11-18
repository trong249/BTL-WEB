<?php 
session_start();
require_once "../shop/check_rememberme.php";
require_once "./check_session_user.php";
require_once "./connectDB.php";


$userid = $_SESSION["id"];
$sql_cmd = "SELECT * FROM users WHERE userID=$userid";
$result = mysqli_query($conn, $sql_cmd);
$result = mysqli_fetch_assoc($result);

$user_name = $result["username"];
$user_email = $result["email"];
$user_address = $result["dia_chi"];

$n=$e=$cp = 0;

$good = false;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["n"])) $n = $_GET["n"];
    if(isset($_GET["e"])) $e = $_GET["e"];
    if(isset($_GET["cp"])) $cp = $_GET["cp"];
    if(isset($_GET["error"]) && $_GET["error"] == "none") $good=true;
}


$error_username = array("",
                    "Xin hãy nhập username của bạn",
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
$error_address = array("",
                        "Địa chỉ không nên có kí tự đặc biệt")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang cá nhân</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="../css/trang_ca_nhan/trang_ca_nhan.css" rel="stylesheet">
        
        
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              
            <a class="navbar-brand" href="../shop/trang_chu.php"><img class="logo-f" src="../img/main_logo.png" alt="Logo"></a>
              
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">iShin</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="../shop/trang_chu.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Trang cá nhân</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./doi_mat_khau.php">Đổi mật khẩu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../shop/logout.php">Đăng xuất</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    <div style="display:flex; align-self:center; justify-content:center;">
    <div class="container justify-content-center align-items-center" id="myform">
        <h1 class="title">Xin chào <?php echo $user_name ?>!</h1>
        <br>
        <form action="./validate_trang_ca_nhan.php" method="POST">
            <div class="container">
                <label for="user_name" class="form-label">Username</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="<?php echo $user_name ?>">
                <div class="invalid"><?php echo $error_username[$n] ?></div>
                <label for="user_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="<?php echo $user_email ?>">
                <div class="invalid"><?php echo $error_email[$e] ?></div>
                <label for="user_address" class="form-label">Địa chỉ</label>
                <textarea name="user_address" id="user_address" rows="5" placeholder="<?php echo $user_address ?>" class="form-control" maxlength="1000"></textarea>
                <div class="invalid"><?php echo $error_address[$cp] ?></div>
                <button class="btn btn-success my-3" type="submit">Cập nhật</button>
            </div>
            <div style="color:green" id="success"><?php if ($good) echo "Cập nhật thông tin thành công" ?></div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>

        function reportErrorUsername(id, invalid_location) {
            var input_field = $(id);
            var username = input_field.val();
            console.log(username);
            var error = 0;
            
            if (username == "") {
                error = 0;
            }else {
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

                input_field.parent().children(".invalid").eq(invalid_location).html(error_message);
            }
        }


        function reportErrorEmail(id, invalid_location) {
                    var input_field = $(id);
                    var email = input_field.val();
                    var error = 0;
                    
                    if (email == "") {
                            error = 0;
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

                        input_field.parent().children(".invalid").eq(invalid_location).html(error_message);
                    }
            }

        function reportErrorAddress(id, invalid_location) {
            var input_field = $(id);
            var address = input_field.val();
            console.log(address);
            var error = 0;
            
            if (address == "") {
                error = 0;
            }else {
                var pattern = /^[ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\d\w,./\\]*$/;
                if (!pattern.test(address)) {
                    error = 1;
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
                        error_message = "<?php echo $error_address[1] ?>";
                        break;
                }

                input_field.parent().children(".invalid").eq(invalid_location).html(error_message);
            }
        }

        $("document").ready(function() {
            $("#user_name").focusin(function() {
                $(this).parent().find(".invalid").eq(0).empty();
            })

            $("#user_name").focusout(function() {
                reportErrorUsername("#user_name", 0);
            })

            $("#user_email").focusin(function() {
                $(this).parent().find(".invalid").eq(1).empty();
            })

            $("#user_email").focusout(function() {
                reportErrorEmail("#user_email", 1);
            })

            $("#user_address").focusin(function() {
                $(this).parent().find(".invalid").eq(2).empty();
            })

            $("#user_address").focusout(function() {
                reportErrorAddress("#user_address",2);
            })

            $("form").eq(0).submit(function(e) {
                var valid = $(".is-invalid").length;
                if (valid > 0) {
                    e.preventDefault();
                }
            })
        })
    </script>
    <!-- <script src="xxxxx"></script> -->
</body>
</html>

<?php

mysqli_close($conn);

?>