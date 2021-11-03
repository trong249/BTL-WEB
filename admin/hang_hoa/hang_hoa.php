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
                </div>
            </div>
            <div class="content">
                <p style="margin-bottom: 30px;">Dưới đây là danh sách các thương hiệu đối tác đã được thêm vào:</p>
                <a href="./them.php" class="them">Thêm mới</a>
                <div>
                  <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>ĐƠN GIÁ</th>
                                    <th>GIẢM GIÁ</th>
                                    <th>OPTION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                  <tr>
                                    <td>61</td>
                                    <td>Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</td>
                                    <td><img src="../../img/san_pham/2.jpg" alt="" style="width:60px;"></td>
                                    <td>899,000 <sup>đ</sup></td>
                                    <td>0%</td>
                                    <td> 
                                        <a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a>
                                        <a href="" class="xoa">Xóa</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>61</td>
                                    <td>Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</td>
                                    <td><img src="../../img/san_pham/1.jpg" alt="" style="width:60px;"></td>
                                    <td>899,000 <sup>đ</sup></td>
                                    <td>0%</td>
                                    <td> 
                                        <a href="./chi_tiet.php" class="chi_tiet">Chi tiết</a>
                                        <a href="" class="xoa">Xóa</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                </div>
            </div>
        </div>
            
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Script for char -->

</body>
</html>