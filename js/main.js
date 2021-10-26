$(document).ready(function () {
  $('[data-toggle="popover"]').popover();

  $(".icon").click(function () {
    $(".icon").toggleClass("active");
    
  });
  
});

const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
      spaceBetween: 16,
    },
    600: {
      slidesPerView: 2.3,
      spaceBetween: 15,
    },
    1200: {
      slidesPerView: 3.3,
      spaceBetween: 32,
    }
  }
});

// var swiper = new Swiper(".slide-depoimentos", {
//   slidesPerView: 3.2,
//   spaceBetween: 32,
//   pagination: {
//     el: ".s-depoimentos .top .swiper-pagination",
//     clickable: true,
//   },
//   breakpoints: {
//     320: {
//       slidesPerView: 1.3,
//       spaceBetween: 16,
//     },
//     600: {
//       slidesPerView: 2.3,
//       spaceBetween: 15,
//     },
//     1200: {
//       slidesPerView: 3.3,
//       spaceBetween: 32,
//     }
//   }
// });
// sticky
function stickyElement(e) {
  var header = document.querySelector(".default-header");
  header.classList.toggle("sticky", window.scrollY > 10);
}

window.addEventListener("scroll", stickyElement);
