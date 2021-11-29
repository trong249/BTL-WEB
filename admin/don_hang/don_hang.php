<?php
    require_once "../check_admin.php";

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/  
      //  lấy  bảng  đơn hàng
    $selectData = "SELECT * FROM don_hang";
    $row=$sql->query($selectData);
    $arr=array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
/****************************************************************************************/ 
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
    <link rel="stylesheet" href="./css/don_hang_style.css">
    <link rel="icon" href="../../img/tachnen.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Danh sách đơn hàng</title>
</head>
<body>
    <div class="wrap">  

        <div class="left-side-menu">
            <div class="logo">
                <p>ISHINE</p>
            </div>
            <ul class="menu-list">
                <a href="../trang_chu/trang_chu.php">
                    <li>
                        <i class="fa fa-dashboard"></i>TRANG CHỦ
                    </li>
                </a>       
                <a href="../brand/brand.php">
                    <li>
                        <i class="fa fa-list-alt" aria-hidden="true"></i>NHÃN HIỆU
                    </li>
                </a> 
                <a href="../hang_hoa/hang_hoa.php">
                    <li>
                        <i class="fa fa-qrcode"></i>HÀNG HÓA
                    </li>
                </a> 
                <a href="../user/user.php">
                    <li>
                        <i class="fa fa-user"></i>USER
                    </li>
                </a> 
                <a href="../binh_luan/binh_luan.php">
                    <li>
                        <i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN
                    </li>
                </a> 
                <a href="../don_hang/don_hang.php">
                    <li>
                        <i class="fa fa-edit"></i>ĐƠN HÀNG
                    </li>
                </a> 
            </ul>
        </div>

        <div class="right-side-content">
            <div class="header">
                <div class="title">
                    <p>QUẢN LÍ CÁC ĐƠN HÀNG</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách các đơn hàng:</p>
                <div>
                    <table>
                        <tr>
                            <th>Mã đơn</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Tình trạng</th>
                            <th>Option</th>
                        </tr>
                        <?php
                            
                          foreach($arr as $i=>$don){
                              $ma_don=$don['ma_don'];
                              $user=$don['user'];
                              $date=$don['date'];
                              $statusId=getStatusId($don['tinh_trang']);
                              $statusText=getStatusText($don['tinh_trang']);
                              
                              echo "<tr>
                                        <td>$ma_don</td>
                                        <td>$user</td>
                                        <td>$date</td>
                                        <td><span id=\"$statusId\" class=\"status\">$statusText</span></td>
                                        <td><a href=\"./chi_tiet.php?ma_don=$ma_don\" class=\"chi_tiet\">Chi tiết</a></td>
                                    </tr> ";
                          }      
                            
                        ?>
                        <!-- <tr>
                            <td>123</td>
                            <td>trong249</td>
                            <td>14-10-2021</td>
                            <td><span id="status_1" class="status">Chưa xác nhận</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr> -->
                        
                    </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>