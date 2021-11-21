<?php
    $sql=mysqli_connect("localhost","root","","data_ishine");
    $user;
    if(isset($_REQUEST['user'])){
        $user=$_REQUEST['user'];
    }
/****************************************************************************************/  
      //  lấy  bảng  đơn hàng
    $selectData = "SELECT * FROM don_hang";
    $row=$sql->query($selectData);
    $arr=array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
    $arr_don_hang=array_filter($arr,"getDon");
    
/****************************************************************************************/ 
    function getDon($don){
        return $don['user']==$GLOBALS['user'];
    }
    function getStatusId($i){
        if($i==0){
            return "status_0";
        }
        if($i==1){
            return "status_1";
        }
        if($i==2){
            return "status_2";
        }
        if($i==3){
            return "status_3";
        }
        if($i==4){
            return "status_4";
        }
    }
    function getStatusText($i){
        if($i==0){
            return "Đã hủy đơn";
        }
        if($i==1){
            return "Chưa xác nhận";
        }
        if($i==2){
            return "Đã xác nhận";
        }
        if($i==3){
            return "Đang giao hàng";
        }
        if($i==4){
            return "Hoàn thành";
        }
    }
/****************************************************************************************/ 
    $sql->close();
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
                    foreach($arr_don_hang as $i => $don_hang){
                        $ma_don=$don_hang['ma_don'];
                        $date=$don_hang['date'];
                        $status=getStatusText($don_hang['tinh_trang']);
                        $statusId=getStatusId($don_hang['tinh_trang']);
                        echo " <tr>
                                    <td>$ma_don</td>
                                    <td>$date</td>
                                    <td><button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"$statusId\">$status</button></td>
                                    <td><a href=\"chi_tiet_don_hang.php?ma_don=$ma_don\" class=\"btn btn-outline-info btn-sm\" role=\"button\">Chi tiết</a></td>
                                    <td>-</td>
                                </tr>";
                    }
                ?>
                   
                </tbody>
             </table>
        </div>
        

                    <!--
                            <tr>
                                <td>$id</td>
                                <td>$date</td>
                                <td><button type=\"button\" class=\"btn btn-warning btn-sm\">$tinh_trang</button></td>
                                <td><a href=\"chi_tiet_don_hang.php?id=$id\" class=\"btn btn-outline-info btn-sm\" role=\"button\">Chi tiết</a></td>
                                <td>-</td>
                            </tr>
                     -->
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