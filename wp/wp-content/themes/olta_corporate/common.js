/**
 * File common js
 *
 *
 */


/*
 main navigation - common
*/
	$('#menu-toggle').click(function () {
		$('#primary-menu').slideToggle(400);
		$('#menu-toggle-icon').toggleClass("close");
	});

/*
 fade animation - common
*/
$('.fade').css('visibility','hidden');
$(window).scroll(function(){
	var windowHeight = $(window).height(),
	topWindow = $(window).scrollTop();
	$('.fade').each(function(){
		var objectPosition = $(this).offset().top;
		if(topWindow > objectPosition - windowHeight + 100){
		$(this).addClass("fadeAnime");
	}
	});
});
$('.prefade-001').delay(200).queue(function() {
	$(this).addClass("fadeAnime");
});
$('.prefade-002').delay(800).queue(function() {
	$(this).addClass("fadeAnime");
});
$('.prefade-003').delay(1600).queue(function() {
	$(this).addClass("rotateAnime");
});

/*
 sub menu - common
*/
$('.radial-nav li').css('visibility','hidden');
$('.radial-nav').on('click','#submenu-switch',function() {
	$(this).toggleClass('opened');
	if (!$(this).hasClass('opened')) {
		$(this).parent().find('#nav-contact').removeClass('opened1').addClass('closed1');
		$(this).parent().find('#nav-map').removeClass('opened2').addClass('closed2');
	} else {
		$(this).parent().find('#nav-contact').addClass('opened1').removeClass('closed1');
		$(this).parent().find('#nav-map').addClass('opened2').removeClass('closed2');

	}
});

/*
 accordion - top
*/
$(".accordion_icon").on("click",function(){
	$($(this).next("section")).slideToggle(400);
	$(this).parent().toggleClass('opened');

	if ($(this).hasClass('active')) {
			$(this).removeClass('active');
	}
	else {
		$(this).addClass('active');
	}
});

/**
 * File customizer js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );

/**
 * File navigation js
 *
 * Hamburger menu
 */

/**
 * File skip-link-focus-fix js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();
