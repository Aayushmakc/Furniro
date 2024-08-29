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
  


//   For Contac form
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".contact-form form");
    
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        
        // Get form fields
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();
        
        // Validate name
        if (name === "") {
            alert("Please enter your name.");
            return;
        }
        
        // Validate email
        if (email === "" || !validateEmail(email)) {
            alert("Please enter a valid email address.");
            return;
        }
        
        // Validate message
        if (message === "") {
            alert("Please enter your message.");
            return;
        }
        
       
        alert("Form submitted successfully!");
        form.submit(); 
    });
    
    // Function to validate email format
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});


//   Newsletter Validation
$(document).ready(function() {
   
    $('form').on('submit', function(e) {
      var email = $(this).find('input[type="email"]').val();
      
      if (email === "") {
        e.preventDefault(); 
        alert("Please enter your email address.");
      } else {
        alert("Thank you for subscribing!");
      }
    });
  });
  
  
  
  