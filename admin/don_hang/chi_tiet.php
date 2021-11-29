<?php
    require_once "../check_admin.php";

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");

    $ma_don;
    if(isset($_REQUEST['ma_don'])){
        $ma_don=$_REQUEST['ma_don'];
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
    <link rel="stylesheet" href="./css/chi_tiet_style.css">
    <link rel="icon" href="../../img/tachnen.png" type="image/x-icon">
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
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">

                <?php
                    $status;
                    foreach($arr_don_hang as $i=>$dh){
                        if($dh['ma_don']==$ma_don){
                            $status=$dh['tinh_trang'];
                            $ho_va_ten=$dh['ho_va_ten'];
                            $user=$dh['user'];
                            $email=$dh['email'];
                            $sdt=$dh['So_dien_thoai'];
                            $diachi=$dh['Dia_chi'];
                            $note=$dh['note'];
                            echo "<p style=\"font-size: 25px;\">Mã đơn hàng: $ma_don</p><br>
                                <p>Họ và tên: <b>$ho_va_ten</b></p>
                                <p>Username: <b>$user</b></p>
                                <p>Email: <b>$email</b></p>
                                <p>Số điện thoại: <b>$sdt</b></p>
                                <p >Địa chỉ giao hàng: <b>$diachi</b></p>
                                <p style=\"margin-bottom: 30px;\">Ghi chú: <b>$note</b></p>";
                            break;
                        }
                    }
                ?>
                <!-- <p style="font-size: 25px;">Mã đơn hàng: 123</p><br>
                <p>Họ và tên: <b>Nguyen Van Trong</b></p>
                <p>Username: <b>trong249</b></p>
                <p>Email: <b>trong@gmail.com</b></p>
                <p>Số điện thoại: <b>0123456789</b></p>
                <p style="margin-bottom: 30px;">Địa chỉ giao hàng: <b>KTX khu A, Linh Trung, Thủ Đức</b></p> -->

                
                <p>Dưới đây là những sản phẩm mà khách hàng đã mua:</p> <br>
                <div>
                    <table style="margin-bottom: 30px;">
                        <?php 

                        ?>
                        <tr>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ LƯỢNG</th>
                            <th>SIZE</th>
                            <th>ĐƠN GIÁ/SP</th>
                            <th>GIẢM GIÁ</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
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
                                        <td>$name</td>
                                        <td>$qty</td>
                                        <td>$size</td>
                                        <td>$dg VNĐ</td>   
                                        <td>$giam_gia<span>%</span></td>  
                                        <td>$pri VNĐ</td>                               
                                    </tr>";
                            } 
                        ?>
                        <!-- <tr>
                            <td>YEEZY BOOST 350V2 ASH PEARL</td>
                            <td>1</td>
                            <td>8,000,000 VNĐ</td>   
                            <td>0 <span>%</span></td>  
                            <td>8,000,000 VNĐ</td>                               
                         </tr> -->
                        <tr>
                            <td colspan="5" style="padding-left: 35%; color:black;"><b>Phí giao hàng:</b></td>
                            <td>0 VNĐ</td>                               
                        </tr>
                        <tr>
                            <td colspan="5" style="padding-left: 35%; color:black;"><b>Tổng tiền:</b></td>
                            <td><?php echo number_format($sum) ?>VNĐ</td>
                        </tr>
                        
                    </table>
                    <form action="update.php" method="post" onsubmit="update()">
                        <label for="trang_thai">Trạng thái đơn hàng:</label> <br>
                        <select name="status" id="trang_thai">
                            <option value="1" <?php if($status==1) echo "selected" ?>>Chưa xác nhận</option>
                            <option value="2" <?php if($status==2) echo "selected" ?>>Đã xác nhận</option>
                            <option value="3" <?php if($status==3) echo "selected" ?>>Đang giao hàng</option>
                            <option value="4" <?php if($status==4) echo "selected" ?>>Hoàn thành</option>
                            <option value="0" <?php if($status==0) echo "selected" ?>>Đã hủy đơn</option>
                        </select> <br> <br>
                        <input type="text" name="id" value="<?php echo $ma_don ?>" hidden>
                        <button type="submit"  class="cap_nhat">Cập nhật trạng thái</button>
                    </form>
                        
                    
                </div>
                <div>

                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->
<script>
    
    function update(){  
        alert("Cập nhật thành công!")
    }
</script>

</body>
</html>