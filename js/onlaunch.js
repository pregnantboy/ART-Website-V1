(function($) {
	// var get = window.location.pathname;
	// if (get === "/") {
		wow = new WOW(
	                      {
	                      boxClass:     'wow',      // default
	                      animateClass: 'animated', // default
	                      offset:       0,          // default
	                      mobile:       false,       // default
	                      live:         true        // default
	                    }
	                    )
		wow.init();
	  $(document).ready(function() {
	  					// $('#content').load('wp-content/themes/arts/main.php');
			    		setTimeout(function(){ 
							$('.welcomepage').css({'opacity':0});
						},1500);
						setTimeout(function(){ 
							$('.welcomepage').css({'display':'none'});
						},2200);
			    		setTimeout(function(){ 
							$('.navbar-default').css({'opacity':1});
							$('.carouselcontrols').css({'opacity':1});
						},2500);
					});
	// }
	// // } else if (get === "/blog") {
	// // 	$(document).ready(function() {
	// // 		$('header').remove();
	// // 		$('.welcomepage').remove();
	// // 		$('.navbar-default').css({'opacity':1});
	// // 		$('.carouselcontrols').css({'opacity':1});
	// // 		$( 'headers' ).removeClass( "fill" ).addClass("fillhalf");
	// // 		$('#content').load('wp-content/themes/arts/blog.php');
	// // 	});
	// // }
	// else {
	// 	$(document).ready(function() {
	// 		$('.welcomepage').css({'display':'none'});
	// 		$(".caption-carousel").text("404")
	// 	});
	// }

})(jQuery);