<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/chi_tiet_style.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Chi tiết đơn hàng</title>
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
                    <a href="./don_hang.php"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                </div>
            </div>
            <div class="content">
                <p style="font-size: 25px;">Mã đơn hàng: 123</p><br>
                <p>Họ và tên: <b>Nguyen Van Trong</b></p>
                <p>Username: <b>trong249</b></p>
                <p>Email: <b>trong@gmail.com</b></p>
                <p>Số điện thoại: <b>0123456789</b></p>
                <p style="margin-bottom: 30px;">Địa chỉ giao hàng: <b>KTX khu A, Linh Trung, Thủ Đức</b></p>

                
                <p>Dưới đây là những sản phẩm mà khách hàng đã mua:</p> <br>
                <div>
                    <table style="margin-bottom: 30px;">
                        <tr>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ LƯỢNG</th>
                            <th>ĐƠN GIÁ/SP</th>
                            <th>GIẢM GIÁ</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                        <tr>
                            <td>YEEZY BOOST 350V2 ASH PEARL</td>
                            <td>1</td>
                            <td>8,000,000 VNĐ</td>   
                            <td>0 <span>%</span></td>  
                            <td>8,000,000 VNĐ</td>                               
                         </tr>
                        <tr>
                            <td colspan="4" style="padding-left: 35%; color:black;"><b>Phí giao hàng:</b></td>
                            <td>10,000 VNĐ</td>                               
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-left: 35%; color:black;"><b>Tổng tiền:</b></td>
                            <td>8,010,000 VNĐ</td>
                        </tr>
                        
                    </table>

                    <form action="">
                        <label for="trang_thai">Trạng thái đơn hàng:</label> <br>
                        <select name="" id="trang_thai">
                            <option value="1">Chưa xác nhận</option>
                            <option value="2">Đã xác nhận</option>
                            <option value="3">Đang giao hàng</option>
                            <option value="4">Hoàn thành</option>
                            <option value="0">Đã hủy đơn</option>
                        </select> <br> <br>
                        <a href="" class="cap_nhat">Cập nhật trạng thái</a>
                    </form>
                </div>
                <div>

                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->

</body>
</html>