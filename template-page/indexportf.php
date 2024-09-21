<?php 

  get_header();

?>

<!-- Hero Area  -->

<section id="hero">
    <div class="container-xl">
      <div class="row">
        <div id="hero_details" class="col-lg-6">
          <h2>Hello sir, I am</h2>
          <h4>Ratul Hasan</h4>
          <h3>WordPress Frontend Developer</h3>
          <p>
            I have a good command of  HyperText Markup Language(HTML),Cascading Style Sheets (CSS) and programming languages basic JavaScript and PHP. I’m a skilled WordPress theme developer, plugin development and WooCommerce customization.
            <br>
            <br>
            <br>
            Design our clients websites to be error-free and mobile-friendly so that users can easily navigate and find the information they need. Responsive design changes a website’s layout based on different devices. Thus it makes the website a responsive one.
          </p>
        </div>
        <div class="col-lg-6 hero_img  justify-content-center">
          <img class="" src="<?php echo get_theme_mod('hasan_hero_logo'); ?>" alt=""> 
        </div>
    </div>

    </div>
   </section>


  
   <!-- Service Area  -->
  

   <section id="service">
    <div class="owl-carousel owl-theme">
    <div id="theme_dv" class="container-flude">
      <div class="container">
        <h2 class="text-center">MY SERVICES</h2>
        <div class="row">
          <div id="service_details" class="col-md-7">
            <h3>WordPress Theme Development Services</h3>
            <p>
              Looking for expert WordPress theme development services? You've come to the right place!
              Intelivita takes pride in our ability to create custom themes that not only reflect your brand but also enhance user experience.
              Explore our portfolio to see examples of our WordPress websites and let's create something amazing together!
            </p>
            <a href=""><button class="service_btn" type="submit">Get Your Theme Developed Now</button></a>
          </div>
          <div class="col-md-5">
          <img class="#" src="<?php echo get_theme_mod('hasan_service-1_logo'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div id="theme_woo" class="container-flude">
      <div class="container">
        <h2 class="text-center">MY SERVICES</h2>
        <div class="row">
          <div id="service_details" class="col-md-7">
            <h3>Woocommerce Customization Services</h3>
            <p>
            Are you looking to enhance your online store? Look no further! WebIndia Inc. specializes in Woocommerce development and customization services that will take your e-commerce platform to the next level. I will work closely with you to understand your unique requirements and provide customized solutions that align perfectly with your business goals.
            </p>
            <a href="#"><button class="service_btn" type="submit">Woocommerce Customization Services Now</button></a>
          </div>
          <div class="col-md-5">
          <img class="" src="<?php echo get_theme_mod('hasan_service-2_logo'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div id="theme_cu" class="container-flude">
      <div class="container">
        <h2 class="text-center">MY SERVICES</h2>
        <div class="row">
          <div id="service_details" class="col-md-7">
            <h3>WordPress Customization Service</h3>
            <p>
            By delegating your web projects and WordPress customization tasks to me, you can leverage the expertise of TheGem theme authors. I am WordPress Author on themeforest.net: experienced web designers and developers who have a deep understanding of WordPress and its customization capabilities.
            </p>
            <a href="#"><button class="service_btn" type="submit">WordPress Customization Service Now</button></a>
          </div>
          <div class="col-md-5">
          <img class="" src="<?php echo get_theme_mod('hasan_service-3_logo'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
   </section>



<!-- About Area  -->

 <section id="about">
   <h2>About</h2>
   <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="dashicons dashicons-wordpress"></h3>
            <h5 class="card-title">WORDPRESS DEVELOPER</h5>
            <p class="card-text"> I’m a skilled WordPress theme developer, plugin development, WordPress Elementor and WooCommerce shop customization.</p>
            <a href="#"><button class="hero_btn" type="submit">contact</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="dashicons dashicons-wordpress"></h3>
            <h5 class="card-title">FRONT-END DEVELOPER</h5>
            <p class="card-text">I’m a Front End Web developer who is passionate about making error-free websites with 100% client satisfaction.</p>
            <a href="#"><button class="hero_btn" type="submit">contact</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="dashicons dashicons-wordpress"></h3>
            <h5 class="card-title">DESIGN SKILLS</h5>
            <p class="card-text">Proficient in Figma design, creating sleek user interfaces and intuitive user experiences with a strong eye for aesthetics and usability.</p>
            <a href="#"><button class="hero_btn" type="submit">contact</button></a>
          </div>
        </div>
      </div>
    </div>
   </div>
  </section>


 <?php get_footer();