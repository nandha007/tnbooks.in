$(document).ready(function() {

	$(".scrollup").hide();
				
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	}); 
	
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	
	/*// Contact Maps
	$("#maps").gmap3({
		map: {
			options: {
			  center: [-7.866315,110.389574],
			  zoom: 8,
			  scrollwheel: false
			}  
		 },
		marker:{
			latLng: [-7.866315,110.389574],
			options: {
			 icon: new google.maps.MarkerImage(
			   "https://dl.dropboxusercontent.com/u/29545616/Preview/location.png",
			   new google.maps.Size(48, 48, "px", "px")
			 )
			}
		 }
	});*/
	
	//Slider
	$("#slider").carousel({
		interval: 5000
	});

});