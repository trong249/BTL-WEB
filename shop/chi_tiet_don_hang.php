<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <!-- favicon -->
        
        <!-- CSS -->
        <link rel="stylesheet" href="../css/chi_tiet_don_hang/style.css">

    <title>Chi tiết đơn hàng</title>
</head>
<body>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(5) a').classList.add('active')
    </script>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div id="page-wrapper">
		  <div class="header"> 
                <!-- /. XỬ LÝ CODE PHP  -->
            <div class="page-header">
                <h1>CHI TIẾT ĐƠN HÀNG SỐ x</h1><br>
                <h3>MÃ KHÁCH HÀNG: abc</h3>
                <p>Danh sách sản phẩm: </p>

                <!-- /. CONTENT  -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>TÊN HÀNG HÓA</th>
                            <th>SỐ LƯỢNG</th>
                            <th>ĐƠN GIÁ/SP</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td> Adidas UltraBoost DNA City </td>
                            <td> 1 </td>
                            <td> 2.100.000 VNĐ</td>     
                            <td> 2.100.000 VNĐ</td>                               
                        </tr>
                        <tr>
                            <td colspan="3" style = "text-align:center;"><b>TỔNG TIỀN</b></td>
                            <td> 2.100.000 VNĐ</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="quan_ly_don.php"><button class="btn btn-danger">Danh sách đơn hàng</button></a>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../../css/admin/js/custom-scripts.js"></script>

    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/gioi_thieu/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
