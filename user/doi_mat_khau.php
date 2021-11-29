<?php 
session_start();
require_once "../shop/check_rememberme.php";
require_once "./check_session_user.php";
require_once "./connectDB.php";


$userid = $_SESSION["id"];
$sql_cmd = "SELECT * FROM users WHERE userID=$userid";
$result = mysqli_query($conn, $sql_cmd);
$result = mysqli_fetch_assoc($result);

$hashed_password = $result["mat_khau"];
$user_name = $result["username"];
$user_email = $result["email"];
$user_address = $result["dia_chi"];

$op=$np=$cp = 0;

$good = false;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["op"])) $op = $_GET["op"];
    if(isset($_GET["np"])) $np = $_GET["np"];
    if(isset($_GET["cp"])) $cp = $_GET["cp"];
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
                        "Mật khẩu phải dài ít nhất 6 kí tự",
                        "Mật khẩu cũ không đúng!");
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
        <title>Đổi mật khẩu</title>
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
                      <a class="nav-link" href="../shop/gio_hang.php">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./trang_ca_nhan.php">Trang cá nhân</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Đổi mật khẩu</a>
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
    <h1 class="title">Đổi mật khẩu</h1>
        <br>
        <form action="./validate_doi_mat_khau.php" method="POST">
            <div class="container">
                <label for="old_password" class="form-label">Nhập lại mật khẩu cũ</label>
                <div class="input-group border-bottom border-dark">
                    <span class="bi bi-key-fill input-group-text bg-white border-white"></span>
                    <input type="password" class="form-control border-white" name="old_password" id="old_password" required>
                </div>
                <div class="invalid"><?php echo $error_password[$op] ?></div>
                <label for="new_password" class="form-label">Mật khẩu mới</label>
                <div class="input-group border-bottom border-dark">
                    <span class="bi bi-key input-group-text bg-white border-white"></span>
                    <input type="password" class="form-control border-white" name="new_password" id="new_password" required>
                </div>
                <div class="invalid"><?php echo $error_password[$np] ?></div>
                <label for="confirm_password" class="form-label">Nhập lại mật khẩu mới</label>
                <div class="input-group border-bottom border-dark">
                    <span class="bi bi-key input-group-text bg-white border-white"></span>
                    <input type="password" class="form-control border-white" name="confirm_password" id="confirm_password" required>
                </div>
                <div class="invalid"><?php echo $error_confirm_password[$cp] ?></div>
                <button class="btn btn-success form-control my-3" type="submit" >Đổi mật khẩu</button>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
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
            $("#old_password").focusin(function() {
                $(this).parent().parent().children(".invalid").eq(0).empty();
            });
            $("#old_password").focusout(function() {
                var id = "#old_password";
                var invalid_location = 0;
                reportErrorPassword(id, invalid_location);
            });

            $("#new_password").focusin(function() {
                $(this).parent().parent().children(".invalid").eq(1).empty();
            });
            $("#new_password").focusout(function() {
                var id = "#new_password";
                var invalid_location = 1;
                reportErrorPassword(id, invalid_location);
            });

            //confirm password
            $("#confirm_password").focusin(function() {
                $(this).parent().parent().children(".invalid").eq(2).empty();
            });
            $("#confirm_password").focusout(function() {
                var id = "#confirm_password";
                var preid = "#new_password"
                var invalid_location = 2;
                reportErrorConfirmPassword(preid, id, invalid_location);
            });

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