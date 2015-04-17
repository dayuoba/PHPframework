(function() {
	var __SCREENHEIGHT = $(window).height();
	$("body").attr("height", __SCREENHEIGHT);
	$("#main").css({
		"height": __SCREENHEIGHT,
		"width": "100%"
	});
	$("#containner").css("height", "70%");
	$("#footer").css("height", "15%");
	//alert("css");
})();