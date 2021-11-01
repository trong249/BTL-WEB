<style>


.logo-f {
    /* img-fluid in bootstrap 5 */
    max-width: 100%;
    height:auto;
    /* ------------------------ */
    object-fit:contain;
    object-position: 0 100%;
}
.footer{
    width: 100%;
    margin-top: 80px;
    padding-bottom: 50px;
    background-color: #f0f0f1;
}
.footer .col-12{
    margin-top: 50px;
}
.footer p,  .footer li {
    color: rgb(134, 134, 134);
    font-size: 14px;
}
.footer li{
    margin-bottom: 20px;
}
.footer li a{
    margin-right:10px ;
    color: rgb(134, 134, 134);
}
.footer li a:hover{
    color: rgb(31, 31, 31);
}
.footer .subcribe input{
    padding-left: 10px;
    line-height: 20px;
    height: 30px;
    width: 100%;
    border-radius: 10px;
    outline: none;
    border: 1px solid transparent;
}
.footer .subcribe button {
    width: 50%;
    height: 30px;
    cursor: pointer;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;
}
.footer .subcribe button:hover{
    background-color: black;
    color: white;
}
@media only screen and (max-width: 960px){
    .footer .col-12{
        text-align:left;
    }
}
@media only screen and (max-width: 770px){
    .footer .col-12{
        text-align: center;
    }
}

/* ********************************************** */
.move-to-top{
    position: fixed;
    bottom: 50px;
    right: 5%;
    font-size: 40px;
    cursor: pointer;
    overflow: hidden;
    z-index: 5;
}
.move-to-top i{
    transform: translateY(130%);
    transition: all 0.3s ease-in-out;
}
.move-to-top i.active{
    transform: translateY(0);
}
</style>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
<section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3" style="padding: 5px 10px;">
                    <p style="text-align: justify;">Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi .</p>
                    <p>Xin cám ơn !</p>
                    <div id="logo-footer container">
                        <img class="img-fluid logo-f" src="../img/gioi_thieu/bg_footer_cut.png">
                    </div>
                </div>
                <div class="col-12 col-md-3" style="text-align: center;">
                    <h2>Shop</h2>
                    <br>
                    <ul>
                        <li>Trang chủ</li>
                        <li>Cửa hàng</li>
                        <li>Giới thiệu</li>
                        <li>Liên hệ</li>
                        <li><a href=""><i class="fab fa-facebook"></i></a>  <a href=""><i class="fab fa-youtube"></i></a> <a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3" style="text-align: center;">
                    <h2>Hỗ trợ</h2>
                    <br>
                    <ul>
                        <li>Ưu đãi</li>
                        <li>Giao nhận</li>
                        <li>Đổi trả</li>
                        <li>Bảo mật</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 subcribe">
                    <h2>Khuyến mãi</h2> <br>
                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi sớm nhất ...</p> <br>
                    <input type="email" placeholder="you@gmail.com"> <br> <br>
                    <button> Đăng ký</button>
                </div>
            </div>
        </div>
    </section>

<div class="move-to-top" onclick="moveToTop()">
    <i class="fas fa-arrow-circle-up" title="Move to Top"></i>
</div>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
<script>
    //  xử lí move to top
    function moveToTop() {
        window.scrollTo(0, 0);
    }
    window.onscroll = () => {
    let moveToTop = document.querySelector('.move-to-top i');
    if (window.pageYOffset > 300) {
        moveToTop.classList.add('active')
    }
    else {
        moveToTop.classList.remove('active')
    }
};
</script>