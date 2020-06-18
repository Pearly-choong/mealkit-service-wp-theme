<?php get_header(); ?>
<hr>
<section class="page-wrap container-fluid">
    <div class="mt-5">
          <div class="container">
              <?php if(has_post_thumbnail()): ?>
                
                  <!-- <div class="text-center">
                    <img src="<?php// the_post_thumbnail_url('blog-large'); ?>" alt="<?php //the_title(); ?>" class="mt-3 img-fluid img-thumbnail">
                  </div> -->
              <?php endif; ?>
                
              <?php get_template_part('includes/section','storiescontent'); ?>
              <?php wp_link_pages(); ?>
          </div>

  
    </div>

</section>
<?php get_footer(); ?>