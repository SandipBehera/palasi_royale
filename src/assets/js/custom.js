$(document).ready(function () {
	"use strict";
	//Sticky Nav
	$(".megaland-nav").sticky({ topSpacing: 0 });

	$('#mc-form').ajaxChimp({
    	url: 'http://ecologytheme.us12.list-manage.com/subscribe/post?u=2c7cbbb6a821c42b5699c7cd9&amp;id=208cfb0681'
	});

		//Contact Form
	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			comments: $('#comments').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});
		return false;
	});

	// WOW Js
	new WOW().init();

	$(window).load(function(){
		$('#status').fadeOut();
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({'overflow':'visible'});
	})

	//Smoth scroll
   	$("a").on('click', function(event) {
	    if (this.hash !== "") {
	     // Prevent default anchor click behavior
	     event.preventDefault();

	     // Store hash
	     var hash = this.hash;

	     $('html, body').animate({
	     scrollTop: $(hash).offset().top
	     }, 1500, function(){
	     window.location.hash = hash;
	     });
	    } // End if
   	});

   	//Scroll Spy  
   	$('body').scrollspy({ target: '.megaland-nav'})

	//Circle Progress Bar
	$('.chart').easyPieChart({
		easing: 'easeOutBounce',
		scaleColor: false,
		size: 138,
		barColor: "#2196f3",
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		}
	});

	// Screenshot Carousel
	$('.center').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 5,
		responsive: [
			{
			  breakpoint: 991,
			  settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			  }
			}
		]
	});	
	
	//Testimonial Carousel (Slick)
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		variableWidth: false,
		arrows: false,
		responsive: [
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 5
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 3
			  }
			}
		]
	});	
	
	//Software Scrrenshot Carousel
	$(".saas-screenshot-carousel").owlCarousel({
		items: 3,
		margin: 30,
		nav: false,
		dots: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});	
	
	//Testimonial Carousel (Slick)
	$('.saas-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.saas-slider-nav'
	});
	$('.saas-slider-nav').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		asNavFor: '.saas-slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		variableWidth: false,
		arrows: false,
		responsive: [
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 5
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 3
			  }
			}
		]
	});	
	
	//Testimonial Carousel (Hosting)
	$('.hosting-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.hosting-slider-nav'
	});
	$('.hosting-slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.hosting-slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		variableWidth: false,
		arrows: false,
		responsive: [
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 5
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 3
			  }
			}
		]
	});

	//Hosting Clients Logo
	$(".hcl-carousel").owlCarousel({
		items: 6,
		margin: 30,
		nav: false,
		dots: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 3
			},
			480: {
				items: 3
			},
			768: {
				items: 5
			},
			992: {
				items: 6
			}
		}
	});
	
	
	//REM Featured Properties Carousel
	$(".rmf-carousel").owlCarousel({
		items: 3,
		nav: true,
		navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		dots: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 2,
				nav: false
			},
			992: {
				items: 3
			}
		}
	});

	//Travel Feedback Carousel
	$(".feedback-carousel").owlCarousel({
		items: 3,
		nav: false,
		dots: true,
		margin: 30,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});


	//Travel Feedback Carousel
	$(".testimonial-carousel-ebook").owlCarousel({
		items: 3,
		nav: true,
		navText: ["<i class='fa fa-long-arrow-left'></i> PREV", "NEXT <i class='fa fa-long-arrow-right'></i>"],
		dots: false,
		margin: 30,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});
	
	
	//Resume Testimonial Carousel
	$(".testimonial-carousel-resume").owlCarousel({
		items: 1,
		nav: true,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		dots: false,
		margin: 30,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
	});	
	
	//Restaurant Testimonial Carousel
	$(".feedback-carousel-restrnt").owlCarousel({
		items: 2,
		nav: true,
		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
		dots: false,
		margin: 30,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 2
			}
		}
	});	

	
	// seo landing 
	$('.testimonial-slick-slider').slick({
	  centerMode: true,
	  centerPadding: '160px',
	  slidesToShow: 3,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]

	});	


//Testimonial Carousel (REM)
	$('.rem-slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.rem-slider-nav'
	});
	$('.rem-slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.rem-slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		variableWidth: false,
		arrows: false,
		responsive: [
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 3
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 3
			  }
			}
		]
	});

	$('#cascade-slider').cascadeSlider({
	});
	
	//Video Popup	
		$('.video-iframe').magnificPopup({
		type: 'iframe',
		iframe: {
			markup: '<div class="mfp-iframe-scaler">' +
				'<div class="mfp-close"></div>' +
				'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
				'</div>',
			patterns: {
				youtube: {
					index: 'youtube.com/',
					id: 'v=',
					src: 'https://www.youtube.com/embed/%id%?autoplay=1'
				}
			},
			srcAction: 'iframe_src'
		}
	});	
	
	//Popup
	$('.gallery-single').magnificPopup({
		delegate:'a',
		type: 'image',
		gallery: {
			enabled: true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	//jQuery Counter	
		$('.counter').counterUp({
			delay: 10,
			time:1000
		});

	// Countdown
    $('.clock-countdown').downCount({
	        date: $('.site-config').attr('data-date'),
	        offset: +10
	    }, function () {
    });


	//faq-tab
	$('.accordion').on('click', function(){

	  if( $(this).hasClass('active') ){
	    $(this).removeClass('active');
	    $(this).next().removeClass('show');
	  }else{
	    $('.accordion').removeClass('active');
	    $('.panel').removeClass('show');

	    $(this).addClass('active');
	    $(this).next().addClass('show');
	  }

	})

	//Masonry Gallery (REM)
	$('.grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: 285
	});

});



