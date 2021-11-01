<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gio_hang/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(6) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <section class="link container">
        <div>
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
            <span>/</span>
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">SẢN PHẨM</a>
            <span>/</span>
            <a href="gio_hang.php">GIỎ HÀNG</a>
        </div>
        <div style="text-decoration: underline;">
            <a href="quan_ly_don.php">Lịch sử mua hàng</a>
        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <section class='container content'>
        <div class="row">

            <div class="col-12 col-md-7 list-product">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="name">SẢN PHẨM</th>
                            <th class='img'>HÌNH ẢNH</th>
                            <th style="width: 20%;">GIÁ</th>
                            <th style="width: 20%;text-align: center;">SL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>YEEZY BOOST 350V2 ASH PEARL</td>
                            <td><img src="../img/san_pham/2.jpg" alt="" style="width: 80%;"></td>
                            <td>7,840,000 VNĐ</td>
                            <td style="text-align: center;">1</td>
                            <td><a href="#"><i class="fa fa-times-circle" aria-hidden="true" ></i></a></td>
                        </tr>                          
                    </tbody>
                </table>

                <a href="san_pham.php" class="continue-shopping">Tiếp tục xem sản phẩm</a>  
            </div>
            <!---------------------------------------------------------------------------------->
            <div class="col-12 col-md-5 order">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2" style="text-align: left;">ĐƠN HÀNG CỦA BẠN ĐÃ SẴN SÀNG </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tổng hóa đơn</td>
                            <td style="text-align:right;">7,840,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>Giao hàng</td>
                            <td style="text-align:right;">Giao hàng miễn phí <br>
                            trong ngày<br>
                            tại nội thành Hồ Chí Minh </td>
                        </tr>
                        <tr>
                            <td>Tổng sau thuế</td>
                            <td style="text-align:right;"><b>7,840,000 VNĐ</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="thanh_toan.php" class="go-to-order">TIẾN HÀNH ĐẶT HÀNG</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="js/chi_tiet_sp/main.js"></script>
</body>
</html>