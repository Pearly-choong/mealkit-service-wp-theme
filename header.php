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

     <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-XXXXXXXX-Y']);
     _gaq.push(['_trackPageview']);
     (function()
     {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
    </script>

    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>

  
    <header class="myTheme">
              
     <!-- bootstrap nav-walker -->
      <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
          <div class="row w-100 mt-3 ml-3">     
              <!-- Custom Logo -->
              <div class="col-xs-4 col-sm-6 col-md-2 col-lg-1 col-xl-1">
                <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    // echo ('site-title'); 
                    }
                ?>
              </div>
        
              <div class="my-nav col-xs-4 col-sm-6 col-md-5 col-lg-8 col-xl-8 mt-3">
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

                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler col-xs-4 col-sm-6 col-md-4 col-lg-8 col-xl-8 mt-3" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              
              <div class="col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4 text-right">
                <?php get_search_form(); ?>
              </div>   


          </div>
      </nav>
      
       
      
    </header>



    