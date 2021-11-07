<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập / Đăng kí</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="../css/dang_nhap_dang_ki/dang_nhap_dang_ki.css" rel="stylesheet">
    </head>
    <body>
        <!-- how to center a div on a page and make it scrollable with flex box: make a wrapper div, specify height -->
        <!-- as 100vh, put align-seft and justify-content and display:flex. this bigger div will center everything -->
        <!-- inside it, while allow scrolling. All thanks to this link https://stackoverflow.com/questions/48516538/flex-align-items-center-not-centering-items -->
        <div style="display:flex; height:100vh; align-self:center; justify-content:center;">
            <div class="container main-block">
                <div id="sign-up">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-3 round-btn">
                                <a href="./trang_chu.php" aria-label="Return to homepage"><button class="btn"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button></a>
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Đăng kí</h1>
                                </div>
                                <form action="xu_ly_tai_khoan.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="fullname" class="visually-hidden-focusable">Họ và tên</label>
                                        <input type="text" name="fullname" id="fullname" class=" form-control input-field" placeholder="Họ và tên" required> 
                                    </div>
                                     <div class="input-group my-3">
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="username" class="visually-hidden-focusable">Username</label>
                                        <input type="text" name="username" id="username" class=" form-control input-field" placeholder="Username" required> 
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-envelope input-group-text bg-white border-white"></span>
                                        <label for="email" class="visually-hidden-focusable">Email</label>
                                        <input type="text" name="email" id="email" class=" form-control input-field" placeholder="Email" required> 
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="password" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="password" id="password" class=" form-control input-field" placeholder="Mật khẩu" required>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="password" class="visually-hidden-focusable">
                                        Confirm Password
                                        </label>
                                        <input type="password" name="confirm-password" id="confirm-password" class=" form-control input-field" placeholder="Xác nhận mật khẩu" required>
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-geo-alt input-group-text bg-white border-white"></span>
                                        <label for="address" class="visually-hidden-focusable">Address</label>
                                        <input type="text" name="address" id="address" class=" form-control input-field" placeholder="Địa chỉ" required> 
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit">Đăng kí</button>
                                    </div>
                                </form>
                                <div class="center-text mb-3">
                                    <span>Đã có tài khoản? </span><a class="black-link" href="#" onclick="to_sign_in()">Đăng nhập ngay</a>
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
                                <a href="./trang_chu.php" aria-label="Return to homepage"><button class="btn"><span class="bi bi-arrow-left text-black-50" style="font-size: x-large;"></span></button></a>
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
                                <form action="xu_ly_tai_khoan.php" method="post">
                                    <div class="input-group my-3">
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="email" class="visually-hidden-focusable">Email</label>
                                        <input type="text" name="email" id="email" class=" form-control input-field" placeholder="Email" required> 
                                    </div>
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="password" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="password" id="password" class=" form-control input-field" placeholder="Mật khẩu" required>
                                    </div>
                                    <div class="my-3">
                                        <label class="form-check-label" for="remember-me">
                                            Nhớ tài khoản
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="remember-me" value="remember" id="remember-me">
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit">Đăng nhập</button>
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
                                        <span class="bi bi-person-fill input-group-text bg-white border-white"></span>
                                        <label for="email" class="visually-hidden-focusable">Email</label>
                                        <input type="text" name="email" id="email" class=" form-control input-field" placeholder="Email" required> 
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn container" type="submit">Xác nhận</button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>