<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
				while ( have_posts() ) :
					the_post();
					if(is_page('index')):
						get_template_part( 'template-parts/content', 'index' );
					elseif(is_page('about')):
						get_template_part( 'template-parts/content', 'about' );
					elseif(is_page('news')):
						get_template_part( 'template-parts/content', 'news' );
					else:
						get_template_part( 'template-parts/content', 'page' );
					endif;
				endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
