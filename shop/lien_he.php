<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lien_he/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
    <title>Ishin Shop - Liên hệ</title>
    <meta name="description" content="Liên hệ với Ishin Shop!">
    <meta name="robots" content="index, follow">
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(5) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-6">
                <div class="lienhe">
                    <h6>THÔNG TIN LIÊN HỆ</h6>

                    <table class="tus">
                        <tr>
                            <td> <img src="/img/lien_he/dia_chi.png" alt=""> </td>
                            <td>969 Ba Tháng Hai - Quận 10 - Hồ Chí Minh - Việt Nam</td>
                        </tr>
                        <tr>
                            <td><img src="/img/lien_he/phone.png" alt=""></td>
                            <td>0123456789</td>
                        </tr>
                        <tr>
                            <td><img src="/img/lien_he/gmail.png" alt=""></td>
                            <td>ishin_sneaker@gmail.com</td>
                        </tr>
                        <tr>
                            <td><img src="/img/lien_he/link.png" alt=""></td>
                            <td>ishin_sneaker.com</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <table>
                        <tr>
                            <td><input type="text" placeholder="Họ và tên"></td>
                            <td><input type="text" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Số điện thoại"></td>
                            <td><input type="text" placeholder="Địa chỉ"></td>
                        </tr>
                        <tr>

                            <td colspan="2"> <textarea name="" placeholder="Ý kiến đóng góp" id="" cols="56" rows="4"></textarea> </td>
                            <td></td>
                        </tr>
                        <tr>

                            <td> <button>GỬI</button> </td>
                            <td></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/lien_he/main.js"></script>
</body>
</html>
