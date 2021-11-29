<?php
    require_once "../check_admin.php";
?>
<?php

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/  
    $selectData = "SELECT * FROM users";
    $row=$sql->query($selectData);
    $arr =array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
/****************************************************************************************/
    function getRoleText($role){
        if($role==0) return "User";
        else return "Admin";
    }
    function hiddenOrNot($role){
        if($role==1) return "hidden";
        else return "";
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
    <link rel="stylesheet" href="style.css">
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../img/tachnen.png" type="image/x-icon">

    <title>Quản lí người dùng</title>
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
                    <p>QUẢN LÍ NGƯỜI DÙNG</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách người dùng</p>
                <div>
                    <table>
                        <tr>
                            <th style="width: 15%;">USER NAME</th>
                            <th>EMAIL</th>
                            <th style="width: 30%;">ĐỊA CHỈ</th>
                            <th style="width: 8%;">VAI TRÒ</th>
                            <th style="width: 7%;">OPTION</th>
                        </tr>
                        <?php
                            foreach($arr as $i=>$user){
                                $username=$user['username'];
                                $email=$user['email'];
                                $address=$user['dia_chi'];
                                $role=getRoleText($user['vai_tro']);
                                $hidden=hiddenOrNot($user['vai_tro']);
                                echo "<tr>
                                        <td>$username</td>
                                        <td>$email</td>
                                        <td>$address</td>
                                        <td>$role</td>
                                        <td $hidden> 
                                            <a href=\"delete.php?user=$username\" class=\"xoa\">Xóa</a>
                                      </td>";
                            }
                        ?>

                        <!-- <tr>
                            <td>admin</td>
                            <td>admin@gmail.com</td>
                            <td>Hồ Chí Minh</td>
                            <td>Admin</td>
                            <td hidden> 
                                 <a href="" class="xoa">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Congacon</td>
                            <td>a@gmail.com</td>
                            <td >Hồ Chí Minh</td>
                            <td>User</td>
                            <td > 
                                <a href="" class="xoa">Xóa</a>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->

</body>
</html>