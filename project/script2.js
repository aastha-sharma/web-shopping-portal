$(document).ready(function(){

$(".cross").click(function(){
/*$(".cross").animate({'opacity':'0'},1000,function(){*/
	$(".curtain_right").animate({'right':'-50%'},2000);
	$(".curtain_left").animate({'left':'-50%'},2000);
	$(".cross").remove();
});











$("#home").click(function() {
        
    
    $("body,html").animate({scrollTop:$('.home').offset().top-200},1000);	
	
});	
	
$("#products").click(function() {
        
    
    $("body,html").animate({scrollTop:
	$('.products').offset().top-200},1000);	
	
});		
	
	$("#categories").click(function() {
        
    
    $("body,html").animate({scrollTop:
	$('.categories').offset().top-200},1000);	
	
});	
$("#profile").click(function() {
        
    
    $("body,html").animate({scrollTop:
	$('.profile').offset().top-200},1000);	
	
	
	
});	
});