<?php
/**
 * Template part for displaying page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>


<article id="post-<?php the_ID(); ?>" >

	<section class="content-section" id="sec-about">
		<div class="sec-inner">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="sec-block prefade prefade-002">
				<h2><img src="/wp-content/themes/olta_corporate/images/txt-redesign.svg" alt="Credit Re:desing"></h2>
				<h3>あらゆる情報を信用に変え<br><span>あたらしい価値を創出する</span></h3>
			</div>
			<div class="sec-block-txt">
				<p>世界中の誰もが大量の情報に触れ、大量の情報を発信し、さらにテクノロジーによってそれらの情報が整理されるようになった現在、個人や企業の「信用」はさまざまな角度から評価できるようになりました。</p>
				<p>個人や企業の信用が正しく評価されることで、世界はもっとフェアになっていくと私たちは信じています。</p>
				<p>OLTAは、個人や企業を取り巻くあらゆる情報をテクノロジーの力で信用に変換し、ユーザーにとって新たな価値を創出します。</p>
			</div>
		</div>
	</section><!-- .content #sec-mission -->
	<section class="content-section" id="sec-member">
	<a id="sec-member-al"></a>
		<div class="sec-inner">
			<h2 class="clear">メンバー</h2>
			<div class="sec-member-wrap">

				<?php if( have_rows('members') ):?>
					<?php while( have_rows('members') ): the_row();
						// vars
						$t_img = get_sub_field('picture');
						$t_name = get_sub_field('name');
						$t_position = get_sub_field('position');
						$t_profile = get_sub_field('profile');
						?>

						<div class="sec-block fade">
							<?php if( $t_img ): ?><img src="<?php echo $t_img['url']; ?>" alt="<?php echo $t_name; ?>"><?php endif; ?>
							<dl>
								<dt><?php if( $t_name ): ?><?php echo $t_name; ?><?php endif; ?></dt>
								<dd><?php if( $t_position ): ?><?php echo $t_position; ?><?php endif; ?></dd>
							</dl>
							<p class="accordion_icon"><span></span><span></span></p>
							<div class="sec-block-txt">
								<p><?php if( $t_profile ): ?><?php echo $t_profile; ?><?php endif; ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section><!-- .content #sec-member -->

	<section class="content-section" id="sec-recruit">
		<div class="sec-inner">
			<h2 class="">採用情報</h2>
			<img src="/wp-content/themes/olta_corporate/images/img-recruit-pc.png" class="pc-disp" />
			<div class="sec-block fade">
				<div class="slide-block">
					<ul id="bxslide">
						<li><img src="/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
					</ul>
					<div class="custom-thumb">
						<a data-slide-index="0" href="#"><img src="/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="1" href="#"><img src="/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="2" href="#"><img src="/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="3" href="#"><img src="/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
					</div>
				</div>
				<a href="https://www.wantedly.com/companies/olta" class="link-btn fade" target="_blank">Wantedlyで詳しく見る<span class="pc-disp">&nbsp;></span></a>
			</div>
		</div>
	</section><!-- .content #sec-recruit -->

	<section class="content-section" id="sec-company">
		<div class="sec-inner">
			<h2 class="">会社概要</h2>
			<div class="sec-block fade">
				<dl>
					<?php if( have_rows('company') ):?>
						<?php while( have_rows('company') ): the_row();
							// vars
							$c_title = get_sub_field('title');
							$c_data = get_sub_field('data');
							?>
							<dt><?php if( $c_title ): ?><?php echo $c_title; ?><?php endif; ?></dt>
							<dd><?php if( $c_data ): ?><?php echo $c_data; ?><?php endif; ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					<dt>認証取得</dt>
					<dd><p><img src="/wp-content/themes/olta_corporate/images/img-iso.png"/><br><span>IS 688510 / ISO 27001</span></p></dd>
				</dl>
				<div id="map"></div>
			</div>
		</div>
	</section><!-- .content #sec-company -->

	<section class="content-section" id="sec-contact">
		<div class="sec-inner">
			<h2 class="">お問い合わせ</h2>
			<div class="sec-block fade">

				<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>

			</div>
		</div>
	</section><!-- .content #sec-contact -->

</article><!-- #post-<?php the_ID(); ?> -->
