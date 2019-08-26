$(window).scroll(function() {    
var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll >= 300) {
    //console.log('a');
    $(".fixed-title").addClass("active");
} else {
    //console.log('a');
    $(".fixed-title").removeClass("active");
}