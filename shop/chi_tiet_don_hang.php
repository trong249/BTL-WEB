<?php
    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");

    $ma_don;
    if(isset($_REQUEST['ma_don'])){
        $ma_don=$_REQUEST['ma_don'];
    }
    $user;
    if(isset($_REQUEST['user'])){
        $user=$_REQUEST['user'];
    }
/****************************************************************************************/  
      //  lấy  bảng  sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr_san_pham=array();
    while($res=$row->fetch_assoc()){
        array_push($arr_san_pham,$res);
    }
    //  lấy  bảng  đơn hàng 
    $selectData = "SELECT * FROM don_hang";
    $row=$sql->query($selectData);
    $arr_don_hang=array();
    while($res=$row->fetch_assoc()){
        array_push($arr_don_hang,$res);
    }
    // lấy bản hoa don chi tiet
    $selectData = "SELECT * FROM hoa_don_chi_tiet";
    $row=$sql->query($selectData);
    $arr=array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
    $arr_chi_tiet= array_filter($arr, "getSpArr");
/****************************************************************************************/ 
    function getSpArr($dh){
        return $dh['ma_don']==$GLOBALS['ma_don'];
    }
    

    function getNameSp($arr,$id){
        foreach($arr as $i=>$sp){
            if($sp['id']==$id){
                return $sp['ten_hh'];
                break;
            }
        }
    }
    function getPrice1Sp($arr,$id){
        foreach($arr as $i=>$sp){
            if($sp['id']==$id){
                return $sp['don_gia'];
            }
        }
    }
    function getDiscount($arr,$id){
        foreach($arr as $i=>$sp){
            if($sp['id']==$id){
                return $sp['giam_gia'];
            }
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <!-- favicon -->
        <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
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
                <?php echo "<h1>CHI TIẾT ĐƠN HÀNG:$ma_don</h1><br>";  ?>
                <p>Danh sách sản phẩm: </p>

                <!-- /. CONTENT  -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>TÊN HÀNG HÓA</th>
                            <th>SỐ LƯỢNG</th>
                            <th>SIZE</th>
                            <th>ĐƠN GIÁ/SP</th>
                            <th>GIẢM GIÁ</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum=0;
                            foreach($arr_chi_tiet as $i => $sp){
                                $name=getNameSp($arr_san_pham,$sp['ID_san_pham']);
                                $qty=$sp['so_luong'];
                                $size=$sp['size'];
                                $don_gia=getPrice1Sp($arr_san_pham,$sp['ID_san_pham']);
                                $giam_gia=getDiscount($arr_san_pham,$sp['ID_san_pham']);
                                $price=($don_gia-$giam_gia*$don_gia/100)*$qty;
                                $sum+=$price;

                                $dg=number_format($don_gia);
                                $pri=number_format($price);
                                echo "<tr>
                                        <td> $name </td>
                                        <td> $qty </td>
                                        <td> $size </td>
                                        <td> $dg VNĐ</td>     
                                        <td>$giam_gia%</td>
                                        <td> $pri VNĐ</td>                               
                                    </tr>";
                            } 
                        ?>
                        <!-- <tr>
                            <td> Adidas UltraBoost DNA City </td>
                            <td> 1 </td>
                            <td> 2.100.000 VNĐ</td>     
                            <td>0%</td>
                            <td> 2.100.000 VNĐ</td>                               
                        </tr> -->
                        <tr>
                            <td colspan="5" style = "text-align:center;"><b>TỔNG TIỀN</b></td>
                            <td > <?php echo number_format($sum) ?> VNĐ</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="quan_ly_don.php?user=<?php echo $user ?>"><button class="btn btn-danger">Danh sách đơn hàng</button></a>
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
