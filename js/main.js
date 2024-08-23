$ = jQuery.noConflict()
$(document).ready(function () {






    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    // Scroll Event (Go to Top on Click)
    // To scroll top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".scrollToTop").fadeIn().addClass("d-block");
        } else {
            $(".scrollToTop").fadeOut().removeClass("d-block");
        }
    });
    // Click event to scroll to top
    $(".scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });







});
// document.addEventListener('DOMContentLoaded', function() {
//     function getCurrentPage() {
//       return window.location.pathname.split('/').pop();
//     }
  
//     var currentPage = getCurrentPage();
//     var pageToBoxId = {
//       'page1.html': 'box1',
//       'page2.html': 'box2',
//       'page3.html': 'box3',
//       'page4.html': 'box4',
//     };
  
//     var activeBoxId = pageToBoxId[currentPage];
//     if (activeBoxId) {
//       var activeBox = document.getElementById(activeBoxId);
//       if (activeBox) {
//         activeBox.classList.add('active');
//       }
//     }
//   });
  

  
  
  
  