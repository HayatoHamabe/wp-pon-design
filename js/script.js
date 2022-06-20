//toggle menu
toggle = () => {
  const line = document.getElementById("hamburger-line");
  const nav = document.getElementById("global-nav");
  line.classList.toggle("is-active");
  nav.classList.toggle("is-show");
};

// with window scroll
window.onscroll = () => {
  //header background
  const header = document.getElementById("header");
  if (window.scrollY > 0) {
    header.classList.add("is-active");
  } else {
    header.classList.remove("is-active");
  }

  //page top link
  const pageTopLink = document.getElementsByClassName("c-page-top-link");
  if (window.scrollY >= 300) {
    pageTopLink[0].classList.add("is-show");
  } else {
    pageTopLink[0].classList.remove("is-show");
  }
};

// smooth scroll
window.addEventListener("DOMContentLoaded", () => {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const targetOffsetTop =
        window.pageYOffset + targetElement.getBoundingClientRect().top;
      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth",
      });
    });
  });
});

// swiper
const swiper = new Swiper(".swiper", {
  // Optional parameters
  autoplay: {
    delay: 4000,
  },
  speed: 500,
  loop: true,
  effect: "fade",

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// $("#js-submit").on("click", function () {
//   let errors = 0;

//   $("#name").removeClass("name-err");
//   $("#email").removeClass("email-err");
//   $("#tel").removeClass("tel-err");
//   $("#contact").removeClass("contact-err");

//   if (!$("#privacy").prop("checked")) {
//     $("#form-privacy").addClass("polisy-err");
//     errors += 1;
//   }
//   if ($("#name").val() == "") {
//     $("#form-item-name").addClass("name-err");
//     errors += 1;
//   }
//   if ($("#email").val() == "") {
//     $("#form-item-email").addClass("email-err");
//     errors += 1;
//   }
//   if ($("#tel").val() == "") {
//     $("#form-item-tel").addClass("tel-err");
//     errors += 1;
//   }
//   if ($("#contact").val() == "") {
//     $("#form-item-contact").addClass("contact-err");
//     errors += 1;
//   }
//   $(window).scrollTop();
//   if (errors !== 0) {
//     return false;
//   }
// });

// $("form").submit(function () {});
