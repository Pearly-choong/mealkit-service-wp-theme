<?php get_header(); ?>
<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="header-image position-relative" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
    </div>
    <h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
    <h2 class="site-title"><?php bloginfo( 'description' ); ?></h2>
<?php endif; ?>   
    <!-- <h1 class="display-4"> <?php// echo get_theme_mod('mealKit_siteTitleText'); ?></h1> -->
    
    
    <section class="container">
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