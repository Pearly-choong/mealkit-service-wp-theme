<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Pearly Choong">
    <meta name="description" content="Custom meal kit delivery service WordPress theme created for Yoobee College Web and UX Assignment.">
    <meta name="keywords" content="meal kit, delivery, service, wordpress, custom theme, website template, website design">
    <script src="https://kit.fontawesome.com/8c9236379a.js" crossorigin="anonymous"></script>
     <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>
  <!-- <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php //echo get_theme_mod('art_siteTitleText'); ?></h1>
  </div> -->
    <header>
     
                

     <!-- bootstrap nav-walker -->

    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a class="navbar-brand text-info" href="#">Logo</a> -->
        <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            // echo ('site-title'); 
            }
        ?>
        <div class="my-nav">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
        <div class="">
             <?php get_search_form(); ?>
        </div>    
    </div>
    </nav>
           
            
       
      
    </header>