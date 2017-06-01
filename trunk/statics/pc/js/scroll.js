	$("#numdiv").find("ul").children().each(function() {
		var _index = $(this).index();
		var test=null;
		$(this).mouseenter(function() {
			$(this).addClass("on3").siblings().removeClass("on3");
			$("#picbox").find("ul").children().eq(_index).fadeIn(1000).siblings().stop().hide();
		});
	    var n=0;
		var aLi=$("#picbox ul li").length;
		
	function autopic(){
		  n++;
		if(n>=aLi){
			n=0;
		}		
		$("#numdiv").find("ul").children().eq(n).addClass("on3").siblings().removeClass("on3");
		$("#picbox").find("ul").children().eq(n).fadeIn(1000).siblings().stop().hide();	
	}
	//自动执行	
	test=setInterval(autopic,5000);

	$(".scrollbox","#picbox").mouseenter(function(){
		clearInterval(test);
	});
	
	$(".scrollbox","#picbox").mouseout(function(){
		test=setInterval(autopic,5000);
	});		
	})