//reduces height of nav bar when scrolling down
$(window).scroll(function()
{
  if ($(document).scrollTop() > 50)
  {
    $('nav').addClass('shrink');
    $('a').addClass('shrink');
    $('button').removeClass('btn-lg');
  }
  else
  {
    $('nav').removeClass('shrink');
    $('a').removeClass('shrink');
    $('button').addClass('btn-lg');
  }
}
);

//makes scrolling from nav anchor links smooth
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

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
      }, 800, function(){
      });
    } // End if
  });
});

//Modal div for how I draw
//Code from https://www.w3schools.com/howto/howto_css_modals.asp
// Get the modal
var modal = document.getElementById('modalHow');

// Get the button that opens the modal
var btn = document.getElementById("how");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
