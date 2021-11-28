<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8f65ebef09.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/tin_tuc/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link rel="icon" href="../img/gioi_thieu/tachnen.png" type="image/x-icon">
        <title>Ishin Shop - Tin tức</title>
        <meta name="description" content="Tin tức về giày trong và ngoài nước - Xem tại Isshin shop!">
        <meta name="robots" content="index, follow">
</head>
<body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT HEADER -->
    <?php require('top_menu.php') ?>
    <script>
        document.querySelector('.top-menu ul li:nth-child(4) a').classList.add('active')
    </script>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    
<section id="main">
            <!-- han che dung container-fluid, tru khi phuc vu man hinh ultra wide -->
            <div class="container" id="main-content">
            <section class="display-filter container">
                    <div class="link">
                        <a href="trang_chu.php" style="color:rgb(150, 148, 148);">TRANG CHỦ</a>
                        <span>/</span>
                        <a href="" style="color: black;">TIN TỨC</a>
                    </div>
                </section>
                <div class="row row-cols-lg-2">
                  <div class="col col-12 col-lg-8">
                      <!-----------------------------carousel  ------------------------------------------->
                      <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-bs-ride="carousel" >
                        <!-- an indicator in the middle -->
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <!-- main carousel -->
                      <div class="carousel-inner">
                        <div class="carousel-item bg-black active">
                          <img src="../css/tin_tuc/img/94E33502-4000-42EF-8FC8-08673FB70583-960x640.jpeg" class="d-block" alt="first pic">
                          <div class="carousel-caption d-md-block">
                              <a href="https://snkrvn.com/nike-air-force-1-love-women-phoi-mau-danh-rieng-cho-mot-nua-the-gioi/"><h5 class="title-carousel">Nike AIR FORCE 1 Love Women – Phối màu dành riêng cho một nửa thế giới</h5></a>
                              <p class="d-none d-md-block">Nike lại tiếp tục tung ra một phối màu sử dụng tông màu trắng chủ đạo bằng chất liệu canvas kết hợp denim trên đôi sneakers được xem là biểu tượng của thương hiệu, Nike Air Force 1 Love Women.</p>
                          </div>
                        </div>
                        <!-- with bg-black, we make a dark overlay -->
                          <div class="carousel-item bg-black">      
                              <img src="../css/tin_tuc/img/Off-white-x-Nike-Air-Force-1-University-Yellow-Virgil-Abloh-960x640.jpg" class="d-block" alt="second pic">
                              <div class="carousel-caption d-md-block">
                              <a href="https://snkrvn.com/king-james-mang-doi-off-white-x-nike-air-force-1-university-yellow-cua-virgil-abloh-co-gi-dac-biet/"><h5 class="title-carousel">King James mang đôi OFF-WHITE x Nike Air Force 1 University Yellow của Virgil Abloh có gì đặc biệt?</h5></a>
                              <p class="d-none d-md-block">OFF-WHITE x Nike Air Force 1 University Yellow là đôi sneakers được hé lộ trong website public—domain.com, một website mô phỏng màn hình desktop làm việc của Virgil Abloh.</p>
                              </div>
                          </div>
                        <div class="carousel-item bg-black">      
                          <img src="../css/tin_tuc/img/Yeezy-BOOST-380-‘Covellite’-960x640.jpg" class="d-block" alt="second pic">
                          <div class="carousel-caption d-md-block">
                            <a href="https://snkrvn.com/kanye-west-va-adidas-tiep-tuc-tung-ra-phoi-mau-doc-la-yeezy-boost-380-covellite-lay-cam-hung-tu-da-quy/"><h5 class="title-carousel">Kanye West và adidas tiếp tục tung ra phối màu ĐỘC LẠ Yeezy BOOST 380 ‘Covellite’ lấy cảm hứng từ đá quý</h5></a>
                            <p class="d-none d-md-block">Kanye West và adidas lại tiếp tục tung ra một phối màu trên đôi Yeezy BOOST 380 ‘Covellite’ lấy cảm hứng từ một loại đá quý có tên gọi là Covellite quý hiếm.</p>
                          </div>
                        </div>
                      </div>
                      <!-- button to navigate left and right -->
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div class="col col-12 col-lg-4">
                    <form class="d-flex m-5 m-lg-2">
                        <input class="form-control me-3" type="search" placeholder="1 cái search box để trưng" aria-label="Search">
                        <button class="btn btn-primary" type="submit"> <i class="bi bi-search text-white"></i></button>
                    </form>
                    <div class="container-fluid" id="new-news">
                        <h3 class="header-special">Bài viết mới</h3>
                        <div class="row small-news">
                            <img class="d-flex img-fluid icon-image col-3" src="../css/tin_tuc/img/adidas-Stan-Smith-960x640.jpg">
                            <a href="https://snkrvn.com/hang-loat-cac-phoi-mau-cua-adidas-stan-smith-duoc-tung-ra-danh-cho-tin-do-me-sneakers/" class=" bg-secondary bg-opacity-25  col-9 small-news-descri-lg">Hàng loạt các phối màu của adidas Stan Smith được tung ra dành cho tín đồ mê sneakers</a>
                        </div>
                        <div class="row small-news">
                            <img class="d-flex img-fluid icon-image col-3" src="../css/tin_tuc/img/AAF52772-C556-43AF-9B5C-19169C1F4517.jpeg">
                            <a href="https://snkrvn.com/yeezy-gia-tri-1-6-ty-usd-trong-tong-so-6-6-ty-usd-tai-san-cua-kanye-west/" class=" bg-secondary bg-opacity-25  col-9 small-news-descri-lg">Thương hiệu YEEZY giá trị 1.6 tỷ USD trong tổng số 6.6 tỷ USD tài sản của Kanye West</a>
                        </div>
                        <div class="row small-news">
                            <img class="d-flex img-fluid icon-image col-3" src="../css/tin_tuc/img/adidas-Futurecraft-4D-OG-Ash-Green-Core-Black-2.jpg">
                            <a href="https://snkrvn.com/tu-gio-ban-co-the-mua-adidas-futurecraft-4d-og-voi-muc-gia-re-hon-rat-nhieu/" class=" bg-secondary bg-opacity-25  col-9 small-news-descri-lg">Từ giờ bạn có thể mua adidas Futurecraft 4D OG với mức giá rẻ hơn rất nhiều</a>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-3">
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/Travis-Scott-x-Air-Jordan-6-Bristish-Khaki-2-960x640.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/travis-scott-x-air-jordan-6-british-khaki-phoi-mau-khaki-tren-nen-da-suede-cuc-dep-mat-ra-mat-vao-30-04-2021/" class="d-block card-title text-wrap text-truncate card-title-small">Travis Scott x Air Jordan 6 British Khaki – Phối màu Khaki trên nền da Suede cực đẹp mắt ra mắt vào 30/04/2021</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Travis Scott x Air Jordan 6 British Khaki sẽ chính thức được ra mắt vào ngày 30.04.2021 sắp tới đây, trùng với dịp nghỉ lễ tại Việt Nam. Phối màu Tên Kaki có nguồn gốc từ tiếng Urdu, có nghĩa là bụi hay màu đất. Vải kaki ra đời từ giữa thế kỉ 19 tại Ấn Độ. Năm 1848, vải kaki được sử dụng để may toàn bộ quân phục cho lính Anh và các quân đội khác trên toàn thế giới. “Thực chất tên khaki là tên một màu trong tiếng anh, đó là màu nâu nhạt pha với màu vàng nhạt”.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/BST-Champion-x-New-Era-Việt-Nam-960x640.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/chao-don-mua-he-cung-bst-spring-summer-21-chat-lu-den-tu-thuong-hieu-noi-tieng-champion-x-new-era/" class="d-block card-title text-wrap text-truncate card-title-small">Chào đón mùa hè cùng BST Spring/Summer 21 chất lừ đến từ thương hiệu nổi tiếng Champion x New Era</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Nếu bạn là một Fan cứng của thời trang đường phố streetstyle hay chỉ đơn thuần ưa chuộng gu ăn mặc đầy cá tính, chắc hẳn sẽ không thể bỏ qua một trong những thương hiệu nổi tiếng như Champion & New Era rồi có phải không nào !? Bên cạnh việc nâng tầm phong cách cho người mặc, những mẫu mã của những thương hiệu này luôn mang đến sự thoải mái và giúp bạn dễ dàng mix-match trang phục của mình trong nhiều outfit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/Nike-Air-Yeezy-1-Prototype-Kanye-West-Grammy-50th-1536x1024.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/travis-scott-x-air-jordan-6-british-khaki-phoi-mau-khaki-tren-nen-da-suede-cuc-dep-mat-ra-mat-vao-30-04-2021/" class="d-block card-title text-wrap text-truncate card-title-small">Nike Air Yeezy 1 Kanye West mang tại Grammy trở thành đôi sneakers đắt nhất hành tinh, vượt qua Air Jordan 1 Game-worn 1985</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Kanye West, Rapper được xem là một trong những Nghệ Sỹ có sức ảnh hưởng nhất mọi thời đại trong lĩnh vực âm nhạc, thời trang, thieetskees,… Với hơn 200 triệu album và 140 triệu Single được bán ra & hơn 20 lần đạt giải Grammy, Kanye West được Time Magazine bình chọn là người có sức ảnh hưởng lớn nhất vào năm 2005 và 2015.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/Top-Sneakers-collab-cùng-nghệ-sỹ-thành-công-nhất.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/nhung-collab-sneakers-thanh-cong-nhat-moi-thoi-dai-giua-nghe-sy-va-cac-thuong-hieu-sneakers/" class="d-block card-title text-wrap text-truncate card-title-small">Những Collab Sneakers thành công nhất mọi thời đại giữa Nghệ sỹ và các thương hiệu sneakers</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Nghệ sỹ và các thương hiệu sneakers lớn đều tạo ra những ảnh hưởng vô cùng lớn mạnh trên toàn cầu. Sắc màu, cá tính của người nghệ sỹ được thể hiện rõ nét khi kết hợp cùng tiềm lực & tầm ảnh hưởng cực mạnh của thương hiệu. Chắc chắn mỗi lần collab (Đồng sáng tạo) đều tạo ra sức hút vô cùng lớn về truyền thông cũng như những kết quả tạo dấu ấn của cả thương hiệu lẫn nghệ sỹ. Hôm nay, SNKRVN sẽ điểm qua những lần hợp tác giữa Nghệ sỹ và các thương hiệu Thể thao (Sneakers) trên toàn cầu mang nhiều dấu ấn & làm thay đổi nền sneakers trên toàn cầu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/GAP-x-YEEZY-960x640.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/travis-scott-x-air-jordan-6-british-khaki-phoi-mau-khaki-tren-nen-da-suede-cuc-dep-mat-ra-mat-vao-30-04-2021/" class="d-block card-title text-wrap text-truncate card-title-small">Cửa hàng GAP x YEEZY chuẩn bị được ra mắt vào tháng 7 và lời nhắn gửi của Kanye West</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Kể từ khi Kanye West thông báo về sự hợp tác 10 năm cùng thương hiệu GAP, đầu tiên là cổ phiếu của GAP đã tăng phi mã, tiếp theo là các fans của Kanye West cũng mong chờ hơn bao giờ hết cho dòng sản phẩm YZY x GAP lần này. Phải nói rằng độ hot của “thánh tạo hype” Kanye West vẫn chưa dấu hiệu giảm nhiệt bởi ngay khi Cửa hàng của GAP ở Chicago đã được bao quanh lại để sửa chửa theo đúng ý của Kanye thì một lời nhắn gửi đã được viral trên mạng xã hội. Lời nhắn gửi của Kanye West cảm ơn Chúa vì sự hợp tác này.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container news-card">
                        <div class="col card text-center">
                            <img class="img-fluid" src="../css/tin_tuc/img/Áo-T-Shirt-Tie-Dye-của-Champion-trong-BST-mới-về-tại-Cửa-hàng-Việt-Nam-960x640.jpg">
                            <div class="card-body">
                                <a href="https://snkrvn.com/travis-scott-x-air-jordan-6-british-khaki-phoi-mau-khaki-tren-nen-da-suede-cuc-dep-mat-ra-mat-vao-30-04-2021/" class="d-block card-title text-wrap text-truncate card-title-small">Đón đầu xu hướng và nâng tầm phong cách cùng BST mới toanh đến từ Champion tại Việt Nam!</a>
                                <p class="d-none d-lg-block card-text text-wrap text-truncate">Dường như khi nhắc đến Champion, các tín đồ thời trang không ai không biết đến thương hiệu đình đám này! Vốn mang trong mình phong cách đậm chất street-style nhưng vô cùng đẳng cấp và thời thượng, bạn sẽ cảm nhận được vô số giá trị khi khoác chúng trên người!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- IMPORT FOOTER -->
    <?php require('footer.php') ?>  
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/tin_tuc/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>