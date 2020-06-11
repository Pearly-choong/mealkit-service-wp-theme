
<div class="">
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    ?>
  <h2 class="mt-3"> <?php the_title(); ?> </h2>

<a href="<?php the_permalink(); ?>" class="text-dark">
<!-- featured image -->
<?php if(has_post_thumbnail()): ?>
    <!-- This has a featured image -->
    <div>
      <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
    </div>
<?php endif; ?>

</a>

<p class="text-dark">
<?php  echo get_the_date('h:i:s d/m/Y'); //check php date format ?>
</p>

<?php
   $fname = get_the_author_meta('first_name');
   $lname = get_the_author_meta('last_name');
  ?>
  <p class="text-dark"> <?php echo 'by ' . $fname . ' ' . $lname; ?> </p>


<p class="h6 mt-0">
<?php

    the_content();
    // the_author();
?>

</p>


 

<?php
  $categories = get_the_category();
  foreach($categories as $cat):?>

  <a class="text-dark" href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name; //go and add single_cat_title() in archive ?>
  </a>
<?php endforeach; ?>


<?php// comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
</div>
