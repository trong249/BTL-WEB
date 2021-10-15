<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập / Đăng kí</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link href="./css/dang_nhap_dang_ki/dang_nhap_dang_ki.css" rel="stylesheet">
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
                            <div class="mt-5 round-btn">
                                <a href="./trang_chu.php"><button class="bi bi-arrow-left btn text-black-50" style="font-size: x-large;"></button></a>
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Đăng kí</h1>
                                </div>
                                <form>
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
                                    <div class="input-group my-3">
                                        <span class="bi bi-lock-fill input-group-text bg-white border-white"></span>
                                        <label for="password" class="visually-hidden-focusable">
                                        Password
                                        </label>
                                        <input type="password" name="password" id="password" class=" form-control input-field" placeholder="Xác nhận mật khẩu" required>
                                    </div>
                                    <div class="my-5">
                                        <button class="btn btn-primary my-btn" type="submit">Đăng kí</button>
                                    </div>
                                </form>
                                <div class="center-text">
                                    <span>Đã có tài khoản? </span><a class="black-link" href="#" onclick="to_sign_in()">Đăng nhập ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container col-12">
                                <img src="./css/dang_nhap_dang_ki/img/online-shopping.jpg" alt="wow" class="my-img">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sign-in">
                    <div class="container row">
                        <div class="col-12">
                            <div class="mt-5 round-btn">
                                <a href="./trang_chu.php"><button class="bi bi-arrow-left btn text-black-50" style="font-size: x-large;"></button></a>
                            </div>
                        </div>
                        <div class="d-none d-md-flex col-md-7 my-3">
                            <div class="container">
                                <img src="./css/dang_nhap_dang_ki/img/1106_U1RVRElPIEtBVCAwODUtODE.jpg" alt="wow" class="my-img">
                            </div>
                        </div>
                        <div class="col col-md-5 my-3">
                            <div class="container-fluid">
                                <div class="header">
                                    <h1>Đăng nhập</h1>
                                </div>
                                <form>
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
                                        <button class="btn btn-primary my-btn" type="submit">Đăng nhập</button>
                                    </div>
                                </form>
                                <div class="center-text">
                                    <span>Chưa có tài khoản? </span><a class="black-link" href="#" onclick="to_sign_up()">Tạo tài khoản</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function to_sign_in() {
                var to_si = document.getElementById("sign-in").style.display = "flex";
                var su = document.getElementById("sign-up").style.display = "none";
            }
            function to_sign_up() {
                var to_su = document.getElementById("sign-up").style.display = "flex";
                var si = document.getElementById("sign-in").style.display = "none";
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>