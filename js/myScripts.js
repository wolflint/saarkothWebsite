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

// MATERIALBOXED IMAGES
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

//PARALLAX
$(document).ready(function() {

	var movementStrength = 25;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();
	$("#parallax-section").mousemove(function(e) {
		var pageX = e.pageX - ($(window).width() / 2);
		var newvalueX = width * pageX * -1 - 25;
		$('#parallax-section').css("background-position", newvalueX + "px");
	});
});
