<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/ 
    // Lấy dữ liệu sản phẩm
    $id_item=$_REQUEST['id'];
    $selectData = "SELECT * FROM hang_hoa WHERE id=$id_item";
    $row=$sql->query($selectData);
    $arr1=array();
    while($res=$row->fetch_assoc()){
        array_push($arr1,$res);
    }
    /******************************************/ 
    //Update thông tin
    // if( isset($_REQUEST['update']) ){
    //     // $id_update=$_REQUEST['ma_sp'];
    //     // $don_gia=$_REQUEST['don_gia'];
    //     // $giam_gia=$_REQUEST['giam_gia'];
    //     // $mo_ta=$_REQUEST['mo_ta'];

    //     // $update="UPDATE hang_hoa SET don_gia='$don_gia', giam_gia='$giam_gia', mo_ta='$mo_ta' 
    //     //          WHERE id=$id_update";
    //     // $sql->query($update);
         
    //     echo phpinfo();
    // }
/****************************************************************************************/ 
    // Lấy dữ liệu nhãn hiệu
    $selectData = "SELECT * FROM brand";
    $row=$sql->query($selectData);
    $arr2=array();
    while($res=$row->fetch_assoc()){
        array_push($arr2,$res);
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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Chi tiết</title>
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
                    <a href="./hang_hoa.php"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div>
                    <a href="../../index.php">Back to shop!</a>
                    <a href="../../user/doi_mat_khau.php" style=" margin-left:10px">Change password!</a>
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là thông tin chi tiết sản phẩm</p>
                <div id='box'>
                    <!-- Element go here -->
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<script>
    let arr1=JSON.parse( JSON.stringify(<?php echo json_encode($arr1) ?>)); // sản phẩm

    let arr2=JSON.parse( JSON.stringify(<?php echo json_encode($arr2) ?>)); // nhãn hiệu
    
    function getBrand(id){
        for(let i=0;i<arr2.length;i++){
            if(arr2[i].ID===id){
                return arr2[i].ten_loai;
                break;
            }
        }
        return;
    }

    function updateItem(){
        let don_gia=document.getElementById('don_gia').value;
        let giam_gia=document.getElementById('giam_gia').value;
        let mo_ta=document.getElementById('mo_ta').value;

        if( confirm("Xác nhận cập nhật thông tin cho sản phẩm!") ){
            fetch(`hang_hoa.php?update=1&ma_sp=${arr1[0].id}&don_gia=${don_gia}&giam_gia=${giam_gia}&mo_ta=${mo_ta}`)
            /*Khó hiểu tại sao k thể fetch(`chi_tiet.php?update=1&ma_sp=${arr1[0].id}&don_gia=${don_gia}&giam_gia=${giam_gia}&mo_ta=${mo_ta}`)  dcm*/ 
            alert('Cập nhật thành công');
        }
        
    }
    
    function render(){
        let html=`<form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Mã hàng hóa:</label> <br>
                            <input type="text" class="form-control" id="ma_hh" value="${arr1[0].id}" readonly>
                            </div>

                            <div class="form-group"> 
                            <label for="">Tên hàng hóa:</label><br>
                            <input type="text" class="form-control" id="ten_hh" name="ten_hh" value="${arr1[0].ten_hh}" readonly>
                            </div>

                            <div class="form-group">
                            <label for="">Đơn giá</label> <br>
                            <input type="text" class="form-control" id="don_gia" name="don_gia"  placeholder="Nhập đơn giá ..." value="${arr1[0].don_gia}">
                            </div>

                            <div class="form-group">
                            <label for="">Giảm giá (%)</label> <br>
                            <input type="text" class="form-control" id="giam_gia" name="giam_gia" placeholder="Nhập giảm giá" value="${arr1[0].giam_gia}">
                            </div>

                            <div class="form-group">
                            <label for="">Hình ảnh</label> <br>
                            <img src="../../img/san_pham/${arr1[0].hinh}" alt="" style="width:150px"><br>
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label> <br>
                            <textarea class="form-control" rows="5" id="mo_ta" name="mo_ta" placeholder="Mô tả hàng hóa ..." style="resize: none;">${arr1[0].mo_ta}</textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Nhãn hiệu</label> <br>
                            <input type="text" class="form-control" id="brand" name="ten_hh" value="${getBrand(arr1[0].brand)}" readonly>
                            </div>
                    </form>
                    <button onclick="updateItem()" class="btn btn-danger">Cập nhật</button>`;
                    
        document.getElementById('box').insertAdjacentHTML("afterbegin",html);
    }

    render()
</script>

</body>
</html>