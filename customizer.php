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
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mealKit_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'mealKitTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'mealKit_headerFooterColour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'mealKit_footerSection' , array(
       'title'      => __( 'Footer Text', 'mealKitTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'mealKit_footerMessage' , array(
       'default'   => '@2020M-Kit. All rights reserved.',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mealKit_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'mealKitTheme' ),
     'section'    => 'mealKit_footerSection',
     'settings'   => 'mealKit_footerMessage',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'mealKit_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'mealKitTheme' ),
       'priority'   => 30,
   ));

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



   // footer icon image
  $wp_customize->add_section( 'mealKit_footerIconImage' , array(
    'title'      => __( 'Footer Icon Image', 'mealKitTheme' ),
    'priority'   => 45,
  ) );

  $wp_customize->add_setting( 'mealKit_footerIcon' , array(
    'default'   => get_template_directory_uri() . 'images/facebook.png',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mealKit_footerIconImageControl', array(
  'label'      => __( 'Footer Icon Image', 'mealKitTheme' ),
  'section'    => 'mealKit_footerIconImage',
  'settings'   => 'mealKit_footerIcon',
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
             background-color: <?php echo get_theme_mod('mealKit_headerFooterColour', '#000000'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');