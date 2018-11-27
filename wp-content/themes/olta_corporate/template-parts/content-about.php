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
				<h2><img src="/wp/wp-content/themes/olta_corporate/images/txt-redesign.svg" alt="Credit Re:desing"></h2>
				<h3>あらゆる情報を信用に変え<br>あたらしい価値を創出する</h3>
			</div>
			<div class="sec-block-txt">
				<p>世界中の誰もが大量の情報に触れ、大量の情報を発信し、さらにテクノロジーによってそれらの情報が整理されるようになった現在、個人や企業の「信用」はさまざまな角度から評価できるようになりました。</p>
				<p>個人や企業の信用が正しく評価されることで、世界はもっとフェアになっていくと私たちは信じています。</p>
				<p>OLTAは、個人や企業を取り巻くあらゆる情報をテクノロジーの力で信用に変換し、ユーザーにとって新たな価値を創出します。</p>
			</div>
		</div>
	</section><!-- .content #sec-mission -->

	<section class="content-section" id="sec-member">
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
							<?php if( $t_img ): //リンク先のデータがあれば表示する ?><img src="<?php echo $t_img['url']; ?>" alt="<?php echo $t_name; ?>"><?php endif; ?>
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
			<img src="/wp/wp-content/themes/olta_corporate/images/img-recruit-pc.png" class="pc-disp" />
			<div class="sec-block fade">
				<div class="slide-block">
					<ul id="bxslide">
						<li><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
						<li><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png" /></li>
					</ul>
					<div class="custom-thumb">
						<a data-slide-index="0" href="#"><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="1" href="#"><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="2" href="#"><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
						<a data-slide-index="3" href="#"><img src="/wp/wp-content/themes/olta_corporate/images/img-recruit.png"/></a>
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
					<dt>会社名</dt>
					<dd>OLTA株式会社</dd>
					<dt>設立</dt>
					<dd>2017年4月14日</dd>
					<dt>代表者</dt>
					<dd>代表取締役CEO 澤岻 優紀</dd>
					<dt>事業内容</dt>
					<dd>クラウドファクタリング事業、<br>与信モデルの企画・開発・提供</dd>
					<dt>資本金</dt>
					<dd>5億1,100万円（資本準備金含む）</dd>
					<dt>取引金融機関</dt>
					<dd>三菱UFJ銀行、みずほ銀行、三井住友銀行、<br>住信SBIネット銀行</dd>
					<dt>顧問弁護士</dt>
					<dd>鈴木由里弁護士（渥美坂井法律事務所）</dd>
					<dt>住所</dt>
					<dd>〒107-0062　東京都港区南青山一丁目15番41号<br>QCcube南青山115ビル 3階</dd>
					<dt>認証取得</dt>
					<dd><p><img src="/wp/wp-content/themes/olta_corporate/images/img-iso.png"/><br><span>ISO 27001 / IS 688510</span></p></dd>
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