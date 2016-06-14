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
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>
	<a href="<?php echo esc_url( get_permalink() ) ?>">
	<div class="front-page__news-item__news-image" style="background-image: url(<?php echo $src[0]; ?> ) !important;">
		<?php
			the_title( '<h3 class="entry-title">', '</h3>' );
		?>
	</div>
	<div class="news-spacing">
	    <p><?php echo get_post_meta(get_the_ID(), 'front-page-snippet', true); ?></p>
	    <p class="small front-page__news-item__meta">
	      <span class="posted-on">Posted on <?php echo the_time('d/m/y'); ?></span>
	    </p>
	</div>
	</a>
</article>




