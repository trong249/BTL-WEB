<?php
    $sql=mysqli_connect("localhost","root","","data_ishine");
    
/****************************************************************************************/ 
    // danh sach thông tin sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr=array();
    while($res=$row->fetch_assoc()){
        array_push($arr,$res);
    }
    $san_pham=json_encode($arr);    
/****************************************************************************************/ 
    //  lấy  bảng giỏ hàng
    $selectData = "SELECT * FROM gio_hang";
    $row=$sql->query($selectData);
    $arr_gio_hang =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_gio_hang,$res);
    }
    $gio_hang=json_encode($arr_gio_hang);
/*********************************************************************************************************/
/*********************************************************************************************************/
    $sql->close();

?> 










<!DOCTYPE html>
<html lang="vi">
    <head>
    <title>Thanh toán</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/thanh_toan/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(6) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
<section id="main">
            <div class="container">
                <div class="display-filter container">
                    <div class="link">
                        <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
                        <span>/</span>
                        <a href="" style="color: black;">THANH TOÁN</a>
                    </div>
                </div>
                <form action="xu_ly_dat_hang.php" method="post" class="container row" onsubmit="alert('Đơn hàng của bạn chấp nhận và sẽ được chúng tôi xử lý nhanh chóng')">
                    <div id="thong-tin-thanh-toan" class="d-flex col col-12 col-lg-6 flex-column">
                        <div class="container fancy-box">
                            <h4 class="text-uppercase my-3">Thông tin thanh toán</h4>

                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="name" id="name" required>

                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" required>

                            <label for="address" class="form-label">Số điên thoại</label>
                            <input type="text" class="form-control" name="phone" id="phone" required>

                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                            
                            <label for="note" class="form-label">Ghi chú</label>
                            <textarea name="note" id="note" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div id="don-hang" class="col col-12 col-lg-6">
                        <div class="container fancy-box pt-3 wrap">

                            <!-- <h4 class="text-uppercase mb-3">Đơn hàng của bạn</h4>
                            <div class="container border border-danger border-3" style="padding: 5px;">
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">SẢN PHẨM</div>
                                    <div class="justify-content-end text-bold">TỔNG</div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start">
                                        <span id="product-name">Adidas UltraBoot DNA City</span>
                                        <span id="product-amount">x 1</span>
                                    </div>
                                    <div class="justify-content-end">
                                        <span id="product-price-init">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">Tổng phụ</div>
                                    <div class="justify-content-end">
                                        <span id="product-price-secondary">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">
                                        Giao hàng
                                    </div>
                                    <div class="justify-content-end">
                                    Giao hàng miễn phí dưới 5km
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">TỔNG</div>
                                    <div class="justify-content-end">
                                        <span id="product-price-final">1,890,000 VNĐ</span>
                                    </div>
                                </div>
                                <div class="text-italic thanks" style="border-bottom:1px solid grey;">
                                    Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Cảm ơn quý khách đã ủng hộ Ishin shop. Chúc quý khách ngày mới tốt lành!
                                </div>
                                <button type="submit" class="btn btn-primary" aria-label="Đặt hàng">Đặt hàng</button>
                            </div> -->

                        </div>
                    </div>
                </form>
            </div>
        </section>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php
        require_once "./check_rememberme.php";
        $username;
        if(isset($_SESSION['username'])){
            $username=$_SESSION['username'];
        }
        else{
            $username=-1;
        }
    ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script>
        let san_pham=JSON.parse(JSON.stringify(<?php echo $san_pham ?>))
        let gio_hang=JSON.parse(JSON.stringify(<?php echo $gio_hang ?>));
        let username="<?php echo $username ?>";
        


        function formatMoney(str) {
            return str.split('').reverse().reduce((prev, next, index) => {
                return ((index % 3) ? next : (next + ',')) + prev
            })
        }

        function getName(id){
            let res;
            for(let i=0;i<san_pham.length;i++){
                if(san_pham[i].id==id) {
                    res=san_pham[i].ten_hh;
                }
            }
            return res;
        }

        function getPrice(id){
            let res;
            for(let i=0;i<san_pham.length;i++){
                if(san_pham[i].id==id) {
                    if( san_pham[i].giam_gia!=0 )
                        res=parseInt(san_pham[i].don_gia)-parseInt(san_pham[i].don_gia)*parseInt(san_pham[i].giam_gia)/100;
                    else 
                        return res=parseInt(san_pham[i].don_gia);
                }
            }
            return res;
        }

        function render(){
            let arr=gio_hang.filter(e=>e.user==username);
            let sum=0;
            let html=`<h4 class="text-uppercase mb-3">Đơn hàng của bạn</h4>
                      <div class="container border border-danger border-3" style="padding: 5px;">
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">SẢN PHẨM</div>
                                    <div class="justify-content-end text-bold">TỔNG</div>
                                </div>`;
            for(let i=0;i<arr.length;i++){
                let price=getPrice(arr[i].id_sp)*parseInt(arr[i].so_luong);
                html+=`<div class="order-row">
                            <div class="justify-content-start">
                                <span id="product-name">${getName(arr[i].id_sp)}</span>
                                <span id="product-amount">x ${arr[i].so_luong}</span>
                            </div>
                            <div class="justify-content-end">
                                 <span id="product-price-init">${formatMoney(price.toString())} VNĐ</span>
                            </div>
                        </div>`;
                sum+=price;
            }

            html+=`<div class="order-row">
                                    <div class="justify-content-start text-bold">
                                        Giao hàng
                                    </div>
                                    <div class="justify-content-end">
                                    Giao hàng miễn phí dưới 5km
                                    </div>
                                </div>
                                <div class="order-row">
                                    <div class="justify-content-start text-bold">TỔNG</div>
                                    <div class="justify-content-end">
                                        <span id="product-price-final">${formatMoney(sum.toString())} VNĐ</span>
                                    </div>
                                </div>
                                <div class="text-italic thanks" style="border-bottom:1px solid grey;">
                                    Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Cảm ơn quý khách đã ủng hộ Ishin shop. Chúc quý khách ngày mới tốt lành!
                                </div>

                                <input type="text" class="form-control" name="username"  value="<?php echo $username ?>" hidden>
                                <button type="submit" class="btn btn-primary" aria-label="Đặt hàng">Đặt hàng</button>
                            </div>`;
            document.querySelector(".wrap").innerHTML=html;
        }

        render();


    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/tin_tuc/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>