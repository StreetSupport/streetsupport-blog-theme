<?php
/*
Template Name: front-page
*/
?>

<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->
<div class="block__content">


	<div id="latest-news-posts" class="container-cat-titles">
		<h3>Latest news</h3>

		<?php query_posts('category_name=news&showposts=3');
		while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content-front-page-news', 'page' );
			endwhile; // End of the loop.
			?>
		</div>

		<div id="latest-stories-posts" class="container-post-excerpt">
			<h3>Latest stories</h3>
			<?php query_posts('category_name=stories&showposts=1');
			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
			endwhile; // End of the loop.
			?>
		</div>

		<div id="latest-about-homelessness-posts" class="container-post-excerpt">
			<h3>About Homelessness</h3>
			<?php query_posts('category_name=about-homelessness&showposts=1');
			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
			endwhile; // End of the loop.
			?>
		</div>
	</div>


	<?php
	get_sidebar();
	get_footer();
