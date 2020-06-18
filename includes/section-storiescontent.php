<?php
    if (have_posts()) :
    while (have_posts()):
        the_post();
?>

<h2 class="mt-3"> <?php the_title(); ?> </h2>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">	
			<a href="<?php the_permalink(); ?>" class="text-dark">
				<!-- featured image -->
				<?php if(has_post_thumbnail()): ?>
				<!-- This has a featured image -->
				<div>
					<img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
				</div>
				<?php endif; ?>
    		</a>

			<p>
			<?php  echo get_the_date('h:i:s d/m/Y'); ?>
			</p>

			<?php
				$fname = get_the_author_meta('first_name');
				$lname = get_the_author_meta('last_name');
			?>
			<p> <?php echo 'by ' . $fname . ' ' . $lname; ?> </p>


			<div class="bg-light py-5 px-4 mr-2">
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

		</div>	<!-- end of col -->
		
		
    	<div class="widget mt-5 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 my-archive-sidebar">
              <?php if(is_active_sidebar('blog-sidebar')) :?>
                 <?php dynamic_sidebar('blog-sidebar'); ?>        
              <?php endif; ?>
		</div> <!-- end of col -->
			 
    </div> <!-- end of row -->




