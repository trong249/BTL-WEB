<?php
    require_once "../check_admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/don_hang_style.css">

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
                        <tr>
                            <td>123</td>
                            <td>trong249</td>
                            <td>14-10-2021</td>
                            <td><span id="status_1" class="status">Chưa xác nhận</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>456</td>
                            <td>trong</td>
                            <td>14-10-2021</td>
                            <td><span id="status_2" class="status">Đã xác nhận</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>456</td>
                            <td>trong</td>
                            <td>14-10-2021</td>
                            <td><span id="status_3" class="status">Đang giao hàng</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>456</td>
                            <td>trong</td>
                            <td>14-10-2021</td>
                            <td><span id="status_4" class="status">Hoàn thành</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>456</td>
                            <td>trong</td>
                            <td>14-10-2021</td>
                            <td><span id="status_0" class="status">Đã hủy đơn</span></td>
                            <td><a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->

</body>
</html>