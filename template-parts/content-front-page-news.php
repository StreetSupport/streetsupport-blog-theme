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
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		?>
    <p class="small">Posted on: <?php echo the_time('d/m/y'); ?></p>
    <p><?php echo get_post_meta(get_the_ID(), 'front-page-snippet', true); ?></p>
    <p><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Read More</a></p>
</article>
