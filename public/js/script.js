window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").className = "nav-bar";
  } else {
    document.getElementById("navbar").className = "";
  }
}
new WOW().init();
$(document).ready(function(){
    $(function () {
        $("#customers-testimonials").owlCarousel({
            items: 1,
            autoplay: true,
            smartSpeed: 700,
            loop: true,
            autoplayHoverPause: true,
        });
    });
    $('#owl-service').owlCarousel({
        center: true,
        items:4,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        margin:10,
        responsive:{
            600:{
                items:3
            }
        }
    });
    $("#team-members").owlCarousel({
        items: 3,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });



  });

