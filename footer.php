<?php
  // Theme footer section 

?>


<footer id="footer_area">
  <section id="footer">
    <div class="container">
      <div class="row d-flex justify-content-between g-3">
        <div class="col-md-4 text-center text-md-start">
          <div class="footer_card">
           <?php dynamic_sidebar('footer-1'); ?>
          </div>
        </div>
        <div class="col-md-3">
        <div class="footer_card">
           <?php dynamic_sidebar('footer-2'); ?>
          </div>
        </div>
        <div class="col-md-4">
        <div class="footer_card">
           <?php dynamic_sidebar('footer-3'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


 <section class="copyright_area">
    <div class="container">
      <p><?php echo get_theme_mod('hasan_copyright_section'); ?></p>
    </div>
 </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>

