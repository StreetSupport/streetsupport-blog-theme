<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

$postCount = 0;


if ( is_single() ) {
  $category = get_the_category();
?>
<header class="page-header">
	<div class="block__content">
			<h4 class="page-title">
				<a href="https://streetsupport.net">Home</a> &gt; 
				<a href="<?php echo get_site_url(); ?>">News</a> &gt;
				<a href="<?php echo get_site_url(); ?>/category/<?php echo $category[0]->slug; ?>"><?php echo $category[0]->name; ?></a> &gt;
				<?php echo single_post_title(); ?>
			</h4>
	</div>
</header>
<?php } ?>
<div class="block__content inner-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
				the_title( '<h2 class="h2 post__heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
    		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'archive-listing', false, '' );

            if($src[0]) {
            ?>
            <a class="archive__image-link" href="<?php echo esc_url( get_permalink() ) ?>">
            <img src="<?php echo $src[0]; ?>" alt="" class="archive__image" /></a>
            <?php
            }

   	 		the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ssnblog' ),
				'after'  => '</div>',
				) );
				?>
		</div><!-- .entry-content -->

		<?php
		if ( 'post' === get_post_type() ) : ?>

		<div class="info-container">

			<div class="entry-meta">
				<?php ssnblog_entry_footer(); ?>
				<?php ssnblog_posted_on(); ?>
			</div><!-- .entry-meta -->

			<div class="social-share">
				<span class="social-share__text">Share this page: </span>
				<a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="streetsupportuk" data-dnt="true"></a>
				<div class="fb-share-button" data-layout="button"></div>
			</div>
		<?php
		endif; ?>
	</article>
</div>