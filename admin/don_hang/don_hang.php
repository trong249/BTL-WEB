<?php
    require_once "../check_admin.php";
?>

<?phP
    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/  
    $selectData = "SELECT ma_don, user, date, tinh_trang FROM don_hang";
    $row=$sql->query($selectData);
    $arr_don_hang =array();
    
    while($res=$row->fetch_assoc()){
        array_push($arr_don_hang,$res);
    }
    $don_hang=json_encode($arr_don_hang); //doi tu bien php sang bien json
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
                        <!--<tr>
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
                        </tr>-->
                        
                    </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->
    <script>
        let arr_don_hang=JSON.parse(JSON.stringify(<?php echo $don_hang ?>));

        function tinh_trang_class(a)
        {
            if (a == 0)
                return "status_0";
            else if (a == 1)
                return "status_1";
            else if (a == 2)
                return "status_2";
            else if (a == 3)
                return "status_3";
            else if (a == 4)
                return "status_4";
        }

        function render(){
            let html=`<tr>
                            <th>MÃ ĐƠN</th>
                            <th>USER</th>
                            <th>DATE</th>
                            <th>TÌNH TRẠNG</th>
                            <th colspan="2">OPTION</th>
                        </tr>`;
            for(let i=0;i<arr_don_hang.length;i++){
                const tinhtrang = ["Đã hủy đơn", "Chưa xác nhận", "Đã xác nhận", "Đang giao hàng", "Hoàn thành"];
                html+=` <tr>
                        <td>${arr_don_hang[i].ma_don}</td>
                        <td>${arr_don_hang[i].user}</td>
                        <td>${arr_don_hang[i].date}</td>
                        <td><span id="${tinh_trang_class(arr_don_hang[i].tinh_trang)}" class="status">${tinhtrang[arr_don_hang[i].tinh_trang]}</span></td>
                        <td><a href="./chi_tiet_test.php?id=${arr_don_hang[i].ma_don}" class="chi_tiet">Chi tiết</a></td>
                    </tr>`;

            }
            document.querySelector("table").innerHTML=html;
        }
        render();
    </script>

</body>
</html>
