<?php
/**
  Template Name:Wishlist
 
 */

get_header(); ?>


<!-- Features-Products
    ================================================== -->
<div class="container mContainer">
  <!--<div class="offerTag">LAST DATE FOR GUARANTEED DELIVERY BEFORE CHRISTMAS IS WEDNESDAY 16TH DECEMBER 2020 <a href="#" class="crossTag"><img src="images/white_cross.png" alt=""></a></div>-->
  <div class="homeMarketing">
    <h1><span>My</span>Wistlist</h1>
    <div class="row">
      <div class="col-md-12 col-sm-12 right_shop">
      
      
      <?php while (have_posts()) : the_post(); //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<?php the_content(); ?>
<?php endwhile;?>
      
      </div>
    </div>
  </div>
</div>
<!-- /.container --> 
  <?php get_footer(); ?>