<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trang_chu/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>Document</title>
</head>
<body>
    <section class="top-menu">
        <div class="container">
            <div class="logo">
                <a href="">isShin</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="./trang_chu.php" class="active">TRANG CHỦ</a></li>
                    <li><a href="san_pham.php">SẢN PHẨM</a></li>
                    <li><a href="gioi_thieu.php">GIỚI THIỆU</a></li>
                    <li><a href="tin_tuc.php">TIN TỨC</a></li>
                    <li><a href="lien_he.php">LIÊN HỆ</a></li>
                </ul>
                <div class="login-register">
                    <i class="fas fa-user"></i>
                    <div>
                        <a href="./dang_nhap_dang_ki.php" class="login">Đăng nhập</a>
                        <a href="./dang_nhap_dang_ki.php" class="register">Đăng ký</a>
                    </div>
                </div>
                <i class="fas fa-times close" onclick="closeMenu()"></i>
            </div>
            <i class="fas fa-bars menu-bar" onclick="openMenu()"></i> 
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="banner">
        <div class="container">
             <div class="slogan">
                 <h1>CHÂN TÔI VẪN ĐANG ĐI TRÊN MẶT ĐẤT,</h1> <br> 
                 <h1>VÀ TÔI CHỈ ĐANG ĐI NHỮNG ĐÔI GIÀY TỐT HƠN ...</h1> <br> 
                 <p>Trích - "Roger Vivier"</p> <br>
                 <a href="" class="shopping">Shopping</a>
             </div>
        </div>

        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="img/trang_chu/logo-adidas.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-bitis.png" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-blazer.png" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-converse.png" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-jordan.png" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-mlb.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/trang_chu/logo-nike.png" alt=""></div>
            </div>
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class="popular_colection">
        <div class="title">
            <div>
                <h4>BST NỔI BẬT</h4> <br>
                <h1><span>BST</span> MÙA XUÂN 2021</h1> <br>
            </div>   
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="img/trang_chu/colection1.jpg" alt="">
                </div>
                <div class="col-6">
                    <div class="row" style="margin-bottom: 20px;">
                        <img src="img/trang_chu/colection2.jpg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="img/trang_chu/colection3.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img src="img/trang_chu/colection4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class="trendding_products">
        <div class="title">
            <div>
                <h4>XEM NGAY NÀO...</h4> <br>
                <h1>SẢN PHẨM <span>TRENDDING</span></h1> <br>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-bottom:30px ;">
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-1.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price">792,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-2.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price">792,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-3.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price">792,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-4.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price">792,000 VNĐ</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="see-more">Tất cả</a>
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class="banner-sale-off">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 img"> 
                    <img src="img/trang_chu/banner-sale-off.jpg" alt="">
                </div>
                <div class="col-6 infor">
                    <h1 style="font-weight: 200;"> CTKM SALE UP TO</h1><br>
                    <h2 style="font-weight: 200;"><span style="color: #58aaec;">50%</span> toàn bộ sản</h2>
                    <h2 style="font-weight: 200;">phẩm tại shop !</h2> <br>
                    <p style="color:rgb(165, 165, 165);">Sự kiện diễn ra đến hết tháng 5/2021</p> <br>
                    <a href="">Xem ngay</a>
                </div>
            </div>    
        </div>
        <div class="container service">
            <div class="row">
                <div class="col-md-4 wrap">
                    <div class="icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div style="padding: 7px;">
                        <p><span style="color: #19d7f8;">Miễn phí </span>vận chuyển</p>
                        <p>cho các đơn hàng > 2.000K</p>
                    </div>
                </div>
                <div class="col-md-4 wrap">
                    <div class="icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div style="padding: 7px;">
                        <p><span style="color: #19d7f8;">Nhiệt tình</span> tư vấn</p>
                        <p>và hỗ trợ tận tình 24/7</p>
                    </div>
                </div>
                <div class="col-md-4 wrap">
                    <div class="icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div style="padding: 7px;">
                        <p><span style="color: #19d7f8;">Chế đô</span> quà tặng hấp</p>
                        <p>dẫn cho mọi khách hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class="sale_off">
        <div class="title">
            <div>
                <h4>XEM NGAY NÀO...</h4> <br>
                <h1>SẢN PHẨM <span>SALE-OFF</span></h1> <br>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-bottom:30px ;">
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-1.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                            <p class="sale">500,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-2.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                            <p class="sale">500,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-3.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                            <p class="sale">500,000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" style="margin-top: 20px;">
                    <div class="product">
                        <img src="img/trang_chu/trendding-4.png" alt="">
                        <div>
                            <p class="name">Pegasus Chaz</p>
                            <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                            <p class="sale">500,000 VNĐ</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="see-more">Tất cả</a>
        </div>
    </section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- import FOOTER-SECTION -->
    <?php
        require('footer.php')
    ?>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script src="js/trang_chu/main.js"></script>

</body>
</html>