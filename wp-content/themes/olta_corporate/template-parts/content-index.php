<?php
/**
 * Template part for displaying page content in page-index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>

<article id="post-<?php the_ID(); ?>" class="">

	<section class="content-section" id="sec-hero">
		<div id="img-ceo"><img src="/wp-content/themes/olta_corporate/images/CEO.png" alt=""></div>
		<div id="img-sun"><img src="/wp-content/themes/olta_corporate/images/Sun.png" alt=""></div>
		<div id="img-birds"><img src="/wp-content/themes/olta_corporate/images/Birds.png" alt=""></div>
		<div class="sec-inner">
			<h1 class="prefade prefade-001">会社経営を<br><em>ハックする</em><br><span><img src="/wp-content/themes/olta_corporate/images/main-title.svg" alt="olta"></span></h1>

		</div>
	</section><!-- .content #sec-hero -->

	<section class="content-section" id="sec-mission">
		<div class="sec-inner">
			<h2 class="">ミッション</h2>
			<h3 class="fade"><img src="/wp-content/themes/olta_corporate/images/txt-redesign.svg" alt="Credit Re:design"></h3>
			<h4>あらゆる情報を信用に変え<br class="sp-disp"><span>あたらしい価値を創出する</span></h4>
			<a href="./about/" class="link-btn fade">OLTAについて<span class="pc-disp">&nbsp;></span></a>
		</div>
	</section><!-- .content #sec-mission -->

	<section class="content-section" id="sec-service">
		<div class="sec-inner">
			<h2 class="">サービス</h2>
			<h3 class="fade">OLTA<br class="sp-disp">クラウドファクタリング</h3>
			<h4>請求書が売れる。<br>「借りない」資金調達ができる日本初の<br class="pc-disp">オンライン完結型のファクタリングサービスです。</h4>
			<div class="reverse">
				<img src="/wp-content/themes/olta_corporate/images/img-service-device.png" alt="" id="img-service-device" class="fade">
				<p class="fade">30秒で知るOLTAクラウドファクタリング</p>
				<div class="movie-wrap fade"><video id="video" src="/wp-content/themes/olta_corporate/videos/introduction.mp4" controls></video></div>
			</div>
			<a href="" class="link-btn fade">もっと詳しく<span class="pc-disp">&nbsp;></span></a>
		</div>
	</section><!-- .content #sec-service -->

	<section class="content-section" id="sec-commingsoon">
		<div class="sec-inner">
			<h3 class="fade">Coming soon</h3>
			<h4>「会社経営をハックする」プロダクトを他にも開発中です。<br class="pc-disp">最新情報にご期待ください。</h4>
		</div>
	</section><!-- .content #sec-commingsoon -->

	<section class="content-section" id="sec-news">
		<div class="sec-inner">
			<h2 class="">ニュース</h2>

			<?php
			  $args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3
			  );
			  $st_query = new WP_Query( $args );
			?>
			<?php if ( $st_query->have_posts() ): ?>
			  <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>

			<?php
			$cat = get_the_category(); // 情報取得
			$catName = $cat[0]->name; // 名称取得
			?>

			<article class="fade">
				<span class="post-date"><?php the_time('Y.m.d'); ?></span>
				<span class="post-category"><?php echo $catName; ?></span>
				<h3 class="accordion_text"><?php the_title(); ?></h3>
				<p class="accordion_icon"><span></span><span></span></p>
				<section><?php the_excerpt(); ?></section>
			</article>

			<?php endwhile; ?>
			<?php else: ?>
			  <p>新しい記事はありません</p>
			<?php endif; ?>

			<a href="./news/" class="link-btn news-link fade">ニュース一覧<span class="pc-disp">&nbsp;></span></a>

		</div>
	</section><!-- .content #sec-service -->

</article><!-- #post-<?php the_ID(); ?> -->
