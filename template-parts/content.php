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

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Read more %s <span class="meta-nav">&rarr;</span>', 'ssnblog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ssnblog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( 'post' === get_post_type() ) : ?>

<div class ="info-container">

	<div class="entry-meta">
			<?php ssnblog_entry_footer(); ?>
		<?php ssnblog_posted_on(); ?>
	</div><!-- .entry-meta -->

	<div class="social-share">
  <span class="social-share__text">Share this page: </span>
  <a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="streetsupportuk" data-dnt="true"></a>
  <div class="fb-share-button" data-layout="button"></div>
</div>


	<div id="post-divider">
<span class="divider"><span class="divider__line"></span>
<span class="divider__background">
	<img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" id="logo" alt="street support logo"></span></span>
	</div>
	<?php
	endif; ?>
</article>
