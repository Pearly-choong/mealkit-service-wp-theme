<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'mealKit_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );
   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mealKit_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'mealKitTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'mealKit_backgroundColour',
   ) ) );


   // Header and Footer garden_backgroundColour // Background Colour
    $wp_customize->add_setting( 'mealKit_headerFooterColour' , array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mealKit_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'mealKitTheme' ),
      'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'mealKit_headerFooterColour',
    ) ) );


    //Heading Text Colour
    $wp_customize->add_setting( 'mealKit_siteTitleTextColour', array(
      'default'   => '#252A4B',
      'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mealKit_siteTitleTextColourControl', array(
      'label'      => __( 'Site Title Text Colour', 'mealKitTheme' ),
      'description' => 'Change the Site Title Text Colour',
      'section'    => 'colors',
      'settings'   => 'mealKit_siteTitleTextColour',
    ) ) );
    
   
    // Top bar nav link colours
    $wp_customize->add_setting('mealKit_topNavLinkColor', array(
      'default' => '#252A4B',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_topNavLinkColorControl', array(
      'label' => __('Top nav link colour', 'mealKitTheme'),
      'description' => 'Changes the link colour of the top navigation bar',
      'section' => 'colors',
      'settings' => 'mealKit_topNavLinkColor',
    )));


    // top bar nav link colours hover
    $wp_customize->add_setting('mealKit_topNavLinkColorHover', array(
      'default' => '#70BF44',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_topNavLinkColorHoverControl', array(
      'label' => __('Top nav link hover', 'mealKitTheme'),
      'description' => 'Changes the link hover colour of the top navigation bar',
      'section' => 'colors',
      'settings' => 'mealKit_topNavLinkColorHover',
    )));


    // top bar nav link colour active
    $wp_customize->add_setting('mealKit_topNavLinkColorActive', array(
      'default' => '#70BF44',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_topNavLinkColorActiveControl', array(
      'label' => __('Top nav link active', 'mealKitTheme'),
      'description' => 'Changes the link active colour of the top navigation bar',
      'section' => 'colors',
      'settings' => 'mealKit_topNavLinkColorActive',
    )));


    // dropdown menu hover background color
    $wp_customize->add_setting('mealKit_dropdownHoverBgColor', array(
      'default' => '#70BF44',
      'transport' => 'refresh',
    ));    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_dropdownHoverBgColorControl', array(
      'label' => __('Dropdown Menu Hover Background Colour', 'mealKitTheme'),
      'description' => 'Changes dropdown menu hover background colour of the top navigation bar',
      'section' => 'colors',
      'settings' => 'mealKit_dropdownHoverBgColor',
    )));


    // dropdown menu hover text color
    $wp_customize->add_setting('mealKit_dropdownHoverTextColor', array(
      'default' => 'white',
      'transport' => 'refresh',
    ));    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_dropdownHoverTextColorControl', array(
      'label' => __('Dropdown Menu Hover Text Colour', 'mealKitTheme'),
      'description' => 'Changes dropdown menu hover text colour of the top navigation bar',
      'section' => 'colors',
      'settings' => 'mealKit_dropdownHoverTextColor',
    )));  



    // front page main CTA button color
    $wp_customize->add_setting('mealKit_CTAButtonColor', array(
      'default' => '#70BF44',
      'transport' => 'refresh',
    ));    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mealKit_CTAButtonColorControl', array(
      'label' => __('Main CTA Button Colour', 'mealKitTheme'),
      'description' => 'Changes front page CTA main button colour',
      'section' => 'colors',
      'settings' => 'mealKit_CTAButtonColor',
    ))); 



    // Site Title Text
    $wp_customize->add_setting( 'mealKit_siteTitleText' , array(
      'default'   => 'Meal Kit Delivery',
      'transport' => 'refresh',
     ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mealKit_siteTitleTextControl', array(
      'label'      => __( 'Site Title Text', 'mealKitTheme' ),
      'section'    => 'mealKit_siteTitleTextSection',
      'settings'   => 'mealKit_siteTitleText',
    ) ) );


    // header image
    $wp_customize->add_setting( 'mealKit_frontPageImageSetting' , array(
      'default'   => '',
      'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mealKit_frontPageImageControl', array(
      'label'      => __( 'Front Page Header Image', 'mealKitTheme' ),
      'section'    => 'mealKit_frontPageImage',
      'settings'   => 'mealKit_frontPageImageSetting',
    ) ) );



   // Footer Message
   $wp_customize->add_section( 'mealKit_footerSection' , array(
       'title'      => __( 'Footer Text', 'mealKitTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'mealKit_footerMessage' , array(
       'default'   => '@2020 M-Kit. All rights reserved.',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mealKit_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'mealKitTheme' ),
     'section'    => 'mealKit_footerSection',
     'settings'   => 'mealKit_footerMessage',
   ) ) );


 

   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
function mytheme_customize_css()
{
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('mealKit_backgroundColour','#ffffff'); ?>!important;
         }
    .myTheme{
             background-color: <?php echo get_theme_mod('mealKit_headerFooterColour', '#ffffff'); ?>!important ;
           }
    .myHeading{
        color: <?php echo get_theme_mod('mealKit_siteTitleTextColour', '#252A4B'); ?>!important ;
    }
    .navbar-light .navbar-nav .nav-link{
      color: <?php echo get_theme_mod('mealKit_topNavLinkColor', '#252A4B') ?>!important;
    }
    .navbar-light .navbar-nav .nav-link:hover, .dropdown-item:hover{
      color: <?php echo get_theme_mod('mealKit_topNavLinkColorHover', '#70BF44') ?>!important;
    }
    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
      color: <?php echo get_theme_mod('mealKit_topNavLinkColorActive', '#70BF44') ?>!important;
    } 
    .dropdown-item:hover{
      color: <?php echo get_theme_mod('mealKit_dropdownHoverTextColor', 'white') ?>!important;
      background-color:<?php echo get_theme_mod('mealKit_dropdownHoverBgColor', '#70BF44') ?>!important;
    }
    .wp-block-button__link{
      background-color: <?php echo get_theme_mod('mealKit_CTAButtonColor', '#70BF44') ?>!important;
    }

    </style>
  <?php
}
add_action( 'wp_head', 'mytheme_customize_css');