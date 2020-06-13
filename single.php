<?php get_header(); ?>

<section class="page-wrap container">
<div class="mt-5 row">

    <?php if(has_post_thumbnail()): ?>
       
        <div class="text-center col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mt-3 img-fluid img-thumbnail">
        </div>
  <?php endif; ?>
       
      <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7"> 
      <h2 class="title font-weight-bold"> <?php the_title(); ?></h2>
      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
      </div>
</div>
</section>
<?php get_footer(); ?>