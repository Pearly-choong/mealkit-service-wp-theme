<?php
if (have_posts()) : ?>
 
  <!-- <div class="row"> -->
    <!-- <div class="col-xs-9 col-sm-9 col-md-9 col-lg-12 col-xl-9 mb-3"> -->
      <div class="row pl-3">
        <?php while (have_posts()):
          the_post();
        ?>
          <div class="blog-info col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="card my-3 border mr-5 shadow" style="width: 28rem;">        
                <?php if(has_post_thumbnail()): ?>
                    <div>
                      <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="card-img-top img-thumbnail">
                    </div>
                <?php endif; ?>
              <div class="card-body mb-2">
                <h5 class="card-title font-weight-bold"> <?php the_title(); ?></h5>
                  <?php
                  the_excerpt();//cut of some portion of text
                  ?>
                  <u><a href="<?php the_permalink(); ?>" class="theme-color-2 mb-4 px-3 py-2 rounded text-underline"> View Recipes </a></u>
              </div>
            </div>
          </div>
          
        <?php endwhile; ?>

      </div>
    <!-- </div>  -->
    <!-- col ends here -->
    
    <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12 col-xl-3 widget"> -->
     <div class="container mt-5"> 
    <div class="widget mt-5">
        <?php if(is_active_sidebar('blog-sidebar')) :?>
          <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </div> 
        </div>
      <!-- col ends here -->
  <!-- </div>   -->
  <!-- row ends here -->

<?php
 else:
endif;
?>