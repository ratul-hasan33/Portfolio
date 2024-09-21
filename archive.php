<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>




	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->


<section id="blogs_area">
	<div class="container">
		<div class="row d-flex justify-content-between align-content-center">
			<div class="col-md-8">

				<div id="archive_title"><?php the_archive_title('<h1>','</h1>') ?></div>

					<?php get_template_part( 'template-parts/blog_setup'); ?>
			</div>
			<div class="col-md-3">
				<div class="blog_sidebar">
					<?php
						get_sidebar();
					?>
			</div>
		</div>
	</div>
</section>  

<?php
get_footer();
