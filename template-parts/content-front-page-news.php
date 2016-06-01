<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

?>

<article id="post-<?php the_ID(); ?>" class="front-page__news-item" <?php post_class(); ?>>
	<div class="background-center-cover front-page__news-item__news-image" style="background-image: url(http://www.lorempixel.com/400/400/);">
	<?php
		the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	?>
	</div>
    <p class="small front-page__news-item__meta">
      <span class="posted-on">
      	Posted by: <a href="" title="">Viv</a> on <a href="" title=""><?php echo the_time('d/m/y'); ?></a>
      </span>
      <!-- <a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Read More</a> -->
    </p>
    <p><?php echo get_post_meta(get_the_ID(), 'front-page-snippet', true); ?></p>
    <p class="front-page__news-item__snippet">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit...</p>
</article>
