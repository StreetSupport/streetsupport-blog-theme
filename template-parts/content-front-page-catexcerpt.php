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
				the_title( '<h4 class="entry-title cat-excerpt-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				the_post_thumbnail( 'thumbnail');

				the_content( 
					sprintf(
						/* translators: %s: Name of current post. */
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) 
				);
		?>
    <p class="small front-page__news-item__meta">
      <span class="posted-on">Posted on: <?php echo the_time('d/m/y'); ?></span>
      <a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Read More</a>
    </p>
	</header>
</article>
