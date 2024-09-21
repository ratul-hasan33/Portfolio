<?php


/*
 * Template Name: Portfolio
 */

get_header();

?>

<main>

<!-- Hero Section -->
 <section id="hero_area">
  <div class="container">
    <div class="row">
      <div id="hero_details" class="col-md-6 pt-3 text-center text-md-start  order-1 order-md-0">
        <h5><?php echo get_field('hero_text'); ?></h5>
        <h2><?php echo get_field('hero_name'); ?></h2>
        <h6><?php echo get_field('hero_textarea'); ?></h6>
        <button class="con_btn"><a href="#">Contact Us</a></button>
      </div>
      <div id="hero_img" class="col-md-6  d-flex align-items-center justify-content-center">
        <div class="hero_img_d">
          <?php $hero_img = get_field('hero_img');
            if( !empty($hero_img) ): ?>
            <img src="<?php echo $hero_img['url']; ?>" alt="<?php echo $hero_img['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
 </section>


<!-- Technologies and Frameworks -->

<section id="fram">
  <div class="container">
    <div class="fram_slider">
      <div class="fram_card">
        <?php $fram_img_1 = get_field('fram_img_1');
            if( !empty($fram_img_1) ): ?>
            <img src="<?php echo $fram_img_1['url']; ?>" alt="<?php echo $fram_img_1['alt']; ?>" />
            <h4>HTML5</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_2 = get_field('fram_img_2');
            if( !empty($fram_img_2) ): ?>
            <img src="<?php echo $fram_img_2['url']; ?>" alt="<?php echo $fram_img_2['alt']; ?>" />
            <h4>CSS3</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_3 = get_field('fram_img_3');
            if( !empty($fram_img_3) ): ?>
            <img src="<?php echo $fram_img_3['url']; ?>" alt="<?php echo $fram_img_3['alt']; ?>" />
            <h4>JS</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_4 = get_field('fram_img_4');
            if( !empty($fram_img_4) ): ?>
            <img src="<?php echo $fram_img_4['url']; ?>" alt="<?php echo $fram_img_4['alt']; ?>" />
            <h4>Github</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_5 = get_field('fram_img_5');
            if( !empty($fram_img_5) ): ?>
            <img src="<?php echo $fram_img_5['url']; ?>" alt="<?php echo $fram_img_5['alt']; ?>" />
            <h4>Bootstrap</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_6 = get_field('fram_img_6');
            if( !empty($fram_img_6) ): ?>
            <img src="<?php echo $fram_img_6['url']; ?>" alt="<?php echo $fram_img_6['alt']; ?>" />
            <h4>PHP</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_7 = get_field('fram_img_7');
            if( !empty($fram_img_7) ): ?>
            <img src="<?php echo $fram_img_7['url']; ?>" alt="<?php echo $fram_img_7['alt']; ?>" />
            <h4>Figma</h4>
        <?php endif; ?>
      </div>
      <div class="fram_card">
        <?php $fram_img_8 = get_field('fram_img_8');
            if( !empty($fram_img_8) ): ?>
            <img src="<?php echo $fram_img_8['url']; ?>" alt="<?php echo $fram_img_8['alt']; ?>" />
            <h4>Elementor</h4>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- Service -->

