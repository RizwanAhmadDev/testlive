var $ = jQuery;

$(document).ready(function (){
    $('.hamburger').click(function(){
        $('body').toggleClass('menu-active');
    })


$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('header').addClass('sticky-header');
    } else {
      $('header').removeClass('sticky-header');
    }
});

$(function() {
    // Owl Carousel
    $(".banner-slider .owl-carousel").owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: false,
      dots: false,
      infinite: true,
      touchDrag  : false,
      mouseDrag  : false,
      autoplay: true,
      autoplayTimeout: 4000
    });
  });
  

$("#carBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".banner").offset().top}, 'slow');
});




$(function() {
  // Owl Carousel
  $(".packages .owl-carousel").owlCarousel({
    loop: true,
    dots: false,
    infinite: true,
    nav:true,
    arrows: true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
      0:{
          items:1,
      },
      600:{
          items:1,
      },
      992:{
          items:2,
      }
  }
  });
});



$(function() {
  // Owl Carousel
  $(".banner-testimonials .owl-carousel").owlCarousel({
    items: 1,
    margin: 0,
    loop: true,
    nav: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplayTimeout: 3000
  });
});


$("#carBtn").click(function(e) {
  e.preventDefault();
  $('html,body').animate({
      scrollTop: $(".banner").offset().top}, 'slow');
});






var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

$("#single").select2({
  placeholder: "Pickup Location",
});

$("#single_02").select2({
  placeholder: "Destination Location",
});



$("#bookTaxi #phone").intlTelInput();
$(document).ready(function () {
  $('#umrahpkg').on('click',function () {
      $('input[type=checkbox]').each(
        function (index, checkbox) {
          if (index != 3) {
              checkbox.checked = false;
          }
      });
  });
});






})