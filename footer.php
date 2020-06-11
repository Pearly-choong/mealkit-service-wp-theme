<footer>
    <hr class="break-line">
  <div class="container">
      <div class="row mb-3 text-center">
          <!-- <div class="col"> -->
            <?php
            // wp_nav_menu(
            //     array(
            //     'theme_location' => 'footer-menu',
            // //  'menu' => 'Top Bar',
            //     'menu_class' => 'top-bar'
            //     )
            //   );
            ?>
        <!-- </div> -->
        <!-- <div class="col"> -->
            <img class="facebook px-2" src="<?php echo get_theme_mod('mealKit_footerIcon'); ?>" alt="facebook" />
            
        <!-- </div> -->
    </div>



    <div class="my-footer py-3 px-5 row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"> 
            <p class="footer-text"><?php echo get_theme_mod('mealKit_footerMessage'); ?></p>  
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <p>Theme Designed by<a href="https://skillcrush.com/blog/free-portfolio-templates/" > Pearly Choong </a></p>
        </div>
    </div>
 </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>