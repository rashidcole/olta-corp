<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OLTA_CORPORATE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" href="/android-touch-icon.png" sizes="192x192">
<?php wp_head(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><img src="/wp-content/themes/olta_corporate/images/logo.svg" alt="olta"></a>
		<nav id="site-navigation" class="main-navigation">
			<button id="menu-toggle" ><span id="menu-toggle-icon"></span></button>
			<div id="primary-menu" class="menu">
				<?php if(is_page('about')): ?>
				<ul>
					<li><a href="#sec-about">ミッション</a></li>
					<li><a href="/#sec-service">サービス</a></li>
					<li><a href="#sec-member-al">メンバー</a></li>
					<li><a href="#sec-recruit">採用情報</a></li>
					<li><a href="/news/">ニュース</a></li>
					<li><a href="#sec-company">会社概要</a></li>
					<li><a href="#sec-contact">お問い合わせ</a></li>
				</ul>
				<?php elseif (is_page('index')): ?>
				<ul>
					<li><a href="/about/#sec-about">ミッション</a></li>
					<li><a href="#sec-service">サービス</a></li>
					<li><a href="/about/#sec-member-al">メンバー</a></li>
					<li><a href="/about/#sec-recruit">採用情報</a></li>
					<li><a href="/news/">ニュース</a></li>
					<li><a href="/about/#sec-company">会社概要</a></li>
					<li><a href="/about/#sec-contact">お問い合わせ</a></li>
				</ul>
				<?php else: ?>
				<ul>
					<li><a href="/about/#sec-about">ミッション</a></li>
					<li><a href="/#sec-service">サービス</a></li>
					<li><a href="/about/#sec-member-al">メンバー</a></li>
					<li><a href="/about/#sec-recruit">採用情報</a></li>
					<li><a href="/news/">ニュース</a></li>
					<li><a href="/about/#sec-company">会社概要</a></li>
					<li><a href="/about/#sec-contact">お問い合わせ</a></li>
				</ul>
				<?php endif; ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
