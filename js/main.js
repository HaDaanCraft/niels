$(document).ready(() => {

  // Navigation bar

  $('#header').load('files/header.html');
  $('#nav').load('files/nav.html');
  $('#navResponsive').load('files/navresponsive.html', function() {

    // Animations

    $("h1").addClass("animated fadeIn");

    // Smooth Scrolling

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    // Responsive nav
    $(".open").click(function(){
      $(this).css("display", "none");
      $(".navResponsive").css("width", "100%");
    });

    $(".close").click(function(){
      $(".navResponsive").css("width", "0");
      $(".open").css("display", "block");
    });

      // Sticky nav bar

      var num = 2; //number of pixels before modifying styles

      $(window).bind('scroll', function () {
          if ($(window).scrollTop() > num) {
              $('.nav').addClass('sticky');
              $('.story').addClass('storys');
              $('.headerWrapper h1').addClass('heads');
              $('.guestBook').addClass('guestbooks');
              // $('.story').css({'margin-top': '150px'});
              // $('.headerWrapper h1').css({'margin-top': '100px'});
          } else {
              $('.nav').removeClass('sticky');
              $('.story').removeClass('storys');
              $('.headerWrapper h1').removeClass('heads');
              $('.guestBook').removeClass('guestbooks');
              // $('.headerWrapper h1').css({'margin-top': ''});
          }
      });

    // Easter Eggs

    var testing = [];
    var testingFor = ['s', 't', 'e1', 'v', 'e2', 'n'];
    var testingNum = 0;
    var timesCorrect = 0;
    $('.easteregg').click(function(evt){
      var easteregg = evt.target;
      testing.push(easteregg.id);
      console.log(testing);
      if (testing[testingNum] === testingFor[testingNum]) {
        timesCorrect += 1;
        testingNum += 1;
      } else {
        timesCorrect = 0;
        testingNum = 0;
        testing = [];
      }
      if (timesCorrect === 6) {
        console.log('correct');
        // $(location).attr('href', 'story.html')
        alert('You Found Me!');
        testing = [];
      }
    });
    });
});
