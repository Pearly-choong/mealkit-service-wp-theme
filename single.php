<?php get_header(); ?>

<section class="page-wrap">
<div class="container mt-5">

    <?php if(has_post_thumbnail()): ?>
       
        <div class="text-center">
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mt-3 img-fluid img-thumbnail">
        </div>
  <?php endif; ?>

      <h2 class="title mt-5 font-weight-bold"> <?php the_title(); ?></h2>
      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
</div>
</section>
<?php get_footer(); ?>