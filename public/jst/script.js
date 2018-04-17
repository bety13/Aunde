$(document).ready(function(){

	$("#banner").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 200) {
			if(!flag){
				$("#logo").css({"margin-top": "-5px", "width": "55px","height":"55px"});

				$("header").css({"background-color": "#0c2341", "height": "70px" ,"color": "black"});

				$(".aa").css({"color": "white"});
				flag = true;
			}
		}
		else{
			if(flag){
				$("#logo").css({"margin-top": "150px", "width": "250px","height":"250px", "color":"black"});

				$("header").css({"background-color": "#0c2341"});
				flag = false;
			}
		}




	});

});