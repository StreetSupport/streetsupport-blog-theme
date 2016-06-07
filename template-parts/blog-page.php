<?php
/*
Template Name: blog-page
*/
?>

<?php get_header(); ?>

<div class="block block--highlight">
	<div class="block__content">
		<div id="latest-news-posts" class="front-page__news container-cat-titles">
			<h1 class="h1">Recent Posts</h1>
			<div class="front-page__news-list">
				<?php
					$args = array( 'posts_per_page' => 6 );
					$lastposts = get_posts( $args );
					foreach ( $lastposts as $post ) :
					$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
				$posts = array();
				foreach ( $postlist as $post ) {
  				 $posts[] += $post->ID;
				}

				$current = array_search( get_the_ID(), $posts );
				$prevID = $posts[$current-1];
				$nextID = $posts[$current+1];
			
  				setup_postdata( $post ); ?>
				<?php 
				get_template_part( 'template-parts/content-blog-page-listings', 'page' );
				?>
				<?php endforeach; 
				wp_reset_postdata(); ?>
			</div>
			<div class="navigation">
			<?php if ( !empty( $prevID ) ): ?>
			<div class="alignleft">
			<a class="btn btn--brand-e" href="<?php echo get_permalink( $prevID ); ?>"
			  title="<?php echo get_the_title( $prevID ); ?>"><span class="btn__text">Previous</span></a>
			</div>
			<?php endif;
			if ( !empty( $nextID ) ): ?>
			<div class="alignright">
			<a class="btn btn--brand-e" href="<?php echo get_permalink( $nextID ); ?>" 
			 title="<?php echo get_the_title( $nextID ); ?>"><span class="btn__text">Next</span></a>
			</div>
			<?php endif; ?>
			</div><!-- .navigation -->
		</div>
	</div>
</div>

<div class="block block--offwhite">
	<div class="block__content recent-activity">
		<div id="latest-archives" class="front-page__archives container-cat-titles offwhite-frontpage">
			<h1 class="h1">Archives</h1>
			<div class="front-page__archive-list">
				<?php get_template_part( 'template-parts/content-front-page-archives', 'page' );
				 ?>
			</div>
		</div>
		<div id="latest-categories" class="front-page__categories container-cat-titles offwhite-frontpage">
			<h1 class="h1">Categories</h1>
			<div class="front-page__category-list">
				<?php get_template_part( 'template-parts/content-front-page-categories', 'page' );
				?>
			</div>
		</div>
		<div id="latest-comments" class="front-page__comments container-cat-titles offwhite-frontpage">
			<h1 class="h1">Recent Comments</h1>
			<div class="front-page__comments-list">
				<?php get_template_part( 'template-parts/content-front-page-comments', 'page' );
				 ?>
			</div>
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
