<!DOCTYPE html>
<html lang="vi">
    <head>
    <title>Thanh toán</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/thanh_toan/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(6) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
<section id="main">
            <div class="container">
                <div class="display-filter container">
                    <div class="link">
                        <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
                        <span>/</span>
                        <a href="" style="color: black;">THANH TOÁN</a>
                    </div>
                </div>
                <form action="" method="post" class="container row">
                    <div id="thong-tin-thanh-toan" class="d-flex col col-12 col-lg-6 flex-column">
                        <div class="container fancy-box">
                            <h4 class="text-uppercase my-3">Thông tin thanh toán</h4>
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required>
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                            <label for="note" class="form-label">Ghi chú</label>
                            <textarea name="note" id="note" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div id="don-hang" class="col col-12 col-lg-6">
                        <div class="container fancy-box pt-3">
                            <h4 class="text-uppercase mb-3">Đơn hàng của bạn</h4>
                            <div class="container border border-danger border-3" style="padding: 5px;">
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">SẢN PHẨM</div>
                                    <div class="justify-content-end text-bold">TỔNG</div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start">
                                        <span id="product-name">Adidas UltraBoot DNA City</span>
                                        <span id="product-amount">x 1</span>
                                    </div>
                                    <div class="justify-content-end">
                                        <span id="product-price-init">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">Tổng phụ</div>
                                    <div class="justify-content-end">
                                        <span id="product-price-secondary">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">
                                        Giao hàng
                                    </div>
                                    <div class="justify-content-end">
                                    Giao hàng miễn phí dưới 5km
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">TỔNG</div>
                                    <div class="justify-content-end">
                                        <span id="product-price-final">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="text-italic thanks" style="border-bottom:1px solid grey;">
                                    Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Cảm ơn quý khách đã ủng hộ Ishin shop. Chúc quý khách ngày mới tốt lành!
                                </div>
                                <button type="submit" class="btn btn-primary" aria-label="Đặt hàng">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/tin_tuc/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>