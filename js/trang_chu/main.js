 var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 3,
        spaceBetween:20,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        }
 });
      

function openMenu(){
    document.querySelector('.top-menu .container .menu').classList.add('active');
}

function closeMenu(){
    document.querySelector('.top-menu .container .menu').classList.remove('active');
}
window.onscroll = () => {
    let menu = document.querySelector('.top-menu');
    
    
    if (window.pageYOffset > 100) {
        menu.classList.add('active')
    }
    else {
        menu.classList.remove('active')
    }

    if (menu.classList.contains('active')==true ) {
        document.querySelector('.top-menu .container .menu-bar').style.lineHeight = '50px';
        // document.querySelectorAll('.top-menu .container .login-register i').style.lineHeight = '50px';
        document.querySelectorAll('.top-menu .container .login-register')[0].style.height = '50px';
    }
    else {
        document.querySelector('.top-menu .container .menu-bar').style.lineHeight = '100px';
        // document.querySelectorAll('.top-menu .container .login-register i').style.lineHeight = '100px';
        document.querySelectorAll('.top-menu .container .login-register')[0].style.height = '100px';
    }
    //  set Menu BackGround
    
    let moveToTop = document.querySelector('.move-to-top i');
    if (window.pageYOffset > 300) {
        moveToTop.classList.add('active')
    }
    else {
        moveToTop.classList.remove('active')
    }
    // Set move to Top
};

