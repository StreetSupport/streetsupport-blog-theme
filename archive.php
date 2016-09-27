<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

		<header class="page-header">
			<div class="block__content">
			<?php
				the_archive_title( '<h4 class="page-title">', '</h4>' );
			?>
			</div>
		</header><!-- .page-header -->
		<div class="block__content">
            <div class="block__content inner-content">
                <h1 class="h1 archive__heading"><?php echo get_the_archive_categoryOrTagName(); ?></h1>
            </div>
			<?php
			/* Start the Loop */
			$postCount = 0;
			while ( have_posts() ) : the_post();
				if($postCount > 0) : ?>
				<div id="post-divider">
					<span class="divider"><span class="divider__line"></span>
					<span class="divider__background">
						<img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" id="logo" alt="street support logo"></span></span>
					</div>
<?php
				endif;
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-archive-listing', get_post_format() ); 
				$postCount++;

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


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
