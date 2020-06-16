
<?php
if (have_posts()) : ?>
 
  <!-- <div class="row"> -->
    <!-- <div class="col-xs-9 col-sm-9 col-md-9 col-lg-12 col-xl-9 mb-3"> -->
      
        <?php while (have_posts()):
          the_post();
        ?>
    
          <div class="container mt-5">      
            <div class="mr-5 shadow row" style="width: 100%;">        
                <?php if(has_post_thumbnail()): ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                      <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="card-img-top img-thumbnail">
                    </div>
                <?php endif; ?>
      
                <div class="card-body mb-2 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h5 class="card-title font-weight-bold mt-3"> <?php the_title(); ?></h5>
                  <?php
                  the_excerpt();//cut of some portion of text
                  ?>
                  <u><a href="<?php the_permalink(); ?>" class="theme-color-2 px-3 mt-5"> Read More </a></u>
              </div>
        
            </div>
          </div>
          
        <?php endwhile; ?>

    <!-- </div>  -->
    <!-- col ends here -->
    <div class="container mt-5">
        <?php
        global $wp_query;
        $big = 99999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'=>'?paged-%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query -> max_num_pages
        ));
        ?>
    </div>
    <hr class="break-line">
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