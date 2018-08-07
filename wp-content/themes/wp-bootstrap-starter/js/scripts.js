( function() {

	var app = {

		initHeader: function(){
			jQuery('.mobile-header-wrap button.navbar-toggler').on('click',function(){
				jQuery( ".mobile-header-nav" ).toggleClass( 'open');
			});

			jQuery('.mobile-header-nav').on('click', function(){
				jQuery( ".mobile-header-nav" ).toggleClass( 'open');
			});
		},
		
		initOurWorks: function() {
			jQuery('.our-works').slick({
			  infinite: true,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  arrows: true,
			  dots: false,
			  centerMode: true,
			  centerPadding: '0',
			  nextArrow: '<button class="slick-arrow next-btn"><i class="fas fa-chevron-right"></i></button>',
  			  prevArrow: '<button class="slick-arrow prev-btn"><i class="fas fa-chevron-left"></i></button>',
			  responsive: [
			    {
			      breakpoint: 1200,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        centerMode: false,
			      }
			    },
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        centerMode: false,
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        centerMode: false,
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
		},
		initTagline:function(){
			jQuery('.tagline-wrap').slick({
			  infinite: true,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  dots: true,
			  arrows:false
			});
		}

	}

	
	jQuery(document).ready( function() {
		
		/* Initialize testimonials */
		app.initOurWorks();

		app.initHeader();

		app.initTagline();
		
	});
	
	jQuery(window).on('load', function(){


	})


})();