function menu(){
	$("ul.sub-menu li.sub-menu-item").hover(
		function(){
			var height = $(this).height();
			var width = $(this).width();
			$(this).find("ul:first").show();
			
			
			$(this).find("ul:first").css({"margin-top":"-"+height+"px"});
			$(this).find("ul:first").css({"margin-bottom":""+height+"px"});	
			$(this).find("ul:first").css({"margin-left":""+width+"px"});
		},
		function(){
			$(this).find("ul").hide("slow");
		}
		
	);
	
	$("ul.sub-menu").mouseleave(
		function(){
			$(this).parents("ul.sub-menu:first").find("ul.sub-menu").hide();
		}
	);
}