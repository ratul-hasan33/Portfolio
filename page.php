<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

get_header();
?>


<section id="blogs_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
          <?php 
            if (have_posts()):
              while (have_posts()) : the_post();
          ?>
          <div class="blog_area"> 
            <div class="post_thumb">
              <h2><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail("post-thumbnails"); ?></a></h2>
            </div>

            <div class="post_details">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            </div>
          </div>
          <?php
            endwhile;
            else :
              _e('No post found');
            endif; ?>

      <div class="col-md-3">
				
      </div>
      </div>
      </div>
    </div>
  </div>
</section>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


<?php
get_footer();
