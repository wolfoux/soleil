$(document).ready(function(){
		 
		    //When mouse rolls over
		    $(".animationLi").mouseover(function(){
		        $(this).stop().animate({height:'130px'},{queue:false, duration:600, easing: 'easeOutCirc'})
		    });
		 
		    //When mouse is removed
		    $(".animationLi").mouseout(function(){
		        $(this).stop().animate({height:'90px'},{queue:false, duration:600, easing: 'easeOutCirc'})
		    });
		 
		});