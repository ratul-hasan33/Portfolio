
<?php


/*
 * Template Name: Contact_us
 */

get_header();

?>

<main>


<!-- Contact Us -->
<section id="contact_page">
  <div class="container text-center">
      <h2>Contact​</h2>
      <h5>Let's Talk About Ideas​</h5>
      <div class="row text-center pt-5">
        <div class="col-md-4  py-5">
          <img src="<?php echo get_theme_mod('contact_logo'); ?>" alt="">
          <h3>Md Ratul Hasan</h2>
          <h5>Web Developer (WordPress)</h5>
          <p>Are You Looking For Your Business Online Presence? I am here. 🙂</p>
          <div class="email_ad">
            <a href="mailto:<?php echo get_theme_mod('contact_Email_section'); ?>">
              <div class="row">
                <div class="col-4">
                  <div class="eml_icn"><i class="fa-solid fa-envelope"></i></div>
                </div>
                <div class="col-8">
                  <h3>Email</h3>
                  <p><?php echo get_theme_mod('contact_Email_section'); ?></p>
                </div>
              </div>
            </a> 
          </div>
        </div>

        <div class="col-md-8">
          <div class="contact_form_sc text-center" >
            <div class="contact_form_container">
              <?php echo do_shortcode('[wpforms id="271" title="false"]'); ?>
            </div>
          </div>
        </div>
        </div>
      
    </div>
  </div>
 </section>

 <div class="back_to_top"><i class="fa-solid fa-circle-arrow-up"></i></div>

 


</main>




<?php
get_footer();