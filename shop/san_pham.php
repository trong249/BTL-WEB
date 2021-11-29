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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-grid.min.css" />
    <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/san_pham/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
    <title>Ishin Shop - Sản phẩm</title>
    <meta name="description" content="Chọn mua những sneaker hoàn hảo từ Ishin shop!">
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
    <section class="banner">
        <div class="container">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="../img/san_pham/sale-banner-1.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="../img/san_pham/sale-banner-2.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="../img/san_pham/sale-banner-3.jpg" alt="" style="width: 100%; height:100%"></div>
                        <div class="swiper-slide"><img src="../img/san_pham/sale-banner-4.jpg" alt="" style="width: 100%; height:100%"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="display-filter container">
        <div class="link">
            <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
            <span>/</span>
            <a href="" style="color: black;">SẢN PHẨM</a>
        </div>
        <div class="filter">
            <label for="select-filter">Hiển thị tất cả sản phẩm theo</label>
            <select name="filer-display" id="select-filter">
                <option value="">Thứ tự mặc định</option>
                <option value="">Theo giá từ trên xuống</option>
                <option value="">Theo giá từ dưới lên</option>
            </select>
        </div>
    </section>

    <section class="container product-show">
        <div class="content">
            <!-- Danh muc + tìm kiếm + Giảm giá -->
            <div class="category-search-sale">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm..." id="search">
                    <div>
                        <i class="fas fa-search" onclick="search()"></i>
                    </div>
                </div>
                
                <div class="category">
                    <div>
                        <p>DANH MỤC</p>
                        <i class="fas fa-chevron-down" onclick="categoryResponesive()"></i>
                    </div>
                    <div class="menu">
                        <ul>
                            <!-- <li>Bitis</li>
                            <li>MLB</li>
                            <li>Nike</li>
                            <li>Adidas</li>
                            <li>Pegasus</li>
                            <li>Jordan</li>
                            <li>Blazer</li>
                            <li>Converse</li> -->

                            <?php 
                                    foreach($arr2 as $i => $brand){
                                            echo '<li onclick="orderByBrand('.$brand['ID'].')">'.$brand['ten_loai'].'</li>';
                                    } 
                            ?>
                            <li onclick="showAll()">All...</li>
                        </ul>
                    </div>
                </div>

                <div class="sale">
                    <!-- <div class="title">
                        <p>SẢN PHẨM GIẢM GIÁ</p>
                    </div> -->

                    <!-- <a href="">
                        <div class="sale-product" >
                            <div class="img">
                                <img src="../img/san_pham/1.jpg" alt="">
                            </div>
                            <div class="infor">
                                <p style="text-align:start;">Biti's Hunter Street x Vietmax 2020 - BST HaNoi Cu</p>
                                <h4><span style="text-decoration: line-through;">899000</span> VNĐ -50%</h4>
                                <h4><span>500000</span> VNĐ</h4>
                            </div>
                        </div>
                    </a> -->
                    

                </div>
            </div>
            <!-- Menu các sản phẩm -->
            <div class="product-menu" >
                <!-- ô san phẩm -->
                <!-- <div class="row" >
                     <div class="col-6 col-md-3">
                        <a href="chi_tiet_sp.php">
                            <div class="each-product">
                                <div class="img">
                                    <img src="../img/san_pham/2.jpg" alt="">
                                </div>
                                <div class="info">
                                    <p>Yeeezy Boost 350 v2</p> <br>
                                    <p><span>7840000</span>VNĐ</p>
                                </div>
                                <div class="detail">
                                <p>CHI TIẾT</p>
                                </div>
                                <div class="hot active">
                                    HOT
                                </div>
                            </div>
                        </a> 
                    </div> 
                </div> -->
                <!-- Phân trang sản phẩm -->
                <!-- <div class="pagination" >
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div> -->

            </div>
        </div>
    </section >

    <!-- xuất hiện khi màn hình nhỏ hơn 990px -->
    <section  class="sale_mobile">
        <div class="container">
            <div class="title">
                <p>SẢN PHẨM GIẢM GIÁ</p>
            </div>

            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <!-- <a href="">
                        <div class="swiper-slide">
                            <div class="product">
                                <img src="../img/san_pham/1.jpg" alt="">
                                <div>
                                    <p class="name">Pegasus Chaz</p>
                                    <p class="price" style="text-decoration: line-through; font-size: 15px;">792,000 VNĐ</p>
                                    <p class="sale">500,000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </a> -->
                        
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </section>
    

    

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script>
            let arr1=JSON.parse( JSON.stringify(<?php echo json_encode($arr1) ?>)); // sản phẩm
            let arr2=JSON.parse( JSON.stringify(<?php echo json_encode($arr2) ?>)); // nhãn hiệu
            let arr=arr1;

            function formatMoney(str) {
                return str.split('').reverse().reduce((prev, next, index) => {
                    return ((index % 3) ? next : (next + ',')) + prev
                })
            }
            function checkDiscount(sp){
                if(sp.giam_gia!=='0'){
                    return `Ưu đãi: -${sp.giam_gia}%`;
                }
                else return'';
            }

            function orderByBrand(brandId){
                arr=arr1.filter(e => e.brand==brandId);
                render(arr,1);
            }
            function showAll(){
                arr=arr1;
                render(arr,1);
            }

            function search(){
                let search=document.querySelector("#search").value.toLowerCase();
                arr=arr1.filter(e=> e.ten_hh.toLowerCase().indexOf(search)!=-1);
                render(arr,1);
            }

            function pagination(num){
                render(arr,num);
                for(let i=1;i<=Math.ceil(arr.length/12);i++){
                    if(i!==num){
                        document.getElementById(`li${i}`).classList.remove("active");
                    }
                    else {
                        document.getElementById(`li${i}`).classList.add("active");
                    }
                }
            }   

            function render(arr,page){
                let html='';
                let wrap=document.querySelector(".product-menu");
                let n=arr.length<=12?arr.length:12;

                for(let i=0;i<(Math.floor(n/4)!=0 ?Math.floor(n/4):1);i++){
                        html+=`<div class="row" >`;
                        for(let j=4*i+12*(page-1);j<4*i+4+12*(page-1);j++){
                            if(arr[j]){
                                html+=`<div class="col-6 col-lg-3">
                                        <a href="chi_tiet_sp.php?id=${arr[j].id}">
                                            <div class="each-product">
                                                <div class="img">
                                                    <img src="../img/san_pham/${arr[j].hinh}" alt="">
                                                </div>
                                                <div class="info">
                                                    <p><b>Price:<span>${formatMoney(arr[j].don_gia)}</span>VNĐ</b></p>
                                                    <p><b>${checkDiscount(arr[j])}</b></p>
                                                    <p>${arr[j].ten_hh}</p>
                                                </div>
                                                <div class="detail">
                                                <p>CHI TIẾT</p>
                                                </div>
                                                <div class="hot active">
                                                    HOT
                                                </div>
                                            </div>
                                        </a> 
                                    </div>`;
                            } 
                        }
                        html+=`</div>`;
                }


                html+=`<div class="pagination" >
                        <ul>`;
                for(let i=1;i<=Math.ceil(arr.length/12);i++){
                    html+=`<li id='li${i}' onclick="pagination(${i})">${i}</li>`;
                }
                html+=`</ul>
                    </div>`;

                
                wrap.innerHTML=html;
            }
            
            function renderDiscount(){
                let discounts=arr1.sort((a,b)=> parseInt(b.giam_gia)-parseInt(a.giam_gia)); 
                let html1=`<div class="title">
                            <p>SẢN PHẨM GIẢM GIÁ</p>
                          </div>`;
                let html2=``;
                let n=discounts.length<4?discounts.length:4;
                for(let i=0;i<n;i++){
                    let lastprice= Math.ceil(parseInt(discounts[i].don_gia)-parseInt(discounts[i].don_gia)*parseInt(discounts[i].giam_gia)/100);
                    html1+=`<a href="chi_tiet_sp.php?id=${discounts[i].id}">
                                <div class="sale-product" >
                                    <div class="img">
                                        <img src="../img/san_pham/${discounts[i].hinh}" alt="">
                                    </div>
                                    <div class="infor">
                                        <p style="text-align:start;">${discounts[i].ten_hh}</p>
                                        <h4><span style="text-decoration: line-through;">${formatMoney(discounts[i].don_gia)}</span> VNĐ </h4>
                                        <h4><span>${formatMoney(lastprice.toString())}</span> VNĐ</h4>
                                    </div>
                                </div>
                            </a>`;
                    html2+=`
                            <div class="swiper-slide">
                                <a href="chi_tiet_sp.php?id=${discounts[i].id}">
                                <div class="product">
                                    <img src="../img/san_pham/${discounts[i].hinh}" alt="">
                                    <div>
                                        <p class="name">${discounts[i].ten_hh}</p>
                                        <p class="price" style="text-decoration: line-through; font-size: 15px;">${formatMoney(discounts[i].don_gia)}VNĐ</p>
                                        <p class="sale">${formatMoney(lastprice.toString())} VNĐ</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            `;
                }

                document.querySelector(".sale").innerHTML=html1;
                document.querySelector(".sale_mobile .swiper-wrapper").innerHTML=html2;
            }

            pagination(1);
            renderDiscount();
    </script>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/san_pham/main.js"></script>
</body>
</html>