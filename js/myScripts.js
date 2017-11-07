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

// MOBILE COLLAPSIBLE MENU
$(".button-collapse").sideNav({
  menuWidth: 200,
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