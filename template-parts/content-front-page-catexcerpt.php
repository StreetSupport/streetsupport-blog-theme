<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header cat-excerpt-entry-header">
		<?php
			the_title(
				'<h1 class="h1 main-image-block__heading">
					<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>
				</h1>'
			);
		?>

	</header>
</article>
