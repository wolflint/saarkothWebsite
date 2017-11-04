//Background image parralax
$(document).ready(function () {
  var movementStrength = 30;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();
  $("#parallax-section").mousemove(function (e) {
    var pageX = e.pageX - ($(window).width() / 2);
    var pageY = e.pageY - ($(window).height() / 2);
    var newvalueX = width * pageX * -1 - 25;
    var newvalueY = height * pageY * -1 - 50;
    $('#parallax-section').css("background-position", newvalueX + "px     " + newvalueY + "px");
  });
});

// Smooth scrolling to anchors
$(document).ready(function () {
  // Add smooth scrolling to all links
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

/* animationHover('#rune2', 'swing');
animationHover('#rune3', 'swing');
animationHover('#rune4', 'swing');
animationHover('#rune1', 'swing'); */

function animationHover(element, animation){
  element = $(element);
  element.hover(
      function() {
          element.addClass('animated ' + animation);        
      },
      function(){
          //wait for animation to finish before removing classes
          window.setTimeout( function(){
              element.removeClass('animated ' + animation);
          }, 2000);         
      });
}