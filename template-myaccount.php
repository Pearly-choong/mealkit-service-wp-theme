<?php
/*
Template Name: MyAccount
*/
?>

<?php get_header(); ?>

<section class="page-wrap mt-5">
  <div class="container">
      <h1> <?php the_title(); ?>   </h1>

      <?php //if(has_post_thumbnail()): ?>
            <!-- This has a featured image -->
            <!-- <div>
              <img src="<?php //the_post_thumbnail_url('blog-large'); ?>" alt="<?php// the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
            </div> -->
      <?php //endif; ?>

      <div>
        <div class="container my-height">
        <?php get_template_part('includes/section','content'); ?>
        </div>
      </div>
  </div>
</section>
<?php get_footer(); ?>