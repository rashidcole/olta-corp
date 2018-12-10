<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

		  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		  query_posts( $query_string.'&posts_per_page=5&paged='.$paged);

		if ( have_posts() ) : ?>

			<header class="entry-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header>
			<section class="content-section" id="sec-news">
				<div class="sec-inner">
					<!-- <form role="search" method="get" class="search-form" action="http://olta-corporate/">
						<label>
							<span class="screen-reader-text">検索:</span>
							<input type="search" class="search-field" placeholder="ニュースを検索できます" value="" name="s" />
						</label>
						<input type="submit" class="search-submit fas" value="&#xf002;" />
					</form> -->
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'news', get_post_type() );

					endwhile;
					/*the_posts_navigation();*/
					wp_pagenavi();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
				</div>
			</section><!-- .content #sec-news -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
