<?php get_header(); ?>
<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="header-image position-relative" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
    </div>
    <div class="text-group">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h1><?php bloginfo( 'description' ); ?></h1>
        <!-- <button type="button" class="btn my-btn-style mt-3">Get Started</button> -->
        <div class="wp-block-button mt-4"><a class="wp-block-button__link has-background" href="http://localhost:8888/Module4/wordpress-summative4/shop/" style="background-color:#70bf44">Get Started</a></div>
    </div>
<?php endif; ?>   
    <!-- <h1 class="display-4"> <?php// echo get_theme_mod('mealKit_siteTitleText'); ?></h1> -->
    
    
    <section class="container myTheme">
    <div class="my-content my-5">
        <!-- <div class="row"> -->
        <div class="mt-1">
            <?php get_template_part('includes/section','content'); ?>
        </div>
        <!-- <div class="widget pl-5 col-lg-3">
            <?php //if(is_active_sidebar('page-sidebar')) :?>
                <?php //dynamic_sidebar('page-sidebar'); ?>
            <?php //endif; ?>
        </div>  -->
        <!-- </div>       -->
    </div>
    </section>


<?php get_footer(); ?>