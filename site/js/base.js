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
				arrowColor: '#ba0511',
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
		messages: {
			nom: 			"S'il vous plaît indiquer votre nom",
			prenom: 		"S'il vous plaît indiquer votre prenom",
			courriel: {
				required: 	"Nous avons besoin de votre adresse e-mail pour vous contacter",
				email:		"Votre adresse email doit être dans le format: name@domain.com"
			},
			telephone: {
				required:	"Nous avons besoin de votre numéro de téléphone pour vous contacter",
				digits:		"S'il vous plaît entrer que des chiffres.",
				minlength:	"S'il vous plaît entrer au moins 10 caractères.",
				maxlength:	"S'il vous plaît entrer un maximum de 11 caractères."
			},
			remarques:		"S'il vous plaît indiquer votre remarques",
		},
		submitHandler: function (form) {
			window.location.replace("essaimesage.php?nom="+nom.value+"&prenom="+prenom.value+"&courriel="+courriel.value+"&telephone="+telephone.value+"&remarques="+remarques.value);
			return false;
		}
	});
});