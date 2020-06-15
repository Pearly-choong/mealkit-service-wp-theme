<?php get_header(); ?>

<section class="page-wrap">
   <div class="container text-center mt-5">

      <section class="">
         <h1> Search results </h1>

         <div class="">
            <h1> <?php echo single_cat_title(); ?> </h1>
            <?php get_template_part('includes/section','storiescontent'); ?>
            <!-- Pagination Method 1 -->
            <?php previous_posts_link();  ?>
            <?php next_posts_link();  ?>
         </div>
      </section>
   </div>
</section>

<?php get_footer(); ?>