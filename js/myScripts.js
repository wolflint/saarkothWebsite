// SMOOTH SCROLLING
$(document).ready(function () {
  // Add smooth scrolling to all links
  $(".smooth-scroll").on('click', function (event) {

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
      }, 500, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// MOBILE COLLAPSIBLE MENU
$(".button-collapse").sideNav({
  menuWidth: 250,
  edge: 'right', 
  closeOnClick: true,
  draggable: true,
});
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();




/* animationHover('#rune2', 'swing');
animationHover('#rune3', 'swing');
animationHover('#rune4', 'swing');
animationHover('#rune1', 'swing'); */

function animationHover(element, animation) {
  element = $(element);
  element.hover(
    function () {
      element.addClass('animated ' + animation);
    },
    function () {
      //wait for animation to finish before removing classes
      window.setTimeout(function () {
        element.removeClass('animated ' + animation);
      }, 2000);
    });
}