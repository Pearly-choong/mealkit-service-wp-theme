<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="header-image" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
        <!-- <h1 class="display-4 siteTitle text-center text-light"><?php// bloginfo( 'name' ); ?></h1> -->
    </div>
    <section class="container page-wrap m-auto">
    <div class="container my-content my-5">
        <div class="row">
        <div class="mt-1 col-lg-9">
            <?php get_template_part('includes/section','content'); ?>
        </div>
        <div class="widget pl-5 col-lg-3">
            <?php if(is_active_sidebar('page-sidebar')) :?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div> 
        </div>      
    </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>