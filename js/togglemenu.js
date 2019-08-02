$(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100 && !$( ".navbar" ).hasClass( "active" ) || $(window).scrollTop() === 0 && $( ".navbar" ).hasClass( "" )){
	$('.navbar').toggleClass( "active");
		}
 	});
});