<?php


/*
 * Template Name: Blogs Page
 */


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

            <div id="page_nav">
              <?php if ('hasan_pagenav') {hasan_pagenav(); } else{ ?>
                  <?php next_post_link( ); ?>
                  <?php previous_post_link(); ?>
              <?php } ?>
            </div>
			        
      



