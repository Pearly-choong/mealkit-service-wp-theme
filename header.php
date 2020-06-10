<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Pearly Choong">
    <meta name="description" content="Custom meal kit delivery service WordPress theme created for Yoobee College Web and UX Assignment.">
    <meta name="keywords" content="meal kit, delivery, service, wordpress, custom theme, website template, website design">
    <script src="https://kit.fontawesome.com/8c9236379a.js" crossorigin="anonymous"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>
  <!-- <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php //echo get_theme_mod('art_siteTitleText'); ?></h1>
  </div> -->
    <header class="px-5 py-5">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    // echo ('site-title'); 
                    }
                ?>
                 <?php
                wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    //'menu' => 'top_bar,
                    'menu_class' => 'top-bar'
                )
                );
                ?>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>