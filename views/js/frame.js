//functions

function gradualChange(obj, direction) {
	if (direction == "up") {
		$(obj).css({
			"-webkit-transition": "all 0.5s ease",
			"-moz-transition": "all 0.5s ease",
			"-o-transition": "all 0.5s ease",
			"transition": "all 0.5s ease",
			"opacity": 1
		});
	} else {
		/*obj.style.transition="all 0.5s ease";
		obj.style.opacity=0;*/
		$(obj).css({
			"-webkit-transition": "all 0.5s ease",
			"-moz-transition": "all 0.5s ease",
			"-o-transition": "all 0.5s ease",
			"transition": "all 0.5s ease",
			"opacity": 0
		});
	}
}

function hide(obj) {
	$(obj).css("display", "none");
}

/*navigator*/
//home
$("#nav .nav_Home").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Home2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Home.png")');
	});
$("#nav .nav_Home").click(function() {
	window.location.href = "index.php";
});
//service
$("#nav .nav_Service").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Service2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Service.png")');
	});
$("#nav .nav_Service").click(function() {
	window.location.href = "index.php?tmp=service";
});
//lessons
$("#nav .nav_Lessons").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Lessons2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Lessons.png")');
	});
$("#nav .nav_Lessons").click(function() {
	window.location.href = "index.php?tmp=lessons";
});
//works
$("#nav .nav_Works").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Works2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Works.png")');
	});
$("#nav .nav_Works").click(function() {
	window.location.href = "index.php?tmp=works";
});
//blog
$("#nav .nav_Blog").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Blog2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Blog.png")');
	});
$("#nav .nav_Blog").click(function() {
	window.location.href = "http://seecatch.lofter.com";
});
//nav_Contact
$("#nav .nav_Contact").hover(
	function() {
		$(this).css("background", 'url("views/img/nav_Contact2.png")');
	},
	function() {
		$(this).css("background", 'url("views/img/nav_Contact.png")');
	});
$("#nav .nav_Contact").click(function() {
	window.location.href = "index.php?tmp=contact";
});
/*welcome*/
$(".welcome .a_left").click(function() {
	var self = this;
	gradualChange(self.parentNode.parentNode);
	setTimeout(delay, 500);

	function delay() {
		hide(self.parentNode.parentNode);
		//todo
		window.location.href = "index.php?tmp=welcome";
	}
});