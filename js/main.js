(function($) {
  "use strict";
  // alert(data.one);
  jQuery(document).ready(function($) {
    // var typed = new Typed(".write", {
    //   strings: [" Im a web designer", " Im a blogger", " Im a freelancer"],
    //   smartBackspace: true,
    //   backSpeed: 20,
    //   typeSpeed: 30,
    //   loop: true
    // });

    $(".image-link").magnificPopup({
      type: "image",
      mainClass: "mfp-with-zoom",

      zoom: {
        enabled: true,
        duration: 500,
        easing: "ease-in-out",
        opener: function(openerElement) {
          return openerElement.is("img")
            ? openerElement
            : openerElement.find("img");
        }
      }
    });

    new WOW().init();

    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $(".scrollToTop").fadeIn();
      } else {
        $(".scrollToTop").fadeOut();
      }
    });

    //Click event to scroll to top
    $(".scrollToTop").on("click", function() {
      $("html, body").animate({ scrollTop: 0 }, 800);
      return false;
    });

    window.onscroll = function() {
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
  });
})(jQuery);