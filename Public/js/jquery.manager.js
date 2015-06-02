/**
 * Manager Main Page Javascript
 *
 * Jofy v1.0
 *
 **********************************/
$(function(){
	// ok jquery

	// topmenu clicked
	$(".menuList").click(function(){
		$(".menuList").removeClass("on");
		$(this).addClass("on");
		var index =$(".menuList").index($(this));
		$(".leftMenu").hide();
		$(".leftMenu").eq(index).show();
		$(".leftMenu").eq(index).find("li").eq(0).trigger("click");
	});

	// lsit clicked
	$(".list li").click(function(){
		$(".list li").removeClass("on");
		$(this).addClass("on");
		var href = $(this).attr("href");
		$("#mainFrame").attr("src", href);
		$("#mainFrame").hide();
	});
	$(".userBox div").click(function(){
		$(".userBox").hide();
		$(this).addClass("on");
		var href = $(this).attr("href");
		$("#mainFrame").attr("src", href);
		$("#mainFrame").hide();
	});

	// mainFrame load
	$("#mainFrame").load(function(){ $("#mainFrame").fadeIn(); });

	// userbox
	$(".userDiv").hover(function(){
		$(".userBox").show();
	},function(){
		$(".userBox").hide();
	});

	// userBox
	$(".userBoxList").click(function(){
		var name = $(this).attr("name");
		$(".menuList").eq(0).trigger("click");
		$("#"+ name).trigger("click");
	});

	// when window resized
	$(window).resize(function(){
		setTimeout(function(){
			resize();
		}, 100);
	});

	// init mian page
	resize();
	$(".menuList").eq(0).trigger("click");
	$("#mainFrame").niceScroll();


});

// this function to reset blocks
function resize()
{
	var allHeight = $(".container").height();
	var allWidth = $(".container").width();
	$(".content").height(allHeight-65);
	$(".mainBox").width(allWidth-224);
	$("#mainFrame").width(allWidth-224);
	$("#mainFrame").height(allHeight-65);
}