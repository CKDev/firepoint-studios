/*
==========================================================================================
FIREPOINT. | CORE SCRIPTS
=========================================================================================
*/
// --------------------------------------------------------------------------------------
// DOCUMENT READY
// --------------------------------------------------------------------------------------
$(document).ready(function() {

	var click = ( 'ontouchstart' in window ) ? 'touchstart' : 'click';
	var $window = $(window),
        $window_breakpoint = 961; // <- Global Breakpoint

    var checkWidth = function() {
        $window_width = $window.width();
        return $window_width;
    }
    if( checkWidth() < $window_breakpoint) {
    	$('body').addClass('is-mobile');
    }


	// ----------------------------------------------------
	// Scroll to Reveal
	// https://github.com/jlmakes/scrollreveal
	window.sr = ScrollReveal({ 
		reset: false,			// true:  reveals occur every time elements become visible
								// false: reveals occur once as elements become visible
		origin: 'bottom',
		distance: '4rem',
		duration: 500,
		delay: 200,
		rotate: { x: 0, y: 0, z: 0 },
		opacity: 0,
		scale: 1.0,
		easing: 'ease-in-out', // 'cubic-bezier(0.6, 0.2, 0.1, 1)', 'ease', 'ease-in-out', 'linear', etc...
		// container: window.document.documentElement,
		mobile: true,
		useDelay: 'always',		// 'always' — delay for all reveal animations
								// 'once'   — delay only the first time reveals occur
								// 'onload' - delay only for animations triggered by first load
		viewFactor: 0.2,
		viewOffset: { top: 0, right: 0, bottom: 0, left: 0 },
		beforeReveal: function(domEl) { },
		beforeReset: function(domEl) { },
		afterReveal: function(domEl) { },
		afterReset: function(domEl) { }
	});
	sr.reveal('.js-reveal');
	sr.reveal('.js-reveal-right', {origin: 'right', delay: 400});

	// Custom intro classes, used on the Home Page
	sr.reveal('.js-reveal-intro', { delay: 200, duration: 500 });

	// Custom load class for interior pages
	sr.reveal('.js-reveal-page', { delay: 500, duration: 600, viewFactor: 0.01 });


    // ----------------------------------------------------
	// Cursor
	$('body').mousemove(function( event ) {
		$('.cursor-click').css({"--x":event.clientX+"px", "--y":event.clientY+"px"});
	});
	$('body').mousedown(function( event ) {
		$('.cursor-inner').css({transform: 'scale(1)'}).promise().done(function() {
			// CSS succesfully applied
			setTimeout(function(){
  				$('.cursor-inner').css({
					transform: 'scale(0)'
				});
			}, 300);
		});
	});
	$('body').delegate('a:not(.modal_link):not(.section-link)', 'click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		var href = $(this).attr('href');
		nav_swipe_close( href );
	});

	
	// ----------------------------------------------------
	// Mobile Navigation Toggle
	$('#navbar-toggle-checkbox').change(
		function() {
			var show = $( "#navbar-toggle-checkbox:checked" ).length;
  			if( show >= 1 ) { 
  				$('body').addClass('mobile-menu');
  			}
  			else {
  				$('body').removeClass('mobile-menu');
  			}
		}
	);
	
	// ----------------------------------------------------
	// Mobile Navigation Fly-out (expanding circular curtain)
	$('#navbar-toggle').on(click, function(){
		if( !$(this).hasClass('open') ){
			mobile_menu_open();
		} else {
			mobile_menu_close();
		}
	});	
	function mobile_menu_open(){
		$('#navbar-toggle').addClass('open');
		sr.reveal('#navigation-links .nav', {viewFactor: 0} );
		setTimeout(function(){
			window.scrollTo(0,10);
			window.scrollTo(0,0);
        }, 200);
	}
	function mobile_menu_close(){
		$('#navbar-toggle').removeClass('open');
	}


	// ----------------------------------------------------
	// Navigation Swipe
	var nav_swipe = function() {
		if( $(document).width() > $window_breakpoint ) {
			if( $('body').hasClass('nav-closed') ) {
				nav_swipe_open();
			} else {
				nav_swipe_close();
			}
		}
	};
	function nav_swipe_open() {
		if( $('body').hasClass('nav-closed') ) {
			$('body').removeClass('nav-closed');
		}
		$('body').find('#navigation-mask').animate({ 
			width: '10px'
			}, 1000, "easeOutQuint", function() {
				$(this).animate({ 
					opacity: 0
					}, 250, "linear", function() {
					//	$(this).css({'opacity': 1});
					});
			}
		);
	}
	function nav_swipe_close(href=null) {
		$('.js-reveal-page').animate({ opacity: 0 }, 250, "linear");
		setTimeout( function() {

			$('body').find('#navigation-mask').fadeIn( 'fast', function() { 
				$('body').addClass('nav-closed');
				$(this).animate({ 
					opacity: 1
					}, 250, "linear",
					function() {
						$(this).animate({ 
							width: '106%'
							}, 1000, "easeOutQuint",
							function() {
								if( href.length > 0 ) {
									window.location = href;
								}
							});
					});
			});
			}, 200);
		/*
		$('body').find('#navigation-mask').fadeIn( 'fast', function() { 
			$('body').addClass('nav-closed');
			$(this).animate({ 
				width: '106%'
				}, 1000, "easeOutQuint",
				function() {

				});
		});
		*/
	}
	// Page Load - set a timer
	var nav_timeout = function(delay=750) { 
		if( !$('body').hasClass('nav-closed') ) {
			window.setTimeout(function() { nav_swipe_open(); }, delay);
		//	window.setTimeout(function() { nav_swipe_close(); }, Math.round(delay * 3));
		}
	};
	if( $(document).width() > $window_breakpoint ) {
		nav_timeout();
	}
	

	// ----------------------------------------------------
	// Contact Layer
	$('#contact-toggle').click( function(e) {
		e.preventDefault;
		
		// Contact Close
		if( $('body').hasClass('contact-open') ) { // .open-contact
			$('html, body').animate({ 
				scrollTop: $(document).height()-$(window).height()
				}, 0, "easeOutQuint"
			);
			$('#contact-information').animate({ opacity: 0 }, 1000, "easeOutQuint");
			$('#layout-footer').css({'position':'absolute'}).animate({
				height: "315px"
			}, 50, function() {
				$('body').toggleClass('contact-open');
			});
		}

		// Contact Open
		else {
			$('body').toggleClass('contact-open');
			var height = $(window).height();
			$('#layout-footer').animate({
				height: height+"px"
			}, 50, function() {
				$(this).css({'position':'fixed'});
				$('#contact-information').delay(100).animate({
					opacity: 1
				}, 1000, "easeOutQuint", function() {

				});
			});
			// Scroll document to the bottom, to work with the 'position: fixed' footer
			$('html, body').delay(100).animate({ 
				scrollTop: $(document).height()-$(window).height()
				}, 500, "easeOutQuint"
			);
		}
	});
	$('.close-contact').click( function(e) {
		e.preventDefault;
		// Contact Close
		if( $('body').hasClass('contact-open') ) { // .open-contact
			$('html, body').animate({ 
				scrollTop: $(document).height()-$(window).height()
				}, 0, "easeOutQuint"
			);
			$('#contact-information').animate({ opacity: 0 }, 50);
			$('#layout-footer').css({'position':'absolute'}).animate({
				height: "315px"
			}, 50, function() {
				$('body').toggleClass('contact-open');
			});
		}
	});

	$('#contac-submit').click( function(e) {
		e.preventDefault;
		$('#contact-form').attr({'action': 'contact'} ).submit();
	});


	// ----------------------------------------------------
	// Team Page - content expand
	// [X] Removed
	$('.content-toggle').click( function() {
		$(this).next().toggleClass('hidden-sm-down');
	});

	// Modals
	// [!] Adjusted
	$('body.team a.modal_link').click( function() {

		$(this).parents('.profile').addClass('selected');
		$modal_image = $(this).parents('.profile').find('.profile-figure img').clone();
		$modal_text = $(this).parents('.profile').find('.profile-text').html();
		
	}).animatedModal({
		'color': '#240249',
		'animatedIn': 'slideInUp',
		'animatedOut': 'slideOutDown',
		'modalTarget': 'modal',
		'beforeOpen': function() {
			$('#modal .animated-modal-content').hide();
			$('#modal .animated-modal-content .profile-figure').append( $modal_image );
			$('#modal .animated-modal-content .profile-text').append( $modal_text );
		},
		'afterOpen': function() {
			$('#modal .animated-modal-content').fadeIn('fast');
		},
		'afterClose': function() {
			$('#modal .animated-modal-content .profile-figure').delay(200).empty();
			$('#modal .animated-modal-content .profile-text').delay(200).empty();
			$('.profile.selected').removeClass('selected');
		}
	});

	
});