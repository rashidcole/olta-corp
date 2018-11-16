<?php
/**
 * Template part for displaying page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>


<form role="search" method="get" class="search-form" action="http://olta-corporate/">
				<label>
					<span class="screen-reader-text">検索:</span>
					<input type="search" class="search-field" placeholder="検索 &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="検索" />
			</form>



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

