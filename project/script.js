$(document).ready(function(){	
	$(".play").click(function(){
$(".galleryi img:last-child").animate({'opacity':'0'},2500,function(){
var img=$(".galleryi img:last-child").attr('src');
$(".galleryi").prepend('<img src=" '+img+' "> ');	
	$(".galleryi img:last-child").remove();
	$(".play").click();	
	});	
	});
$(".play").click();
});