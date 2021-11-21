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
    if(isset($_REQUEST['delete'])){
        $rand=$_REQUEST['rand'];
        $delete="DELETE FROM gio_hang WHERE rand=$rand";
        $sql->query($delete);
    }
/*********************************************************************************************************/
    $sql->close();

?> 

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gio_hang/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(6) a').classList.add('active')
    </script>
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
    
    <section class="link container">
        <div>
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
            <span>/</span>
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">SẢN PHẨM</a>
            <span>/</span>
            <a href="gio_hang.php">GIỎ HÀNG</a>
        </div>
        <div style="text-decoration: underline;">
            <a href="quan_ly_don.php?user=<?php echo $username?>">Lịch sử mua hàng</a>
        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <section class='container content'>
        <div class="row">

            <div class="col-12 col-md-7 list-product">
                <table class="table ">
                    <!-- <thead>
                        <tr>
                            <th class="name">SẢN PHẨM</th>
                            <th class='img'>HÌNH ẢNH</th>
                            <th style="width: 20%;">GIÁ</th>
                            <th style="width: 20%;text-align: center;">SL</th>
                            <th></th>
                        </tr>
                    </thead> -->
                    <!-- <tbody > 
                        <tr>
                            <td>YEEZY BOOST 350V2 ASH PEARL</td>
                            <td><img src="../img/san_pham/2.jpg" alt="" style="width: 80%;"></td>
                            <td>7,840,000 VNĐ</td>
                            <td style="text-align: center;">1</td>
                            <td><a href="#"><i class="fa fa-times-circle" aria-hidden="true" ></i></a></td>
                        </tr>                          
                    </tbody> -->
                </table>

                <a href="san_pham.php" class="continue-shopping">Tiếp tục xem sản phẩm</a>  
            </div>
            <!---------------------------------------------------------------------------------->
            <div class="col-12 col-md-5 order">
                <table class="table">
                    <!-- <thead>
                        <tr>
                            <th colspan="2" style="text-align: left;">ĐƠN HÀNG CỦA BẠN ĐÃ SẴN SÀNG </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tổng hóa đơn</td>
                            <td style="text-align:right;">7,840,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>Giao hàng</td>
                            <td style="text-align:right;">Giao hàng miễn phí <br>
                            trong ngày<br>
                            tại nội thành Hồ Chí Minh </td>
                        </tr>
                        <tr>
                            <td>Tổng sau thuế</td>
                            <td style="text-align:right;"><b>7,840,000 VNĐ</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="thanh_toan.php" class="go-to-order">TIẾN HÀNH ĐẶT HÀNG</a></td>
                        </tr>
                    </tbody> -->
                </table>
                
            </div>

        </div>
    </section>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

<script>
        let san_pham=JSON.parse(JSON.stringify(<?php echo $san_pham ?>))
        let gio_hang=JSON.parse(JSON.stringify(<?php echo $gio_hang ?>));
        let username="<?php echo $username ?>";

        function formatMoney(str) {
            return str.split('').reverse().reduce((prev, next, index) => {
                return ((index % 3) ? next : (next + ',')) + prev
            })
        }

        function deleteItem(rand){
            if(confirm("Xóa sản phẩm này khỏi giỏ hàng ?")){
                fetch(`gio_hang.php?delete=1&rand=${rand}`);
                document.getElementById(`id${rand}`).remove();
                document.location.reload(true)
            }
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
        function getImg(id){
            let res;
            for(let i=0;i<san_pham.length;i++){
                if(san_pham[i].id==id) {
                    res=san_pham[i].hinh;
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

        function render1(){
            let html=`  <thead>
                            <tr>
                                <th class="name">SẢN PHẨM</th>
                                <th class='img'>HÌNH ẢNH</th>
                                <th style="width: 20%;">GIÁ</th>
                                <th style="width: 20%;text-align: center;">SL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="max-height: 300px;overflow-y: scoll;">`;
            if(username!=-1){
                let arr=gio_hang.filter(e=>e.user==username)
                for(let i=0;i<arr.length;i++){
                    html+=` <tr id="id${arr[i].rand}">
                                <td>${getName(arr[i].id_sp)}</td>
                                <td><img src="../img/san_pham/${getImg(arr[i].id_sp)}" alt="" style="width: 80%;"></td>
                                <td>${formatMoney(getPrice(arr[i].id_sp).toString())} VND</td>
                                <td style="text-align: center;">${arr[i].so_luong}</td>
                                <td><buttn onclick="deleteItem('${arr[i].rand}')"><i class="fa fa-times-circle" aria-hidden="true" ></i></buttn></td>
                            </tr>`
                }
                html+=`</tbody>`
                document.querySelector(".list-product table").innerHTML=html;
            }
        }

        function render2(){
            let price=0;
            let html;
            if(username!=-1){
                let arr=gio_hang.filter(e=>e.user==username)
                for(let i=0;i<arr.length;i++){
                    price+= parseInt(arr[i].so_luong)*getPrice(arr[i].id_sp)
                }
                html=`<thead>
                        <tr>
                            <th colspan="2" style="text-align: left;">ĐƠN HÀNG CỦA BẠN ĐÃ SẴN SÀNG </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tổng hóa đơn</td>
                            <td style="text-align:right;">${formatMoney(price.toString())} VND</td>
                        </tr>
                        <tr>
                            <td>Giao hàng</td>
                            <td style="text-align:right;">Giao hàng miễn phí <br>
                            trong ngày<br>
                            tại nội thành Hồ Chí Minh </td>
                        </tr>
                        <tr>
                            <td>Tổng sau thuế</td>
                            <td style="text-align:right;"><b>${formatMoney(price.toString())} VND</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="thanh_toan.php?username=${username}" class="go-to-order">TIẾN HÀNH ĐẶT HÀNG</a></td>
                        </tr>
                    </tbody>`;
            }
            else {
                html=`<p style="color: red;">Bạn chưa đăng nhập!</p>`
            }
            document.querySelector(".order table").innerHTML=html;
            
            return price;
            
        }


        render1();
        let a=render2();
        if(a==0){
                document.querySelector(".go-to-order").style.opacity="0.5";
                document.querySelector(".go-to-order").style.pointerEvents ="none";
            }
</script>   
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>