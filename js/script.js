$(document).ready(function() {
	
	$(".menu-icon").click(function() {
		$("nav").slideToggle();
	});


// Thank you chris for this idea
// \/\/\/\/

	$(window).resize(function(){  
	    var w = $(window).width();  
	    if(w > 680) {  
	        $("nav").removeAttr('style');  
	    }  
	});

// /\/\/\/\

})