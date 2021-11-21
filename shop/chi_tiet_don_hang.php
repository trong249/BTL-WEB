<?php
    $link = new mysqli('localhost','root','','data_ishine');
?>
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
        <link rel="stylesheet" href="../css/chi_tiet_don_hang/style1.css">

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

                <?php
                    if (isset($_GET['id'])){
                        $id = $_GET['id'];
                        $query1 = "SELECT user FROM don_hang WHERE ma_don='$id'";
                        $result1 = mysqli_query($link, $query1);
                        if (mysqli_num_rows($result1) > 0) {
                        $row = mysqli_fetch_assoc($result1);
                        $user = $row['user'];
                        echo "<h1>CHI TIẾT ĐƠN HÀNG SỐ $id</h1>";
                        echo "<h3>MÃ KHÁCH HÀNG: $user</h3>";
                        echo "<p>Danh sách sản phẩm: </p>";
                        }
                    }
                    else {
                        echo "<h1>CHI TIẾT ĐƠN HÀNG SỐ -</h1>";
                        echo "<h3>MÃ KHÁCH HÀNG: -</h3>";
                        echo "<p>Danh sách sản phẩm: </p>";
                    }
                ?>


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

                        <?php
                        if (isset($_GET['id'])){
                            $id = $_GET['id'];
                            $query = "SELECT ten_hang_hoa, so_luong, don_gia, giam_gia FROM hoa_don_chi_tiet WHERE ma_don='$id'";
                            $result = mysqli_query($link, $query);
                            $tong = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){
                                    $ten_hang_hoa = $row['ten_hang_hoa'];
                                    $so_luong = $row['so_luong'];
                                    $don_gia = $row['don_gia'];
                                    $giam_gia = $row['giam_gia'];
                                    $thanh_tien = (intval($don_gia) - intval($don_gia) * intval($giam_gia) / 100) * intval($so_luong);
                                    $tong = $tong + $thanh_tien;
                                    echo "<tr>";
                                    echo "<td>$ten_hang_hoa</td>"; 
                                    echo "<td>$so_luong</td>";
                                    echo "<td>$don_gia</td>";
                                    echo "<td>$thanh_tien</td>";
                                    echo "</tr>";
                                }
                                echo "<tr>";
                                echo "<td colspan=\"3\" style = \"text-align:center;\"><b>TỔNG TIỀN</b></td>";
                                echo "<td>$tong</td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "<tr>";
                            echo "<td>-</td>"; 
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "<td>-</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td colspan=\"3\" style = \"text-align:center;\"><b>TỔNG TIỀN</b></td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                            
                        ?>
                <!-- <h1>CHI TIẾT ĐƠN HÀNG SỐ x</h1><br>
                <h3>MÃ KHÁCH HÀNG: 123</h3>
                <p>Danh sách sản phẩm: </p> -->

                <!-- /. CONTENT  -->
                <!-- <table class="table table-hover">
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
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <a href="quan_ly_don.php"><button class="btn btn-danger">Danh sách đơn hàng</button></a>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
