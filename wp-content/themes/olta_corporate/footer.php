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
		<nav class="pc-navi-footer">
			<dl>
				<dt>会社情報</dt><dd><a href="/about/#sec-about">ミッション</a></dd><dd><a href="/about/#sec-company">会社概要</a></dd>
			</dl>
			<dl>
				<dt>サービス</dt><dd><a href="" target="_blank">OLTA クラウド<br>ファクタリング</a></dd>
			</dl>
			<dl>
				<dt>ニュース</dt><dd><a href="/news/">ニュース一覧</a></dd>
			</dl>
			<dl>
				<dt>採用情報</dt><dd><a href="https://www.wantedly.com/companies/olta" target="_blank">Wantedlyへ</a></dd>
			</dl>
			<dl>
				<dt>お問い合わせ</dt><dd><a href="/about/#sec-contact">お問い合わせ</a></dd>
			</dl>
		</nav>

		<nav class="sp-navi-footer">
			<?php if(is_page('about')): ?>
			<ul>
				<li class="parent"><a>会社情報<span></span><span></span></a>
					<ul>
						<li class="child"><a href="#sec-about">ミッション<span></span></a></li>
						<li class="child"><a href="#sec-company">会社概要<span></span></a></li>
					</ul>
				</li>
				<li class="child"><a href="/#sec-service">サービス<span></span></a></li>
				<li class="child"><a href="/news/">ニュース<span></span></a></li>
				<li class="child"><a href="#sec-recruit">採用情報<span></span></a></li>
				<li class="child"><a href="#sec-contact">お問い合わせ<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/privacy/" target="_blank">プライバシーポリシー<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/security/" target="_blank">情報セキュリティ方針<span></span></a></li>
			</ul>
			<?php elseif (is_page('index')): ?>
			<ul>
				<li class="parent"><a>会社情報<span></span><span></span></a>
					<ul>
						<li class="child"><a href="/about/#sec-about">ミッション<span></span></a></li>
						<li class="child"><a href="/about/#sec-company">会社概要<span></span></a></li>
					</ul>
				</li>
				<li class="child"><a href="#sec-service">サービス<span></span></a></li>
				<li class="child"><a href="/news/">ニュース<span></span></a></li>
				<li class="child"><a href="/about/#sec-recruit">採用情報<span></span></a></li>
				<li class="child"><a href="/about/#sec-contact">お問い合わせ<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/privacy/" target="_blank">プライバシーポリシー<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/security/" target="_blank">情報セキュリティ方針<span></span></a></li>
			</ul>
			<?php else: ?>
			<ul>
				<li class="parent"><a>会社情報<span></span><span></span></a>
					<ul>
						<li class="child"><a href="/about/#sec-about">ミッション<span></span></a></li>
						<li class="child"><a href="/about/#sec-company">会社概要<span></span></a></li>
					</ul>
				</li>
				<li class="child"><a href="/#sec-service">サービス<span></span></a></li>
				<li class="child"><a href="/news/">ニュース<span></span></a></li>
				<li class="child"><a href="/about/#sec-recruit">採用情報<span></span></a></li>
				<li class="child"><a href="/about/#sec-contact">お問い合わせ<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/privacy/" target="_blank">プライバシーポリシー<span></span></a></li>
				<li class="child"><a href="https://www.olta.co.jp/policy/security/" target="_blank">情報セキュリティ方針<span></span></a></li>
			</ul>
			<?php endif; ?>
		</nav>

		<div class="site-info">
			<ul class="pc-disp">
				<li><a href="https://www.olta.co.jp/policy/privacy/" target="_blank">プライバシーポリシー</a></li>
				<li><a href="https://www.olta.co.jp/policy/security/" target="_blank">情報セキュリティ方針</a></li>
				<li>&copy; <?php echo date(Y); ?> OLTA Inc.</li>
			</ul>
			<div class="sp-disp">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><img src="/wp-content/themes/olta_corporate/images/logo.svg" alt="olta"></a>
				<p>&copy; <?php echo date(Y); ?> OLTA, Inc.</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGWAafGwNZHaJFafGtet9kBpmDErDfBXE&callback=initMap"
    async defer></script>
</body>
</html>
