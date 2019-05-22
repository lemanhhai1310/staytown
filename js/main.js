jQuery(document).on("click",".back-to-top",function(){jQuery(this).removeClass('display');jQuery('html, body').animate({scrollTop:0},600);});
jQuery(window).on("scroll",function(){
    if( jQuery('.back-to-top').length > 0 && jQuery(window).scrollTop() > 200 ){
        jQuery('.back-to-top').addClass('display');}
    else{
        jQuery('.back-to-top').removeClass('display');
    }
});

$( document ).ready(function() {
    console.log( "ready!" );
});