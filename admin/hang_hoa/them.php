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
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Điền thông tin sản phẩm vào bên dưới</p>
                <div>
                  <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Mã hàng hóa:</label> <br>
                            <input type="text" class="form-control" id="ma_hh" name="ma_hh" placeholder="Nhập tên hàng hóa ..." value="" readonly="">
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
                            <input type="text" class="form-control" id="giam_gia" name="giam_gia" placeholder="Nhập giảm giá" value="">
                            </div>

                            <div class="form-group">
                            <label for="">Hình ảnh</label> <br>
                            <input type="file" class="form-control-file border" name="hinh"> <br>
                            <img src="../../img/san_pham/1.jpg" alt="" style="width:80px"><br>
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label> <br>
                            <textarea class="form-control" rows="5" id="mo_ta" name="mo_ta" placeholder="Mô tả hàng hóa ..." style="resize: none;"></textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Mã loại?</label> <br>
                            <select name="ma_loai" class="form-control">
                                            <option value="27">Bitis</option>
                                            <option value="26">MLB</option>
                                            <option value="25">Nike</option>
                                            <option value="24">Adidas</option>
                                            <option value="23">Pegasus</option>
                                            <option value="22">Jordan</option>
                                            <option value="21">Blazer</option>
                                            <option value="20">Converse</option>
                            </select>
                            </div>
                            <button type="submit" name="btn_update" class="btn btn-danger">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->
<script>
    function myRandom(){
        let array=[1,2,3,4,5,6,7,8,9];
        let a=Math.floor(Math.random() * 100);
        while(array.indexOf(a)!=-1){
            a=Math.floor(Math.random() * 100);
        }
        return a;
    }
    document.getElementById('ma_hh').value=myRandom();
</script>

</body>
</html>