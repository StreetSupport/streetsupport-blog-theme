<?php
/*
Template Name: front-page-leeds
*/
?>

<?php get_header(); ?>

<header class="page-header">
	<div class="block__content">
			<h4 class="page-title">
				<a href="https://streetsupport.net">Home</a> &gt; Leeds News
			</h4>
	</div>
</header>
<div class="block__content">
  <?php query_posts('category_name=stories&tag=leeds&showposts=1');
    while ( have_posts() ) : the_post();
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    endwhile;
  ?>
  	<div class="main-image-block" style="background-image: url(<?php echo $src[0]; ?> ) !important;">
      <div id="latest-stories-posts" class="container-post-excerpt">

			<div class="text-wrap-div">
				<h3><a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Latest Leeds Story</a></h3>
				<?php get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
        ?>
			</div>

			<a class="main-image-block__more-link" href="<?php echo get_site_url(); ?>/category/stories/?tag=leeds">More Leeds Stories</a>
		</div>
	</div>
	<?php query_posts('category_name=articles&tag=leeds&showposts=1');
		while ( have_posts() ) : the_post();
		  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		endwhile;
	?>
	<div class="main-image-block" style="background-image: url(<?php echo $src[0]; ?> ) !important;">
		<div id="latest-about-homelessness-posts" class="container-post-excerpt">
			<div class="text-wrap-div">
				<h3><a class="read-more" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Leeds Articles</a></h3>
				<?php get_template_part( 'template-parts/content-front-page-catexcerpt', 'page' );
        ?>
			</div>

			<a class="main-image-block__more-link" href="<?php echo get_site_url(); ?>/category/articles/?tag=leeds">More Leeds Articles</a>
		</div>
	</div>
</div>

<div class="block block">
	<div class="block__content">
		<div id="latest-news-posts" class="front-page__news">
			<h1 class="h1 front-page__news-heading">Latest Leeds News</h1>
			<div class="front-page__news-list">
				<?php query_posts('category_name=latest-news&tag=leeds&showposts=3');
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-front-page-news', 'page' );
				endwhile;
        ?>
			</div>

			<a href="<?php echo get_site_url (); ?>/category/latest-news/?tag=leeds" class="btn btn--brand-e"><span class="btn__text">Read More Leeds News Stories</span></a>
		</div>
	</div>
</div>

<div class="block block--offwhite">
	<div class="block__content recent-activity js-accordion">
		<div id="latest-comments" class="front-page__comments container-cat-titles offwhite-frontpage accordion__item">
			<h1 class="h1 js-header footer-menu__heading">Subjects</h1>
			<div class="front-page__comments-list js-item accordion__inner">
				<?php get_template_part( 'template-parts/content-front-page-tags', 'page' );
        ?>
			</div>
		</div>
		<div id="latest-categories" class="front-page__categories container-cat-titles offwhite-frontpage accordion__item">
			<h1 class="h1 js-header footer-menu__heading">Categories</h1>
			<div class="front-page__category-list js-item accordion__inner">
				<?php get_template_part( 'template-parts/content-front-page-categories', 'page' );
				?>
			</div>
		</div>
		<div id="latest-archives" class="front-page__archives container-cat-titles offwhite-frontpage accordion__item">
			<h1 class="h1 js-header footer-menu__heading">Archive</h1>
			<div class="front-page__archive-list js-item accordion__inner">
				<?php get_template_part( 'template-parts/content-front-page-archives', 'page' );
        ?>
			</div>
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
