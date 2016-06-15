<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ssnblog
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="page-header">
			<div class="block__content">
				<h4 class="page-title">
					<a href="https://streetsupport.net">Home</a> &gt; 
					Page not Found
				</h4>
			</div>
		</header>

		<div class="block__content inner-content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="h1 post__heading">That page could not be found</h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Why not try one of the links below?', 'ssnblog' ); ?></p>

					<div class="widget widget--categories">
						<h3 class="widget__title"><?php esc_html_e( 'Most Used Categories', 'ssnblog' ); ?></h3>
						<ul class="widget__list">
						<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 0,
							'title_li'   => '',
							'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->
				</div><!-- .page-content -->
			</article><!-- .error-404 -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php	get_footer();
