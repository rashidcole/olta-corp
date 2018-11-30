<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 	<header class="entry-header">
		<h1 class="archive_title">ニュース</h1>
	</header> --><!-- .entry-header -->

	<?php olta_corporate_post_thumbnail(); ?>

	<div class="entry-content">

		<section class="content-section" id="sec-news">
			<div class="sec-inner">
				<h1 class="pc-disp"><?php the_title(); ?></h1>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
						$cat = get_the_category();
						$catName = $cat[0]->name;
					?>
					<span class="post-date"><?php the_time( 'Y.m.d' ); ?></span>
					<span class="post-category"><?php echo $catName; ?></span>
<h1 class="sp-disp"><?php the_title(); ?></h1>
					<ul class="sns-btn pc-disp">
						<?php
						  $url_encode=urlencode(get_permalink());
						  $title_encode=urlencode(get_the_title());
						?>
							<li class="fb">
							<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" class="naifix-sns-button"><i class="fas fa-thumbs-up"></i>いいね！</a><?php if(function_exists('scc_get_share_facebook')): ?><span class="sns-counter"><?php echo scc_get_share_facebook() ?></span><?php endif; ?></li>
							<li class="tw">
							<a href="http://twitter.com/share?text=<?php echo $title_encode ?>&url=<?php echo $url_encode ?>&tw_p=tweetbutton&via=<?php the_author_meta('twitter'); ?>&related=<?php the_author_meta('twitter'); ?>" class="naifix-sns-button"><i class="fab fa-twitter"></i>ツイート</a><?php if(function_exists('scc_get_share_twitter')): ?><span class="sns-counter"><?php echo scc_get_share_twitter() ?></span><?php endif; ?></li>
							<li class="hb">
							<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" class="naifix-sns-button"><span>Ｂ!</span>ブックマーク</a><?php if(function_exists('scc_get_share_hatebu')): ?><span class="sns-counter"><?php echo scc_get_share_hatebu() ?></span><?php endif; ?></li>
						</ul>

					<section>

								<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'olta_corporate' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'olta_corporate' ),
									'after'  => '</div>',
								) );
								?>


							<ul class="sns-btn sp-disp">
							<?php
							  $url_encode=urlencode(get_permalink());
							  $title_encode=urlencode(get_the_title());
							?>
								<li class="fb">
								<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" class="naifix-sns-button"><i class="fas fa-thumbs-up"></i>いいね！</a><?php if(function_exists('scc_get_share_facebook')): ?><span class="sns-counter"><?php echo scc_get_share_facebook() ?></span><?php endif; ?></li>
								<li class="tw">
								<a href="http://twitter.com/share?text=<?php echo $title_encode ?>&url=<?php echo $url_encode ?>&tw_p=tweetbutton&via=<?php the_author_meta('twitter'); ?>&related=<?php the_author_meta('twitter'); ?>" class="naifix-sns-button"><i class="fab fa-twitter"></i>ツイート</a><?php if(function_exists('scc_get_share_twitter')): ?><span class="sns-counter"><?php echo scc_get_share_twitter() ?></span><?php endif; ?></li>
								<li class="hb">
								<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" class="naifix-sns-button"><span>Ｂ!</span>ブックマーク</a><?php if(function_exists('scc_get_share_hatebu')): ?><span class="sns-counter"><?php echo scc_get_share_hatebu() ?></span><?php endif; ?></li>
							</ul>
					</section>

				</article><!-- #post-<?php the_ID(); ?> -->

	<div class="post-navigation">
		<?php 
		if (get_previous_post()): ?>
			<?php previous_post_link('%link', '&lt; 前のニュースへ'); ?>
		<?php 
		endif;
		if (get_next_post()): ?>
			<?php next_post_link('%link', '次のニュースへ &gt;'); ?>
		<?php 
		endif; 
		?>
		<a href="/news/">ニュース一覧</a>
	</div>


			</div>
		</section><!-- .content #sec-news -->

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
