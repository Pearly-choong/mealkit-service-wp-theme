<?php
if (have_posts()) : ?>
 
      <div class="row pl-3 mb-5 container-fluid">
        <?php while (have_posts()):
          the_post();
        ?>
          <div class="blog-info col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="card my-3 border shadow">        
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
                  <u><a href="<?php the_permalink(); ?>" class="theme-color-2 mb-4 px-3 py-2 rounded text-underline"> Read More </a></u>
              </div>
            </div>
          </div>
          
        <?php endwhile; ?>

      </div>
   
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
  
     <div class="container mt-5 my-archive-sidebar"> 
        <div class="widget mt-5">
            <?php if(is_active_sidebar('blog-sidebar')) :?>
              <?php dynamic_sidebar('blog-sidebar'); ?>        
            <?php endif; ?>
        </div> 
      </div>


<?php
 else:
endif;
?>