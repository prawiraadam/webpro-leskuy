$(function() {
    	$( "#tabs" ).tabs();
  	});
//Navigation
$(document).ready(function() {
    $(".menu a").click(function(){
		$(".video").each(function(){
			$(this).get(0).pause();
			})
		});
	//tabbing selection
	$(".menu li:eq(0)").addClass("active");
	$(".menu li").click(function(){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');		
		});
	//second level tabs		
	$(".subtabs").click(function(){
		$(this).nextUntil("li.tabsclose, .tabs").slideToggle();
		$(this).removeClass('active');
		$(this).next().addClass('active');
		$('.subtabs').not(this).nextUntil(".subtabs, .tabs").slideUp();
		});
	$(".tabs").click(function(){
		$(".subtabsinner").slideUp();
		});		
});