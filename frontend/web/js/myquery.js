$('.carousel').carousel({
  interval: 3000,
  
});
/*to add wrapper class in featured business*/
if ($(window).width() >700) {
    $('#featured').addClass('wrapper');
}
else
{
	 $('#featured').removeClass('wrapper');
}
/*end wrapper */