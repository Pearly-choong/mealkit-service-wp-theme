
<?php get_header(); ?>
<?php if(has_header_image()): ?>
    <div class="container-fluid p-0 position-relative">
        <div class="header-image" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
    
        <div class="text-group">
            <h1 class="myHeading"><?php bloginfo( 'name' ); ?></h1>
            <h1 class="myHeading"><?php bloginfo( 'description' ); ?></h1>
            <div class="wp-block-button mt-4"><a class="wp-block-button__link has-background" href="http://localhost:8888/Module4/wordpress-summative4/shop/" style="background-color:#70bf44">Get Started</a></div>
        </div>
    </div>
<?php endif; ?>   
    
       
<section class="container">
    <div class="my-content my-5">   
        <div class="mt-1">
            <?php get_template_part('includes/section','content'); ?>
        </div>
    </div>
</section>

            
<?php get_footer(); ?>
