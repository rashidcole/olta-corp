<?php
/**
 * OLTA CORPORATE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OLTA_CORPORATE
 */

if ( ! function_exists( 'olta_corporate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function olta_corporate_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on OLTA CORPORATE, use a find and replace
		 * to change 'olta_corporate' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'olta_corporate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'olta_corporate' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'olta_corporate_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'olta_corporate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function olta_corporate_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'olta_corporate_content_width', 640 );
}
add_action( 'after_setup_theme', 'olta_corporate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function olta_corporate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'olta_corporate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'olta_corporate' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name' => 'フッター１',
		'id'            => 'footer-1',
		'before_widget' => '',
		'after_widget'  => '',
	));
}
add_action( 'widgets_init', 'olta_corporate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function olta_corporate_scripts() {
	/*wp_enqueue_style( 'olta_corporate-style', get_stylesheet_uri() );*/

	wp_enqueue_script( 'olta_corporate-common', get_template_directory_uri() . '/common.min.js', array(), '20181109', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'olta_corporate_scripts' );

function my_mynify_css(){
	$minify_file_uri  = get_stylesheet_directory_uri() . '/style.min.css';
	$file = $minify_file_uri;
	wp_enqueue_style( 'my-minify-style', $file );
}

function my_scripts() {
 my_mynify_css();
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// 固定ページにタグを設定
function add_tag_to_page() {
 register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_tag_to_page');


/* インラインスタイル削除 */
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

// ID を削除する
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){
	return $id = array();
}

// 絵文字のやつ削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

//カスタムメニューのliのclassを削除
add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );
function my_custom_nav( $classes, $item ) {
	// $classes を空にする前にカスタムクラスを変数へ入れておく
	if( !empty( $classes[0] ) ){
		$custom_class = esc_attr( $classes[0] );
	}
	$classes = array();
	if( $item -> current == true ) {
		$classes[] = 'current';
	}
	// 先に変数に入れておいたカスタムクラス名を配列へ入れる
	if( !empty( $custom_class ) ){
		$classes[] = $custom_class;
	}
	return $classes;
}


// bodyにクラス（スラッグ）を追加
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
	if ( is_page() ) {
		$page = get_post( get_the_ID() );
		$classes[] = $page->post_name;
	}
	return $classes;
}



// Read more
function new_excerpt_mblength($length) {
	 return 95;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
function new_excerpt_more($more) {
	return '...<a class="readmore" href="'. esc_url( get_permalink() ) . '">' . 'Read more' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
function my_posy_search($search) {
	if(is_search()) {
		$search .= " AND post_type = 'post'";
	}
  return $search;
}
add_filter('posts_search', 'my_posy_search');



/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['label'] = 'ニュース';
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('',false);
	} elseif (is_tag()) {
		$title = single_tag_title('',false);
	} elseif (is_tax()) {
		$title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
		$title = get_the_time('Y年n月');
	} elseif (is_search()) {
		$title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
		$title = '「404」ページが見つかりません';
	} else {

	}
	return $title;
});


//svg
function my_ext2type($ext2types) {
	array_push($ext2types, array('image' => array('svg', 'svgz')));
	return $ext2types;
}
add_filter('ext2type', 'my_ext2type');

function my_mime_types($mimes){
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'my_mime_types');

function my_mime_to_ext($mime_to_ext) {
	$mime_to_ext['image/svg+xml'] = 'svg';
	return $mime_to_ext;
}
add_filter('getimagesize_mimes_to_exts', 'my_mime_to_ext');