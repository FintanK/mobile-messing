/*  JQUERY   */
$(document).ready(function(){
   $('section').css("min-height", $(window).height() + "px");
   $('#mobile-nav-btn').click(function() {

	if($('#page-wrapper').hasClass("slide")) {
	$('#page-wrapper').removeClass("slide");
	} else {
	$('#page-wrapper').addClass("slide");
        $('#page-wrapper').focus();
	}
   });

   $("#nav-menu li").click(function() {
       $("#nav-menu li").removeClass("selected");
       $('#page-wrapper').removeClass("slide");
       $(this).addClass("selected");
   });
   
   $('#projects-page').click(function() {
        $('section').hide();
	$('#projects').fadeIn('slow');   
   });
   
   $('#home-page').click(function() {
        $('section').hide();
	$('#home').fadeIn('slow');   
   });
   
   $('#blog-page').click(function() {
        $('section').hide();
	$('#blog').fadeIn('slow');  
   });
});





