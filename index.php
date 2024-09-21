<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 
 */

get_header();
?>





<section id="blogs_area">
	<div class="container">
		<div class="row d-flex justify-content-between align-content-center">
			<div class="col-md-8">
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
