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
	<header class="entry-header news-latest-entry-header">
		<?php
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
      the_date('d/m/y', '<p class="small">Posted on: ', '</p>')
		?>
	</header>
</article>
