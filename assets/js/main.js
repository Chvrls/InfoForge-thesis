/*=============== SHOW MENU ===============*/

/*===== Menu Show =====*/
/* Validate if constant exists */

/*===== Hide Show =====*/
/* Validate if constant exists */

/*=============== IMAGE GALLERY ===============*/

/*=============== SWIPER CATEGORIES ===============*/
var swiperCategories = new Swiper(".categories__container", {
  spaceBetween: 24,
  loop: true,
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
  });
  
/*=============== SWIPER PRODUCTS ===============*/
var swiperProducts = new Swiper(".new__container", {
  spaceBetween: 24,
  loop: true,
  
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
  });

/*=============== PRODUCTS TABS ===============*/
const tabs = document.querySelectorAll('[data-target]'),
  tabContents = document.querySelectorAll('[content]');

tabs.forEach((tab)=>{
  tab.addEventListener('click', () =>{
    const target = document.querySelector(tab.dataset.target);
    tabContents.forEach((tabContent) =>{
      tabContent.classList.remove('active-tab');
    });
    target.classList.add('active-tab');

    tabs.forEach((tab)=>{
      tab.classList.remove('active-tab');
    });
    tab.classList.add('active-tab');0
  });
});

/*================POPUP LOGIN================*/
document.addEventListener('DOMContentLoaded', function() {
  const personIcon = document.querySelector('.header__top-action');
  const popupContainer = document.querySelector('.popup-container');
  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');
  const closeBtns = document.querySelectorAll('.close-btn');
  const openSignupFormBtn = document.getElementById('openSignupForm');

  personIcon.addEventListener('click', function() {
    popupContainer.classList.add('active');
    loginForm.classList.add('active');
    signupForm.classList.remove('active');
  });

  openSignupFormBtn.addEventListener('click', function() {
    loginForm.classList.remove('active');
    signupForm.classList.add('active');
  });

  closeBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      popupContainer.classList.remove('active');
      loginForm.classList.remove('active');
      signupForm.classList.remove('active');
    });
  });

  popupContainer.addEventListener('click', function(e) {
    if (e.target === popupContainer) {
      popupContainer.classList.remove('active');
      loginForm.classList.remove('active');
      signupForm.classList.remove('active');
    }
  });
});

document.querySelector(".popout.active .close-btn").addEventListener("click", function(){
      document.querySelector(".popout.active").classList.remove("acitve")
})