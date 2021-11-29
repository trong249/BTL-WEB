<?php
    $sql=mysqli_connect("mysql5037.site4now.net","a7cc8e_dapoet1","123456aA@","db_a7cc8e_dapoet1");
/****************************************************************************************/ 
    // Lấy dữ liệu sản phẩm
    $selectData = "SELECT * FROM hang_hoa";
    $row=$sql->query($selectData);
    $arr1=array();
    while($res=$row->fetch_assoc()){
        array_push($arr1,$res);
    }
/****************************************************************************************/ 
    // id gửi từ trang san_phẩm sang
    $sp;
    if(isset($_REQUEST['id']))
    {
        $ma_sp=$_REQUEST['id'];
    }
    for($i=0;$i<count($arr1);$i++){
        if($ma_sp==$arr1[$i]['id']){
            $sp=json_encode($arr1[$i]);
            break;
        }
    }
/****************************************************************************************/ 
    // Lay binh luan
    $selectData = "SELECT * FROM binh_luan";
    $row=$sql->query($selectData);
    $arr_binh_luan =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_binh_luan,$res);
    }
    $binh_luan=json_encode($arr_binh_luan);
/****************************************************************************************/ 
    // them binh luan vao database
    if(isset($_REQUEST['cmt'])){
        $rand=$_REQUEST['rand'];
        $id=$_REQUEST['id'];
        $user=$_REQUEST['user'];
        $date=$_REQUEST['date'];
        $noi_dung=$_REQUEST['noi_dung'];

        $data ="INSERT INTO binh_luan  (rand, id, user, date, noi_dung)
                VALUES('$rand','$id','$user','$date','$noi_dung')";
        $sql->query($data);
    }
/****************************************************************************************/ 
    //  lấy các random id trong bảng giỏ hàng
    $selectData = "SELECT rand FROM gio_hang";
    $row=$sql->query($selectData);
    $arr_gio_hang =array();
    while($res=$row->fetch_assoc()){
        array_push($arr_gio_hang,$res);
    }
    $gio_hang=json_encode($arr_gio_hang);
    // thêm vao giỏ hàng
    if(isset($_REQUEST['add'])){
        $rand1=$_REQUEST['rand1'];
        $username=$_REQUEST['username'];
        $id_sp=$_REQUEST['id_sp'];
        $size=$_REQUEST['size'];
        $so_luong=$_REQUEST['so_luong'];

        $data ="INSERT INTO gio_hang  (rand, user, id_sp, size, so_luong)
                VALUES('$rand1','$username','$id_sp','$size','$so_luong')";
        $sql->query($data);
    }    


    $sql->close();
/*********************************************************************************************************/
?> 










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chi_tiet_sp/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
    <title>Ishin Shop - Chi tiết sản phẩm</title>
    <meta name="description" content="Xem chi tiết sản phẩm tại đây!">
    <meta name="robots" content="index, follow">
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(2) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
    <section class="link container">
        <div>
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
            <span>/</span>
            <a href="san_pham.php" style="color:rgb(150, 148, 148);">SẢN PHẨM</a>
            <span>/</span>
            <a href="" style="color: black;">CHI TIẾT</a>
        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- Check đăng nhập và lấy usename -->
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
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class="detail container">
        <div class="row">
            <!-- <div class="col-md-6 col-lg-4">
                <div class="img-product">
                    <img src="../img/san_pham/2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="margin-bottom: 50px;">
                <div class="info">
                    <div class="name">
                        <h1>YEEZY BOOST 350V2 ASH PEARL</h1>
                        <div></div>
                    </div> <br>

                    <span class="price-no-sale">8000000 <span>VNĐ</span></span>
                    <span class="latest-price">5000000 <span>VND</span></span>
                    
                    <p class="description">
                        Adidas Yeezy là sản phẩm thời trang hợp tác giữa hãng đồ thể thao Đức Adidas và nhà thiết kế, rapper, doanh nhân và cá tính người Mỹ Kanye West. Sự hợp tác đã trở nên đáng chú ý với các màu sắc phiên bản giới hạn cao cấp và các bản phát hành chung được cung cấp bởi dòng giày thể thao Yeezy Boost. Sự hợp tác cũng đã sản xuất áo sơ mi, áo khoác, quần thể thao, tất, giày trượt, giày và dép nữ. Mẫu giày đầu tiên ("Boost 750") được phát hành vào tháng 2/2015.
                    </p> 

                    <div class="dot" style="margin-bottom: 20px;">
                        <img src="../img/dot.png" alt="" style="width: 70%;">
                    </div>

                    <select name="" id="" class="size">
                        <option value="37">Size 37</option>
                        <option value="38">Size 38</option>
                        <option value="39">Size 39</option>
                        <option value="40">Size 40</option>
                        <option value="41">Size 41</option>
                        <option value="42">Size 42</option>
                    </select>
                    
                    <input type="number" name="" id="" value="1" class="qty">
                    <button class="add_into_cart" onclick="addToCart()">THÊM VÀO GIỎ HÀNG</button>
                    
                </div>
            </div> -->

            <div class="col-md-12 col-lg-4 payment"> 
                <div class="title">
                    <p>PHƯƠNG THỨC THANH TOÁN</p>
                </div>
                <div class="img">
                    <img src="../img/thanh_toan/thanh-toan.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

    <section class='comment-area container'>
        <div class="title">
            <p>NHẬN XÉT VÀ ĐÁNH GIÁ</p>
            <div></div>
        </div>

        <ul>
            <!-- <li>
                <div class="each-cmt">
                    <div class="content">
                        <p>Good jod !</p>
                    </div>
                    <div class="author">
                        <p> <span>trong249</span>, <span>10/14/2021</span></p>
                    </div>
                </div>
            </li> -->
        </ul>

        <div class="alert" <?php if($username!=-1) echo "hidden"  ?> >
            <p style="color: red;">Đăng nhập để bình luận về sản phẩm này !</p>
        </div>

        <div class="add-comment">
            <textarea name="" id="" cols="150" rows="2" placeholder="Nhận xét..."></textarea><br>
            <button onclick="sendComment(<?php  echo "'$username'" ?> )" >Gửi</button>
        </div>




    </section>

