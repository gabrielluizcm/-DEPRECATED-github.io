$(window).scroll(function()
{
  if ($(document).scrollTop() > 50)
  {
    $('nav').addClass('shrink');
    $('a').addClass('shrink')
  }
  else
  {
    $('nav').removeClass('shrink');
    $('a').removeClass('shrink');
  }
}
);
