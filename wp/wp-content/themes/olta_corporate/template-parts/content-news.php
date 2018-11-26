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
	<section>
		<div class="pc-disp"><?php the_excerpt(); ?></div>
		<div class="sp-disp">
			<ul class="sns-btn">
			<?php the_content(); ?>
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
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->