<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/  
    $selectData = "SELECT id,ten_hh,hinh,don_gia,giam_gia FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr =array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
/****************************************************************************************/ 
    //  xóa item
    if(isset($_REQUEST['delete'])){
        $id=$_REQUEST['id'];
        $delete="DELETE FROM hang_hoa WHERE id=$id";
        $sql->query($delete);
        foreach($arr as $i => $sp){
            if ($sp['id']==$id){
                $filename= "../../img/san_pham/".$sp['hinh'] ;
                unlink($filename);
                break;
            }
        } 
    }

     //Update thông tin
    if( isset($_REQUEST['update']) ){
        $id=$_REQUEST['ma_sp'];
        $don_gia=$_REQUEST['don_gia'];
        $giam_gia=$_REQUEST['giam_gia'];
        $mo_ta=$_REQUEST['mo_ta'];

        $update="UPDATE hang_hoa SET don_gia='$don_gia', giam_gia='$giam_gia', mo_ta='$mo_ta' 
                 WHERE id=$id";
        $sql->query($update);  
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
    <link rel="stylesheet" href="./css/hang_hoa_style.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>


    <title>Sản phẩm , hàng hóa</title>
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
                    <p>QUẢN LÍ CÁC THƯƠNG HIỆU ĐỐI TÁC</p>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách các thương hiệu đối tác đã được thêm vào:</p>
                <a href="./them.php" class="them">Thêm mới</a>
                <div>
                  <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Mã</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th style="width: 90px;">HÌNH ẢNH</th>
                                    <th >ĐƠN GIÁ</th>
                                    <th>GIẢM GIÁ</th>
                                    <th>OPTION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <!-- Element go here -->
                                </tbody>
                              </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<script>
    let arr=JSON.parse( JSON.stringify(<?php echo json_encode($arr) ?>));

    function deleteItem(id){
        if(confirm("Bạn có chắc muốn xóa sản phẩm này ?")){
            fetch(`hang_hoa.php?delete=1&id=${id}`)
            document.getElementById(`id_${id}`).remove();
        }
    }

    function render(){  
        let html='';
        for(let i=0;i<arr.length;i++){
            html+=`<tr id="id_${arr[i].id}">
                        <td>${arr[i].id}</td>
                        <td>${arr[i].ten_hh}</td>
                        <td style="height: 67.5px;"><img src="../../img/san_pham/${arr[i].hinh}" alt="" style="width:60px;"></td>
                        <td>${formatMoney(arr[i].don_gia)}<sup>đ</sup></td>
                        <td>${arr[i].giam_gia}%</td>
                        <td> 
                            <a href="./chi_tiet.php?id=${arr[i].id}" class="chi_tiet">Chi tiết</a>
                            <button class="xoa" onclick="deleteItem(${arr[i].id})">Xóa</button>
                        </td>
                    </tr>`;
        }
        document.querySelector('tbody').insertAdjacentHTML("afterbegin",html);
    }

    function formatMoney(str) {
        return str.split('').reverse().reduce((prev, next, index) => {
            return ((index % 3) ? next : (next + ',')) + prev
        })
    }
    
render()
</script>

</body>
</html>