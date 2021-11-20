<?php
    require_once "../check_admin.php";
?>

<?php

    $sql=mysqli_connect("localhost","root","","data_ishine");
/****************************************************************************************/ 
    // Lấy dữ liệu sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr1=array();
    while($res=$row->fetch_assoc()){
        array_push($arr1,$res);
    }
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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" /> -->
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Thêm sản phẩm</title>
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
                <p style="margin-bottom: 30px;">Điền thông tin sản phẩm vào bên dưới</p>
                <div>
                  <form action="xu_ly_them_sp.php" method="post" enctype="multipart/form-data" onsubmit="return valid()">
                            <div class="form-group">
                                <label for="">Mã hàng hóa:</label> <br>
                                <input type="text" class="form-control" id="ma_hh" name="ma_hh"  value="" readonly="">
                            </div>

                            <div class="form-group"> 
                            <label for="">Tên hàng hóa:</label><br>
                            <input type="text" class="form-control" id="ten_hh" name="ten_hh" placeholder="Nhập tên hàng hóa ..." value="">
                            </div>

                            <div class="form-group">
                            <label for="">Đơn giá</label> <br>
                            <input type="text" class="form-control" id="don_gia" name="don_gia"  placeholder="Nhập đơn giá ..." value="">
                            </div>

                            <div class="form-group">
                            <label for="">Giảm giá (%)</label> <br>
                            <input type="text" class="form-control" id="giam_gia" name="giam_gia" placeholder="Nhập giảm giá..." value="">
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label> <br>
                                <input type="file" class="form-control-file border" name="hinh" onchange="showPreview(event)" accept="image/*"> <br>
                                <img  alt="" style="width:150px" id="preview"><br>
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label> <br>
                            <textarea class="form-control" rows="5" id="mo_ta" name="mo_ta" placeholder="Mô tả hàng hóa ..." style="resize: none;"></textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Mã loại?</label> <br>
                            <select name="ma_loai" class="form-control">
                                <?php 
                                    foreach($arr2 as $i => $brand){
                                            echo '<option value="'.$brand['ID'].'">'.$brand['ten_loai'].'</option>';
                                    } 
                                ?>
                            </select>
                            </div>
                            <button type="submit" name="add" class="btn btn-danger">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->
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
    
    // hàm tạo ra và kiểm tra so random hợp lệ
    document.querySelector('#ma_hh').value= randomID();
    function randomID(){
        let check=true;
        let res=Math.floor(Math.random()*1000);

        for(let i=0;i<arr2.length;i++){
            if(res==arr2[i].ID)
            check=false;
            break;
        }
        if(check&&res>=100) return res;
        else return randomID();
    }

    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }

    function valid(){
        let name=document.getElementById("ten_hh").value;
        for(let i=0;i<arr1.length;i++){
            if (arr1[i].ten_hh.toLowerCase()===name.toLowerCase())
            {
                alert("Tên sản phẩm đã có trong danh sách!")
                return false;
            }
        }

        if(confirm("Xác nhận thêm vào danh sách")){
            alert("Thêm thành công!")
             return true;
        }

    }
    
</script>

</body>
</html>