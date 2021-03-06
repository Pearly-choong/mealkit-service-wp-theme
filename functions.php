<?php

//load stylesheets
function load_css(){
    //bootstrap
    //wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style('bootstrap');

    //own css style sheet
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');


//load javascript
function load_js()
{
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '4.5.0', true);
		wp_enqueue_script('bootstrap');
    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
		wp_enqueue_script('js');

}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo');

function theme_setup(){
// Menus
  register_nav_menus(
      array(
          'top-menu' => __('Top Menu Location', 'mealKitTheme'),
          'mobile-menu' => 'Mobile Menu Location',
          'footer-menu' => 'Footer Menu Location',
      )

  );
}

//Bootstrap nav walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//adding google fonts
function wpb_add_google_fonts(){
  wp_register_style('wp-googleFonts', '<link href="https://fonts.googleapis.com/css2?family=Acme&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">');
  wp_enqueue_style('wp_googleFonts');
}
add_action('wp_print-styles', 'wpb_add_google_fonts');


//custom image size
add_image_size('blog-xlarge', 1000, 500, false);
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');


// custom logo
function mealKit_custom_logo_setup() {
    $defaults = array(
    'height'      => 70,
    'width'       => 90,
    'flex-height' => false,
    'flex-width'  => false,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    // add_theme_support( 'title-tag' );
   }
   
add_action( 'after_setup_theme', 'mealKit_custom_logo_setup' );


 


// custom post type
function my_first_post_type(){
  $args = array(
    'labels' => array(
        'name' => 'Stories',
        'singular_name' => 'Stories',
    ),

  'hierarchical' => true, //boolean value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-carrot',//get icon name from wordpress dashicons
  'public' => true,
  'has_archive' => true,
  'supports' => array('title','editor','thumbnail','custom-fields' ),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('stories',$args);
}

add_action('init','my_first_post_type');


// Taxanomy
function my_first_taxonomy(){
  $args = array(
    'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
    ),

    'public' => true,
    'hierarchical' => true,//false works like tags, true like catgories without labels

  );
  register_taxonomy('types', array('stories'),$args);

}

add_action('init', 'my_first_taxonomy');



//header image
register_default_headers( array(
  'defaultImage' => array(
      'url'           => get_template_directory_uri() . '/images/background-image.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/images/background-image.jpg',
      'description'   => __( 'The default image for the custom header.', 'mealKitTheme' )
  )
) );

//Header Image
$customHeaderDefaults = array(
  'width' => 1920,
  'height' => 1280,
  'default-image' => get_template_directory_uri() . '/images/background-image.jpg'
);
add_theme_support('custom-header', $customHeaderDefaults);


// social meida icons
function my_customizer_social_media_array() {

  $social_sites = array('twitter', 'facebook', 'pinterest', 'youtube', 'rss', 'instagram', 'email');
  return $social_sites;
}

/* add settings to create various social media text areas. */
add_action('customize_register', 'my_add_social_sites_customizer');
function my_add_social_sites_customizer($wp_customize) {
  $wp_customize->add_section( 'my_social_settings', array(
    'title'    => __('Social Media Icons', 'text-domain'),
    'priority' => 35,
  ) );
  $social_sites = my_customizer_social_media_array();
  $priority = 5;
  foreach($social_sites as $social_site) {
    $wp_customize->add_setting( "$social_site", array(
      'type'              => 'theme_mod',
      'capability'        => 'edit_theme_options',
      'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( $social_site, array(
      'label'    => __( "$social_site url:", 'text-domain' ),
      'section'  => 'my_social_settings',
      'type'     => 'text',
      'priority' => $priority,
    ) );
    $priority = $priority + 5;
  }
}
/* takes user input from the customizer and outputs linked social media icons */
function my_social_media_icons() {
  $social_sites = my_customizer_social_media_array();
  /* any inputs that aren't empty are stored in $active_sites array */
  foreach($social_sites as $social_site) {
    if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
      $active_sites[] = $social_site;
    }
  }
  /* for each active social site, add it as a list item */
  if ( ! empty( $active_sites ) ) {
    echo "<ul class='social-media-icons'>";
    foreach ( $active_sites as $active_site ) {
      /* setup the class */
      $class = 'fa fa-' . $active_site;
      if ( $active_site == 'email' ) {
        ?>
        <li>
          <a class="email" target="_blank" href="mailto:<?php echo antispambot( is_email( get_theme_mod( $active_site ) ) ); ?>">
            <i class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></i>
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
            <i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_site ); ?>"></i>
          </a>
        </li>
        <?php
      }
    }
    echo "</ul>";
  }
}




//customize API
require_once get_template_directory() . '/customizer.php';




remove_action('wp_head', 'wp_generator'); //for security. it wont show what version of wp is used.