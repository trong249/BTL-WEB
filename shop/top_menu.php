<?php
session_start();
$login = false;
$vaitro = 0;
 
// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $login = true;
    $vaitro = $_SESSION["vai_tro"];
}

?>
    <style>
        .top-menu{
            width: 100%;
            line-height: 60px;
            background-color: #363636;
        }
        .top-menu .container a{
            color: #fff;
            font-size: 13px;
        }
        .top-menu .container a:hover{
            text-shadow: 1px 2px 4px #fff;
        }
        .top-menu .container .gio-hang i{
            font-size: 20px;
        }
        .top-menu .container a.active{
            color: #126eb9;
        }
        .top-menu .container a:hover {
            text-shadow: 3px 2px 4px white;
        }
        .top-menu .container{
            display: flex;
            justify-content: space-between;
            max-height: 60.8px;
        }
        .top-menu .container .menu{
            width: 60%;
        }
        .top-menu .container .menu ul{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }
        .top-menu .container .close{
            display: none;
            font-size: 30px;
            color: #fff;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .top-menu .container .menu-bar{
            display: none;
            color: #fff;
            line-height: 60px;
            font-size: 30px;
        }
        @media only screen and (max-width: 770px) {
            .top-menu .container .menu{
                position: fixed;
                z-index: 2;
                right: 0px;
                height: 100vh;
                width: 50%;
                background-color:#363636 ;
                box-shadow: -2px 0px 2px black;
                transform: translateX(110%);
                transition: all 0.3s ease-in-out;
                z-index: 9;
            }
            .top-menu .container .menu.active{
            transform: translateX(0);
            }
            .top-menu .container .menu ul {
                flex-direction: column;
                padding-top: 70px;
                margin-left: 30px;
            }
            .top-menu .container .menu-bar{
                display: block;
            }
            .top-menu .container .close{
                display: block;
            }
            .top-menu .container .gio-hang{
                position: absolute;
                top: 10px;
            }
        }
    </style>
<!-- -------------------------------------------------------------------------------------------------------- -->    
    <section class="top-menu">  
        <div class="container">
            <div class="login-register">
                
            <?php 
            if (!$login) {
                echo "<span><a href=\"./dang_nhap_dang_ki.php?page=sign_up\" class=\"login\">Đăng nhập</a></span><span style=\"color:white; padding: 0 2px;\">/</span><span><a href=\"./dang_nhap_dang_ki.php?page=sign_in\" class=\"register\">Đăng ký</a></span>";
            } else {
                if ($vaitro == 0) {
                    echo "<span><a href=\"./mypage.php\" class=\"register\">Trang cá nhân</a></span><span style=\"color:white; padding: 0 2px;\">/</span><span><a href=\"./logout.php\" class=\"register\">Đăng xuất</a></span>";
                } else {
                    echo "<span><a href=\"../admin/index.php\" class=\"register\">Dashboard</a></span><span style=\"color:white; padding: 0 2px;\">/</span><span><a href=\"./logout.php\" class=\"register\">Đăng xuất</a></span>";
                }
            }
            ?>
                        
            </div>
            <div class="menu">
                <ul>
                    <li><a href="trang_chu.php">TRANG CHỦ</a></li>
                    <li><a href="san_pham.php">SẢN PHẨM</a></li>
                    <li><a href="gioi_thieu.php">GIỚI THIỆU</a></li>
                    <li><a href="tin_tuc.php">TIN TỨC</a></li>
                    <li><a href="lien_he.php">LIÊN HỆ</a></li>
                    <li class='gio-hang'><a href="gio_hang.php"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
                <i class="fas fa-times close" onclick="closeMenu()"></i>
            </div>
            <i class="fas fa-bars menu-bar" onclick="openMenu()"></i> 
        </div>
    </section>
<!-- -------------------------------------------------------------------------------------------------------- -->
    <script>
        function openMenu(){
            document.querySelector('.top-menu .container .menu').classList.add('active');
        }

        function closeMenu(){
            document.querySelector('.top-menu .container .menu').classList.remove('active');
        }
    </script>