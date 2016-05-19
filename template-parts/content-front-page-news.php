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
		<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		?>
    <p><?php echo get_post_meta(get_the_ID(), 'front-page-snippet', true); ?></p>
    <p class="small front-page__news-item__meta">
      <span class="posted-on">Posted on: <?php echo the_time('d/m/y'); ?></span>
      <a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Read More</a>
    </p>
</article>
