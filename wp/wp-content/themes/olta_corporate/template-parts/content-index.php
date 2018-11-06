<?php
/**
 * Template part for displaying page content in page-index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>
<style type="text/css" media="screen">
.fadeAnime {
	-webkit-animation-fill-mode:both;
	-ms-animation-fill-mode:both;
	animation-fill-mode:both;
	-webkit-animation-duration:0.7s;
	-ms-animation-duration:0.7s;
	animation-duration:0.7s;
	-webkit-animation-name: fadeAnime;
	-ms-animation-name: fadeAnime;
	animation-name: fadeAnime;
	visibility: visible !important;
}
@-webkit-keyframes fadeAnime {
	0% { opacity: 0; -webkit-transform: translateY(50px); }
	100% { opacity: 1; -webkit-transform: translateY(0); }
}
@keyframes fadeAnime {
	0% { opacity: 0; -webkit-transform: translateY(50px); -ms-transform: translateY(50px); transform: translateY(50px); }
	100% { opacity: 1; -webkit-transform: translateY(0); -ms-transform: translateY(0); transform: translateY(0); }
}

.prefade {
	visibility: hidden;
}



.site {
	position: relative;
	width: 960px;
	border-left: 1px solid #f2f2f2;
	border-right: 1px solid #f2f2f2;
	padding: 0;
	margin: 0 auto;
}

header.site-header {
	width: 816px;
	height: 126px;
	margin: 26px auto 0 auto;
}
header.site-header h1 {
	float: left;
	height: 26px;
	margin: 0;
	padding: 0;
	margin-top: 38px;
}
nav {
	float: right;
	width: auto;
}
nav ul {
	height: 126px;
	font-size: 12px;
	margin-left: 0;
	padding-left: 0;
}
nav ul li {
	height: 126px;
	line-height: 126px;
	margin-left: 48px;
	vertical-align: middle;
	display: inline-block;
}


article{
	position: relative;
	width: 816px;
	margin: 0 auto 0 auto;
}

section.content-section {
	position: relative;
	display: block;
	padding: 0;
}
section.content-section h2 {
	width: 314px;
	height: 85px;
	line-height: 85px;
	margin-top: 0;
	margin-left: -74px;
	padding-left: 74px;
	background-color: #69d2dc;
	font-size: 26px;
	font-weight: normal;
	color: #fff;
	letter-spacing: 0.05em;
}


#sec-mission {
	padding: 100px 0;
	background-color: #37358d;
	width: 816px;
	overflow: visible;
}
#sec-mission h2 {
	margin-bottom: 93px;
}
#sec-mission .sec-block {
	display: block;
	width: 780px;
	background-color: #fff;
	right: -74px;
	margin-left: 74px;
	padding: 84px 108px 77px 108px;
}
#sec-mission .sec-block h3 {
	margin: 0;
	padding: 0;
	margin-bottom: 31px;
}
#sec-mission .sec-block h4 {
	margin: 0;
	padding: 0;
	line-height: 38px;
	font-size: 24px;
	color: #1c78eb;
	font-weight: normal;
	text-align: right;
	letter-spacing: 0.05em;
}
#sec-mission p {
	margin: 94px 0 65px 78px;
	padding: 0;
	line-height: 52px;
	font-size: 20px;
	color: #fff;
	font-weight: normal;
	text-align: left;
	letter-spacing: 0.02em;
}


#sec-member {
	padding: 100px 0;
	background-color: #fff;
	width: 816px;
	overflow: visible;
	z-index: 10;
	margin-top: -300px;
}
#sec-member h2 {
	margin-bottom: 93px;
}
#sec-member .sec-block {
	display: block;
	padding: 20px 0 130px 0;
}
#sec-member p {
	margin: 0px;
	padding: 0;
	line-height: 1.6;
	font-size: 9px;
	font-weight: normal;
	text-align: left;
	letter-spacing: 0.02em;
}

.block-angle-001 {
	display: block;
	width: 960px;
	height: 327px;
	background-color: #fff;
	margin-left: -72px;
}
.block-angle-002 {
	display: block;
	width: 960px;
	height: 620px;
	background-color: #e3edf7;
	margin-left: -72px;
	margin-top: -943px;
}
.block-angle-003 {
	display: block;
	width: 960px;
	height: 620px;
	background-color: #2982ec;
	margin-left: -72px;
	margin-top: -735px;
	padding-bottom: 790px;
}



#sec-company {
	padding: 100px 0;
	background-color: #fff;
	width: 816px;
	overflow: visible;
	z-index: 10;
	margin-top: 485px;
}
#sec-company h2 {
	margin-bottom: 93px;
}
#sec-company .sec-block {
	display: block;
	padding: 20px 0 130px 0;
}
#sec-company p {
	margin: 0px;
	padding: 0;
	line-height: 1.6;
	font-size: 9px;
	font-weight: normal;
	text-align: left;
	letter-spacing: 0.02em;
}

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<article id="post-<?php the_ID(); ?>" >

	<!--<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>-->
	<section class="content-section" id="sec-mission">
		<h2 class="prefade prefade-001">OLTAについて</h2>
		<div class="sec-block prefade prefade-002">
			<h3><img src="/wp/wp-content/themes/olta_corporate/images/img-h3-mission.png" alt="Credit Re:desing"></h3>
			<h4>あらゆる情報を信用に変え<br>あたらしい価値を創出する</h4>
		</div>
		<p>世界中の誰もが大量の情報に触れ、大量の情報を発信し、<br>さらにテクノロジーによってそれらの情報が整理されるようになった現在、<br>個人や企業の「信用」はさまざまな角度から評価できるようになりました。</p>
	</section><!-- .content #sec-mission -->

<div class="block-angle-001"></div>


	<section class="content-section" id="sec-member">
		<h2 class="">メンバー</h2>
		<div class="sec-block">
			<img src="/wp/wp-content/themes/olta_corporate/images/img-picture-sawashi.png" alt="CEO 澤㞴 優紀">
			<dl><dt>CEO</dt><dd>澤㞴 優紀</dd></dl>
			<p>世界中の誰もが大量の情報に触れ、大量の情報を発信し、<br>さらにテクノロジーによってそれらの情報が整理されるようになった現在、<br>個人や企業の「信用」はさまざまな角度から評価できるようになりました。</p>
		</div>
		<h2 class="">採用情報</h2>
		<div class="sec-block">
			<img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png" alt="CEO 澤㞴 優紀">
		</div>
	</section><!-- .content #sec-member -->

<div class="block-angle-002"></div>


	<section class="content-section" id="sec-company">
		<h2 class="">メンバー</h2>
		<div class="sec-block">
			<p>世界中の誰もが大量の情報に触れ、大量の情報を発信し、<br>さらにテクノロジーによってそれらの情報が整理されるようになった現在、<br>個人や企業の「信用」はさまざまな角度から評価できるようになりました。</p>
		</div>
	</section><!-- .content #sec-member -->

<div class="block-angle-003"></div>

</article><!-- #post-<?php the_ID(); ?> -->


<script>
$(document).ready(function(){
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
	$('.prefade-002').delay(1600).queue(function() {
		$(this).addClass("fadeAnime");
	});

});
</script>
