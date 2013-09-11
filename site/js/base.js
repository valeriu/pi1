jQuery(document).ready(function(){
	"use strict";
		/* Flex Slider Teaser */
	jQuery(window).load(function() {
		jQuery('.flexslider').flexslider({
			animation: "slide",
			animationLoop: true, 
			controlNav: false
		});
	});
});

  $(document).ready(function(){
    $("a[data-rel^='prettyPhoto']").prettyPhoto();
  });