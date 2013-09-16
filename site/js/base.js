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

jQuery(document).ready(function(){
		$("a[data-rel^='prettyPhoto']").prettyPhoto();
	});

 $(document).ready(function() {
            $('.tooltip').tooltipster({
				animation: 'fade',
				arrow: true,
				theme: '.tooltipster-punk',
				arrowColor: '#f71169',
				maxWidth: 500
});
        });

$(document).ready(function () {
	$('#essaiform').validate({ // initialize the plugin
		rules: {
			nom: {
				required: true,   
			},
			prenom: {
				required: true,   
			},
			courriel: {
				required: true,
				email: true
			},
			telephone: {
				required: true,
				digits: true,
				minlength: 10,
				maxlength: 11
			},
			remarques: {
				required: true,				
			}
		},
		submitHandler: function (form) {
			window.location.replace("essaimesage.php?nom="+nom.value+"&prenom="+prenom.value+"&courriel="+courriel.value+"&telephone="+telephone.value+"&remarques="+remarques.value);
			return false;
		}
	});
});
/*
$(document).ready(function(){
	$("#sticker").sticky({topSpacing:0});
});
*/