/**
 * File common js
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
	$($(this).next(".sec-block-txt")).slideToggle(400);
	$(this).parent().toggleClass('opened');

	if ($(this).hasClass('active')) {
		$(this).removeClass('active');
		$(".accordion_text").removeClass('active');

	}
	else {
		$(this).addClass('active');
		$(".accordion_text").addClass('active');
	}
});

$(".accordion_text").on("click",function(){
	$($(this).nextAll("section")).slideToggle(400);
	$($(this).nextAll(".sec-block-txt")).slideToggle(400);
	$(this).parent().toggleClass('opened');

	if ($(this).hasClass('active')) {
		$(this).removeClass('active');
		$(this).next(".accordion_icon").removeClass('active');
	}
	else {
		$(this).addClass('active');
		$(this).next(".accordion_icon").addClass('active');
	}

});


var myPromise = $.when(
	// $('head').append('<style>body{display:none;}'),
	$('body').delay(900).fadeIn("slow")
);
myPromise.done(function() {
	var slider;
	var sliderFlag = false;
	var breakpoint = 767;
	$(window).on('load resize', function() {
		sliderSet();
	});
	function sliderSet() {
		var windowWidth = $(window).width();
		if (windowWidth <= breakpoint && !sliderFlag) {
			slider = $('#sample').bxSlider();
			sliderFlag = true;
		} else if (windowWidth > breakpoint && sliderFlag) {
			slider.destroySlider();
			sliderFlag = false;
		}
	}
	$('#bxslide').bxSlider({
		pagerCustom: '.custom-thumb',
		controls: false
	});
});



$(".parent a").on("click",function(){
	$($(this).next("ul")).slideToggle(400);
	$(this).parent().toggleClass('opened');

	if ($(this).hasClass('active')) {
		$(this).removeClass('active');
		$(".accordion_text").removeClass('active');

	}
	else {
		$(this).addClass('active');
		$(".accordion_text").addClass('active');
	}
});