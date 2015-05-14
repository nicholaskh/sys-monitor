$(function(){
function viewHeight(){
	return document.documentElement.clientHeight;
}
	$(".body").css("backgroundPosition","center -100px");
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	$(window).resize(function(){
		console.log(windowHeight);
	});
});