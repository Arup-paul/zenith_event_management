(function ($){
	"use strict";


	/* main menu  */

	jQuery('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "767"
	});


	 
	/* main slider */
$('.slider-active').owlCarousel({
	loop:true,
	margin:10,
	nav:true,
	autoplay:true,
	
	responsive:{
		0:{
			items:1,
			nav:false
		},

		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
}); 


/* brand slider */
$('.testimonial_active').owlCarousel({
	loop:true,
	margin:30,
	nav:false,
	autoplay:true,
	
	responsive:{
		0:{
			items:1
		},

		768:{
			items:1
		},

		992:{
			items:1
		}, 
		1200:{
			items:1
		}
	}
}); 

//fancybox 
  $('[data-fancybox="gallery"]').fancybox({
  // Options will go here
});


//nice select

 $('select').niceSelect();


// modal video popup





  //fancybox 
  $('[data-fancybox="gallery"]').fancybox({
  // Options will go here
});



})(jQuery); 



