<?php get_header(); ?>
<hr>
<section class="page-wrap">
<div class="container mt-5">

    <?php if(has_post_thumbnail()): ?>
       
        <!-- <div class="text-center">
          <img src="<?php// the_post_thumbnail_url('blog-large'); ?>" alt="<?php //the_title(); ?>" class="mt-3 img-fluid img-thumbnail">
        </div> -->
  <?php endif; ?>

      <!-- <h1 class="title theme-color"> <?php //the_title(); ?></h1> -->
      <?php get_template_part('includes/section','storiescontent'); ?>
         <?php wp_link_pages(); ?>

       <!-- Plugin : Advanced Custom Field  -->
       <!-- <ul>
           <li> Category: <?php// the_field('category'); ?> </li>

           <li> Types of Menu Plan : <?php //the_field('menuplan'); ?> </li>
           <li> Season : <?php //the_field('season'); ?> </li>

        </ul> -->

</div>
</section>
<?php get_footer(); ?>