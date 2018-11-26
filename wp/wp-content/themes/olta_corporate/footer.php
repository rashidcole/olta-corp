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

		<div class="sp-disp"><?php dynamic_sidebar('フッター１'); ?></div>


		<div class="site-info">
			<ul class="pc-disp">
				<li><a href="http://olta-corporate/policy/">プライバシーポリシー</a></li>
				<li><a href="http://olta-corporate/security/">情報セキュリティ方針</a></li>
				<li>&copy; <?php echo date(Y); ?> OLTA Inc. All Rights Reserved.</li>
			</ul>

			<p class="sp-disp">&copy; <?php echo date(Y); ?> OLTA Inc. All Rights Reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqAEhTSdjmV61OfpswgG5T-lfMa2wdSRA&callback=initMap"
    async defer></script>
</body>
</html>
