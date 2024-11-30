<?php
/**
  Template Name:Cart
 
 */

get_header(); ?>
<div class="our-table">
  <div class="container">
<!-----------------------table part------------------------>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<?php the_content(); ?>
<?php endwhile;?>

</div>
</div>
<!-----------------------table part------------------------> 

 <?php get_footer(); ?>