<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script>
        let san_pham=JSON.parse(JSON.stringify(<?php echo $sp ?>))
        let arr_binh_luan=JSON.parse(JSON.stringify(<?php echo $binh_luan ?>));
        let arr_gio_hang_id=JSON.parse(JSON.stringify(<?php echo $gio_hang ?>));
        
        function formatMoney(str) {
            return str.split('').reverse().reduce((prev, next, index) => {
                return ((index % 3) ? next : (next + ',')) + prev
            })
        }

        function formatDate(){
            let date= new Date();
            let year=date.getFullYear();
            let month=date.getMonth();
            let day=date.getDate();

            return `${day}-${month+1}-${year}`;
        }

        function rand_cmt(){
            let check=true;
            let res=Math.floor(Math.random()*1000);

            for(let i=0;i<arr_binh_luan;i++){
                if(res==arr_binh_luan[i].rand)
                check=false;
                break;
            }
            if(check&&res>=100) return res;
            else return rand_cmt();
        }

        function rand_gio_hang(){
            let check=true;
            let res=Math.floor(Math.random()*10000);

            for(let i=0;i<arr_gio_hang_id;i++){
                if(res==parseInt(arr_gio_hang_id[i].rand))
                check=false;
                break;
            }
            if(check&&res>=1000) return res;
            else return rand_gio_hang();
        }

        function handlePrice(don_gia,giam_gia){
            let dg=parseInt(don_gia);
            let gg=parseInt(giam_gia);
            if(gg==0){
                return `<span class="latest-price">${formatMoney(don_gia)} <span>VND</span></span>`;
            }
            else {
                return `<span class="price-no-sale">${formatMoney(don_gia)} <span>VNĐ</span></span>
                        <span class="latest-price">${formatMoney(Math.ceil(dg-dg*gg/100).toString())} <span>VND</span></span>`
            }
        }

        function addToCart(){
            let id_sp=san_pham.id;
            let user="<?php echo $username?>";
            let size=parseInt(document.querySelector(".size").value);
            let so_luong=parseInt(document.querySelector(".qty").value);
            if(user!=-1){
                    fetch(`chi_tiet_sp.php?add=1&rand1=${rand_gio_hang()}&username=${user}&id_sp=${id_sp}&size=${size}&so_luong=${so_luong}`);
                    alert("Đã thêm vào giỏ hàng của bạn!")
            }
            else {
                alert("Bạn phải đăng nhập trước đã!")
                return;
            }
        }

        function sendComment(author){
            if(author==-1) {
                alert("Bạn phải đăng nhập để có thể gửi nhận xét này!");
                return;
            }
            else{
                let text=document.querySelector(".add-comment textarea").value;
                let html=`<li>
                            <div class="each-cmt">
                                <div class="content">
                                    <p>${text}</p>
                                </div>
                                <div class="author">
                                    <p> <span>${author}</span>, <span>${formatDate()}</span></p>
                                </div>
                            </div>
                        </li>`;
                document.querySelector(".comment-area ul").insertAdjacentHTML("beforeend",html);
                fetch(`chi_tiet_sp.php?cmt=1&user=${author}&rand=${rand_cmt()}&id=${san_pham.id}&date=${formatDate()}&noi_dung=${text}`);
                document.querySelector(".add-comment textarea").value='';
            } 
        }

        function renderProdcut(){
            let html=`<div class="col-md-6 col-lg-4">
                        <div class="img-product">
                            <img src="../img/san_pham/${san_pham.hinh}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" style="margin-bottom: 50px;">
                        <div class="info">
                            <div class="name">
                                <h1>${san_pham.ten_hh}</h1>
                                <div></div>
                            </div> <br>

                            ${handlePrice(san_pham.don_gia,san_pham.giam_gia)}
                            
                            <p class="description">${san_pham.mo_ta}</p> 

                            <div class="dot" style="margin-bottom: 20px;">
                                <img src="../img/dot.png" alt="" style="width: 70%;">
                            </div>

                            <select name="" id="" class="size">
                                <option value="37">Size 37</option>
                                <option value="38">Size 38</option>
                                <option value="39">Size 39</option>
                                <option value="40">Size 40</option>
                                <option value="41">Size 41</option>
                                <option value="42">Size 42</option>
                            </select>
                            
                            <input type="number" name="" id="" value="1" class="qty">
                            <button class="add_into_cart" onclick="addToCart()">THÊM VÀO GIỎ HÀNG</button>
                            
                        </div>
                    </div>`;
            
            document.querySelector(".detail .row").insertAdjacentHTML("afterbegin",html);

        }

        function renderComment(){
            let html='';
            for(let i=0;i<arr_binh_luan.length;i++){
                if( parseInt(arr_binh_luan[i].id)==parseInt(san_pham.id) ){
                    html+=`<li>
                                <div class="each-cmt">
                                    <div class="content">
                                        <p>${arr_binh_luan[i].noi_dung}</p>
                                    </div>
                                    <div class="author">
                                        <p> <span>${arr_binh_luan[i].user}</span>, <span>${arr_binh_luan[i].date}</span></p>
                                    </div>
                                </div>
                            </li>`;
                }
            }
            document.querySelector(".comment-area ul").innerHTML=html;
        }
         
        renderProdcut();
        renderComment();

    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->  
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/chi_tiet_sp/main.js"></script>
</body>
</html>