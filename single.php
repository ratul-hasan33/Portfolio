<?php
/**
 * The template for displaying all single posts
 
 */

get_header();
?>


<section id="blogs_area">
  <div class="container">
	 <div class="row d-flex justify-content-between">
	   <div class="col-md-8">
				<div class="post_details">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</div>
        </div>
      <div class="col-md-3">
				<div class="blog_sidebar">
					<?php
						get_sidebar();
					?>
      </div>
				</div>
      </div>
    </div>
  </div>
</section>

	<main id="primary" class="site-main">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ecommerce' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ecommerce' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
