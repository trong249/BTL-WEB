<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/  
    $selectData = "SELECT * FROM binh_luan";
    $row=$sql->query($selectData);
    $arr_binh_luan =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_binh_luan,$res);
    }
    $binh_luan=json_encode($arr_binh_luan);
/****************************************************************************************/ 
    $selectData = "SELECT id,ten_hh FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr_sp =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_sp,$res);
    }
    $sp=json_encode($arr_sp);
/****************************************************************************************/
    $id;
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
    }
    // xóa bình luận
    if(isset($_REQUEST['delete'])){
        $rand=$_REQUEST['rand'];
        $delete="DELETE FROM binh_luan WHERE rand=$rand";
        $sql->query($delete);
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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Bình luận sản phẩm</title>
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
                    <a href="./binh_luan.php"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <!-- <p style="margin-bottom: 30px;">Tên sản phẩm: YEEZY BOOST 350V2 ASH PEARL</p>
                <div>
                    <table>
                        <tr>
                            <th style="width: 10%;">User</th>
                            <th style="width: 10%;">Date</th>
                            <th>Nội dung</th>
                            <th style="width: 8%;">OPTION</th>
                        </tr>
                        <tr>
                            <td>admin</td>
                            <td>14-10-2021</td>
                            <td>Good shoe!</td>
                            <td><a href="" class="xoa">Xóa</a></td>
                        </tr>
                        <tr>
                            <td>Congacon</td>
                            <td>14-10-2021</td>
                            <td>Hảo giày!</td>
                            <td><a href="" class="xoa">Xóa</a></td>
                        </tr>
                        
                    </table>
                </div> -->
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->

<script>
    let arr_binh_luan=JSON.parse(JSON.stringify(<?php echo $binh_luan ?>));
    let arr_sp=JSON.parse(JSON.stringify(<?php echo $sp ?>));
    let id= <?php echo $id ?>;

    function render(){
        let html='';
        for(let i=0;i<arr_sp.length;i++){
            if(id==parseInt(arr_sp[i].id)){
                html+=`<p style="margin-bottom: 30px;">Tên sản phẩm: ${arr_sp[i].ten_hh}</p>`;
                break;
            }
        }
        html+=`<div>
                    <table>
                        <tr>
                            <th style="width: 10%;">User</th>
                            <th style="width: 10%;">Date</th>
                            <th>Nội dung</th>
                            <th style="width: 8%;">OPTION</th>
                        </tr>`;
        for(let i=0;i<arr_binh_luan.length;i++){
            if(id==parseInt(arr_binh_luan[i].id)){
                html+=`<tr id="id${arr_binh_luan[i].rand}">
                            <td>${arr_binh_luan[i].user}</td>
                            <td>${arr_binh_luan[i].date}</td>
                            <td>${arr_binh_luan[i].noi_dung}</td>
                            <td><button class="xoa" onclick="deleteBL(${arr_binh_luan[i].rand})">Xóa</button></td>
                        </tr>`;
            }
        }

        html+=`</table>
                </div>`;
        document.querySelector(".right-side-content .content").innerHTML=html;
    }

    function deleteBL(rand){
        if(confirm("Bạn có chác muốn xóa bình luận này ?")){
            document.getElementById(`id${rand}`).remove();
            fetch(`chi_tiet.php?delete=1&rand=${rand}`);
        }
    }
    render();
</script>

</body>
</html>