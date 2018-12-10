<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package OLTA_CORPORATE
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="sec-inner">
					<h1 class="page-title"><?php esc_html_e( 'お探しのページが見つかりませんでした。', 'olta_corporate' ); ?></h1>
				</div>

				<div class="page-content">   　

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
