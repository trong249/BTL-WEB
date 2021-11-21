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
    <!-- favicon -->
    <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/quan_ly_don/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <title>Quản lý đơn hàng</title>
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(6) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
<section class="main container" style="margin-top:50px ;"> 
        <div class="display-filter container" style="margin-bottom: 30px;">
            <div class="link">
                <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
                <span>/</span>
                <a href="" style="color: black;">QUẢN LÝ ĐƠN HÀNG</a>
            </div>
        </div>
        <div class="text">
            <h2>QUẢN LÝ ĐƠN HÀNG</h2>
            <p>Dưới đây là danh sách các đơn hàng mà bạn đã đặt</p>
        </div>

        <div class="manage-table">
            <table class="table table-hover">
                <thead class="thead-dark">
                   <tr>
                      <th style="width: 20%">Mã Đơn Hàng</th>
                      <th style="width: 20%">Ngày mua</th>
                      <th style="width: 20%">Tình trạng</th>
                      <th style="width: 20%">Chi tiết</th>
                      <th style="width: 20%">Ghi chú</th>
                   </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT ma_don,date,tinh_trang  FROM don_hang";
                    $result = mysqli_query($link, $query);
                    if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            $id = $row['ma_don'];
                            $date = $row['date'];
                            $tinh_trang = $row['tinh_trang'];
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$date</td>";
                            echo "<td><button type=\"button\" class=\"btn btn-warning btn-sm\">$tinh_trang</button></td>";
                            echo "<td><a href=\"chi_tiet_don_hang.php?id=$id\" class=\"btn btn-outline-info btn-sm\" role=\"button\">Chi tiết</a></td>";
                            echo "<td>-</td>";
                            echo "</tr>";
                        }
                    }
                  ?>
                   
                </tbody>
             </table>
        </div>
        


    </section>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>