<section id="service_area">
  <div class="container ">
    <h2>What I do</h2>
    <h6>My Services</h6>
    <div class="service_card_area">
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_1 = get_field('ser_card_icon_1');
            if( !empty($ser_card_icon_1) ): ?>
            <img src="<?php echo $ser_card_icon_1['url']; ?>" alt="<?php echo $ser_card_icon_1['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_1'); ?></h5>
        <p><?php echo get_field('ser_card_text_1'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i>Read More</a></button>
      </div>
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_2 = get_field('ser_card_icon_2');
            if( !empty($ser_card_icon_2) ): ?>
            <img src="<?php echo $ser_card_icon_2['url']; ?>" alt="<?php echo $ser_card_icon_2['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_2'); ?></h5>
        <p><?php echo get_field('ser_card_text_2'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i>Read More</a></button>      
      </div>
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_3 = get_field('ser_card_icon_3');
            if( !empty($ser_card_icon_3) ): ?>
            <img src="<?php echo $ser_card_icon_3['url']; ?>" alt="<?php echo $ser_card_icon_3['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_3'); ?></h5>
        <p><?php echo get_field('ser_card_text_3'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i>Read More</a></button>      
      </div>
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_4 = get_field('ser_card_icon_4');
            if( !empty($ser_card_icon_4) ): ?>
            <img src="<?php echo $ser_card_icon_4['url']; ?>" alt="<?php echo $ser_card_icon_4['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_4'); ?></h5>
        <p><?php echo get_field('ser_card_text_4'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i>Read More</a></button>
      </div>
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_5 = get_field('ser_card_icon_5');
            if( !empty($ser_card_icon_5) ): ?>
            <img src="<?php echo $ser_card_icon_5['url']; ?>" alt="<?php echo $ser_card_icon_5['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_5'); ?></h5>
        <p><?php echo get_field('ser_card_text_5'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i>Read More</a></button>      
      </div>
      <div class="service_card">
        <div class="serv_log">
          <?php $ser_card_icon_6 = get_field('ser_card_icon_6');
            if( !empty($ser_card_icon_6) ): ?>
            <img src="<?php echo $ser_card_icon_6['url']; ?>" alt="<?php echo $ser_card_icon_6['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h5><?php echo get_field('ser_card_title_6'); ?></h5>
        <p><?php echo get_field('ser_card_text_6'); ?></p>
        <button class="read_m"><a href="#"><i class="fa-solid fa-arrow-right"></i> Read More</a></button>      
      </div>
    </div>
   
  </div>
</section>



<!-- Plugins developer -->
<section id="plugins">
  <div class="container text-center">
    <h2>WordPress Plugins</h2>
    <h5>Create a Dynamic Website</h5>
    <div class="plugins_slider">
      
      <div class="plugins_card">
        <?php $plugin_img = get_field('plugins_img_1');
          if( !empty($plugin_img) ): ?>
          <img src="<?php echo $plugin_img['url']; ?>" alt="<?php echo $plugin_img['alt']; ?>" />
          <h4>Elementor</h4>
          <?php endif; ?>
      </div>
      <div class="plugins_card">
        <?php $plugin_img = get_field('plugins_img_2');
          if( !empty($plugin_img) ): ?>
          <img src="<?php echo $plugin_img['url']; ?>" alt="<?php echo $plugin_img['alt']; ?>" />
          <h4>ACF</h4>
          <?php endif; ?>
      </div>
      <div class="plugins_card">
        <?php $plugin_img = get_field('plugins_img_3');
          if( !empty($plugin_img) ): ?>
          <img src="<?php echo $plugin_img['url']; ?>" alt="<?php echo $plugin_img['alt']; ?>" />
          <h4>Contact Form 7</h4>
          <?php endif; ?>
      </div>
      <div class="plugins_card">
        <?php $plugin_img = get_field('plugins_img_4');
          if( !empty($plugin_img) ): ?>
          <img src="<?php echo $plugin_img['url']; ?>" alt="<?php echo $plugin_img['alt']; ?>" />
          <h4>Woocommerce</h4>
          <?php endif; ?>
      </div>
      <div class="plugins_card">
        <?php $plugin_img = get_field('plugins_img_5');
          if( !empty($plugin_img) ): ?>
          <img src="<?php echo $plugin_img['url']; ?>" alt="<?php echo $plugin_img['alt']; ?>" />
          <h4>Classic Editor </h4>
          <?php endif; ?>
      </div>
      
    </div>
  </div>
</section>


<!-- Portfolio -->
 <!-- <section id="portfolio">
  <div class="container">
    <h2>Portfolio</h2>
    <h4>MY Cases</h4>

  </div>
 </section> -->


<!-- Contact Us -->
 <section id="contact_area">
  <div class="container text-center">
    <h2>Contact​</h2>
    <h5>Let's Talk About Ideas​</h5>
    <div class="row text-center">
      <div class="col-md-8 m-auto">
        <div class="contact_form">
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
        <div class="contact_form_sc text-center py-5" style="background: url(<?php echo get_theme_mod('contact_logo'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center; background-blend-mode: darken; background-color: #000000c9;">
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