 var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 1,
        spaceBetween:0,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 10000,
          disableOnInteraction: false,
        }
 });

var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 3,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
  },
});

// Responesive danh mục

function categoryResponesive() {
  let menu = document.querySelector(".category-search-sale .category .menu");
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
  }
  else {
    menu.classList.add("active"); 
  }
}
// *****************************************************************