<?php
/*
Template Name: front-page
*/
?>

<?php get_header(); ?>

<div class="block__content">
	<div id="latest-stories-posts" class="container-post-excerpt">
		<h3>Latest Story</h3>
		<?php query_posts('category_name=stories&showposts=1');
		while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
		endwhile; ?>
	</div>

	<div id="latest-about-homelessness-posts" class="container-post-excerpt">
		<h3>About Homelessness</h3>
		<?php query_posts('category_name=about-homelessness&showposts=1');
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
		endwhile; ?>
	</div>
</div>

<div class="block block--highlight">
	<div class="block__content">
		<div id="latest-news-posts" class="front-page__news container-cat-titles">
			<h1 class="h1">Latest News</h1>
			<div class="front-page__news-list">
				<?php query_posts('category_name=news&showposts=3');
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-front-page-news', 'page' );
				endwhile; ?>
			</div>
			<a href="<?php echo get_site_url (); ?>/category/news" class="btn btn--brand-d"><span class="btn__text">Read All</span></a>
		</div>
	</div>
</div>

<div class="block block--offwhite">
	<div class="block__content">
		<div id="latest-archives" class="front-page__archives container-cat-titles">
			<h1 class="h1">Archives</h1>
			<div class="front-page__archive-list">
				<?php get_template_part( 'template-parts/content-front-page-archives', 'page' );
				 ?>
			</div>
		</div>
		<div id="latest-categories" class="front-page__categories container-cat-titles">
			<h1 class="h1">Categories</h1>
			<div class="front-page__category-list">
				<?php get_template_part( 'template-parts/content-front-page-categories', 'page' );
				?>
			</div>
		</div>
		<div id="latest-comments" class="front-page__comments container-cat-titles">
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
