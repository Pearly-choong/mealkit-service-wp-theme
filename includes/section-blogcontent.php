<div class="">
  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
  ?>

  <?php
    the_content();
    // the_author();
  ?>

  <hr>
  <div class="row">
    <div class="col-lg-4">  
      <p>Date: 
      <?php  echo get_the_date('l, d/m/Y'); //check php date format ?>
      </p>
    </div>
    <div class="col-lg-4">
      <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
      ?>
      <p> <?php echo 'Posted by: ' . $fname . ' ' . $lname; ?> </p>
    </div>
    <div class="col-lg-4">
      <?php
      $categories = get_the_category();
      ?>
        <p>Category :
          <?php
          foreach($categories as $cat):?>

          <u><a class="theme-color-2" href="<?php echo get_category_link($cat->term_id); ?>">
            <?php echo $cat->name; //go and add single_cat_title() in archive ?>
          </a></u>
          <?php endforeach; ?>
        </p>
    </div>
  </div> <!-- row ends here -->
  <div class="row">
    <div class="col-lg-12">
      <?php
        $tags = get_the_tags();
      ?>
      <p>Tag : 
        <?php
          foreach($tags as $tag):?>
            <u><a class="ml-3 theme-color-2" href="<?php echo get_tag_link($tag -> term_id);  ?>">
              <?php echo $tag -> name; ?>
            </a></u>
        <?php endforeach; ?>
      </p>
    </div>
  </div> <!-- row ends here -->
 



  


<?php// comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
</div>