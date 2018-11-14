<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OLTA_CORPORATE
 */

?>
	<?php get_template_part('inc/submenu'); ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php dynamic_sidebar('フッター１'); ?>


		<div class="site-info">
			<p>&copy; <?php echo date(Y); ?> OLTA Inc. All Rights Reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
