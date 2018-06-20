//reduces height of nav bar when scrolling down
$(window).scroll(function()
{
  if ($(document).scrollTop() > 50)
  {
    $('nav').addClass('shrink');
    $('a').addClass('shrink');
    $('button').addClass('btn-sm');
  }
  else
  {
    $('nav').removeClass('shrink');
    $('a').removeClass('shrink');
    $('button').removeClass('btn-sm');
  }
}
);

//makes scrolling from nav anchor links smooth
$(function(){
    $('.selectpicker').selectpicker();
});

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
