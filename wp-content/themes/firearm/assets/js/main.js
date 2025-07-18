AOS.init({disable: 'mobile'});
/* STICKY HEADER START */
window.onscroll = function () {
    myFunction();
  };
  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;
  function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
  }
  /* STICKY HEADER END */


$(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper('.bannerSlider', {
      loop: true,
      speed: 2900,
      effect: 'fade',
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      autoplay: {
          delay: 7900,
          disableOnInteraction: false,
      }
  })
  var swiper = new Swiper(".portfolioSlider", {
    loop : true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    speed: 2000,
    autoplay: {
      delay: 4500,
    },
    breakpoints: {
      200: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 0,
      }
    }
  });
  var mySwiper2 = new Swiper('.testiSlider', {
    loop: true,
    speed: 2900,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
     
     navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
     },
     autoplay: {
       delay: 1500,
         
     }
});


});

jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 100) {
      jQuery('.totop').stop().animate({ right: '0px' });
  } else {
      jQuery('.totop').stop().animate({ right: '-400px' });
  }
  });