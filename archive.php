<?php get_header(); ?>
<hr>
<section class="page-wrap mt-5">

    <h1 class="title text-center mt-5"> <?php echo single_cat_title(); ?> </h1>
   
    <?php get_template_part('includes/section','archive'); ?>
    
         
</section>


<?php get_footer(); ?>