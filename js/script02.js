$(function(){
	$(".sub_menu").css("display","none");
	$("#main_menu li").click(function(){
		if($("+ul",this).css("display") == "none") {
			$(".sub_menu").slideUp();
			$("+ul",this).slideDown();
		} else {
			$("+ul",this).slideUp();			
		}
	});
});