<?php
/**
 * Template part for displaying page content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OLTA_CORPORATE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$cat = get_the_category();
		$catName = $cat[0]->name;
	?>
	<span class="post-date"><?php the_time( 'Y.m.d' ); ?></span>
	<span class="post-category"><?php echo $catName; ?></span>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="accordion_icon"><span></span><span></span></p>
	<section><?php the_excerpt(); ?><p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p></section>
</article><!-- #post-<?php the_ID(); ?> -->