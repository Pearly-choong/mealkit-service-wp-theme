<footer class="myTheme mt-5">
    <hr class="break-line">
  <div class="container">
    
      <div class="my-social-icon text-center">
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
            <!-- <img class="facebook px-2" src="<?php echo get_theme_mod('mealKit_footerIcon'); ?>" alt="facebook" /> -->
            <p>Connect with us:</p>    
            <?php my_social_media_icons() ?>
        <!-- </div> -->
    </div>



    <div class="my-footer py-3 px-5 row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8"> 
            <p class="footer-text"><?php echo get_theme_mod('mealKit_footerMessage'); ?></p>  
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <p>Theme Designed by<u><a href="https://skillcrush.com/blog/free-portfolio-templates/" > Pearly Choong </a></u></p>
        </div>
    </div>
    
</div>

    <!-- <div class="my-bg-color py-2">
     <p class="text-center my-font-size text-light pt-1">This website was built for Yoobee College assignment.  All images and icons were downloaded from free resources - unplash & iconfinder. Usage permitted under the “fair dealing” right for educational purpose for all images, icons and information. </p>
    </div> -->
</footer>

<?php //wp_footer(); ?>
</body>
</html>