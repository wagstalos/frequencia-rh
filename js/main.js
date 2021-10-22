$(document).ready(function () {
  $('[data-toggle="popover"]').popover();

  $(".icon").click(function () {
    $(".icon").toggleClass("active");
  });
  
});
AOS.init({
  duration: 1000,
  once: true
});
// sticky
function stickyElement(e) {
  var header = document.querySelector(".default-header");
  header.classList.toggle("sticky", window.scrollY > 10);
}

window.addEventListener("scroll", stickyElement);
