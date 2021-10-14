<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/san_pham/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
    <title>Document</title>
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(2) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section class="banner">
        <div class="container">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/san_pham/sale-banner-1.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="img/san_pham/sale-banner-2.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="img/san_pham/sale-banner-3.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="img/san_pham/sale-banner-4.jpg" alt="" style="width: 100%; height:100%"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="display-filter container">
        <div class="link">
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
            <span>/</span>
            <a href="" style="color: black;">SẢN PHẨM</a>
        </div>
        <div class="filter">
            <label for="select-filter">Hiển thị tất cả sản phẩm theo</label>
            <select name="filer-display" id="select-filter">
                <option value="">Thứ tự mặc định</option>
                <option value="">Theo giá từ trên xuống</option>
                <option value="">Theo giá từ dưới lên</option>
            </select>
        </div>
    </section>

    <section class="container product-show">
        <div class="content">
            <!-- Danh muc + tìm kiếm + Giảm giá -->
            <div class="category-search-sale">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm...">
                    <div>
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                
                <div class="category">
                    <div>
                        <p>DANH MỤC</p>
                        <i class="fas fa-chevron-down" onclick="categoryResponesive()"></i>
                    </div>
                    <div class="menu">
                        <ul>
                            <li>Bitis</li>
                            <li>MLB</li>
                            <li>Nike</li>
                            <li>Adidas</li>
                            <li>Pegasus</li>
                            <li>Jordan</li>
                            <li>Blazer</li>
                            <li>Converse</li>
                        </ul>
                    </div>
                </div>

                <div class="sale">
                    <div class="title">
                        <p>SẢN PHẨM SALE UP 10-20%</p>
                    </div>

                    <div class="sale-product" >
                        <div class="img">
                            <img src="img/san_pham/1.jpg" alt="">
                        </div>
                        <div class="infor">
                            <p style="text-align:start;">Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</p>
                            <h4><span style="text-decoration: line-through;">899000</span> VNĐ -50%</h4>
                            <h4><span>500000</span> VNĐ</h4>
                        </div>
                    </div>
                    <div class="sale-product" >
                        <div class="img">
                            <img src="img/san_pham/1.jpg" alt="">
                        </div>
                        <div class="infor">
                            <p style="text-align:start;">Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</p>
                            <h4><span style="text-decoration: line-through;">899000</span> VNĐ -50%</</h4>
                            <h4><span>500000</span> VNĐ</h4>
                        </div>
                    </div>
                    <div class="sale-product" >
                        <div class="img">
                            <img src="img/san_pham/1.jpg" alt="">
                        </div>
                        <div class="infor">
                            <p style="text-align:start;">Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</p>
                            <h4><span style="text-decoration: line-through;">899000</span> VNĐ -50%</</h4>
                            <h4><span>500000</span> VNĐ</h4>
                        </div>
                    </div>
                    <div class="sale-product" >
                        <div class="img">
                            <img src="img/san_pham/1.jpg" alt="">
                        </div>
                        <div class="infor">
                            <p style="text-align:start;">Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</p>
                            <h4><span style="text-decoration: line-through;">899000</span> VNĐ -50%</</h4>
                            <h4><span>500000</span> VNĐ</h4>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Menu các sản phẩm -->
            <div class="product-menu">
                <!-- ô san phẩm -->
                <div class="row" >
                    <div class="col-6 col-md-3">
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ô san phẩm -->
                <div class="row" >
                    <div class="col-6 col-md-3">
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        
                        <div class="each-product">
                            <div class="img">
                                <img src="img/san_pham/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <p>Yeeezy Boost 350 v2</p> <br>
                                <p><span>7840000</span>VNĐ</p>
                            </div>
                            <div class="detail">
                               <a href="chi_tiet_sp.php">CHI TIẾT</a>
                            </div>
                            <div class="hot active">
                                HOT
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Phân trang sản phẩm -->
                <div class="pagination">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- xuất hiện khi màn hình nhỏ hơn 990px -->
    <section  class="sale_mobile">
        <div class="container">
            <div class="title">
                <p>SẢN PHẨM SALE UP 10-20%</p>
            </div>

            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product">
                                <img src="img/san_pham/1.jpg" alt="">
                                <div>
                                    <p class="name">Pegasus Chaz</p>
                                    <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                                    <p class="sale">500,000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <img src="img/san_pham/1.jpg" alt="">
                                <div>
                                    <p class="name">Pegasus Chaz</p>
                                    <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                                    <p class="sale">500,000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product">
                                <img src="img/san_pham/1.jpg" alt="">
                                <div>
                                    <p class="name">Pegasus Chaz</p>
                                    <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                                    <p class="sale">500,000 VNĐ</p>
                                </div>
                            </div>         
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <img src="img/san_pham/1.jpg" alt="">
                                <div>
                                    <p class="name">Pegasus Chaz</p>
                                    <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                                    <p class="sale">500,000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </section>
    

    

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/san_pham/main.js"></script>
</body>
</html>