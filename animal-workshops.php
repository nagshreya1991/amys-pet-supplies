 <?php
/**
  Template Name:Animal Workshops
 
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<div class="container mContainer">
  <div class="wish_list">
    <h2>Animal Workshops mobile zoo <span>Wishlist</span></h2>
    <a href="<?php echo get_page_link(1490); ?>" class="donate_btn">I'D LIKE TO DONATE</a>
    <div class="clearfix"></div>
    <div class="home_marketing">
      <div class="col-md-5 col-sm-12 col-xs-12 home_marketing_img_box pull-right"> <img src="<?php echo $image[0];?>" alt=""> </div>
      <div class="col-md-7 col-sm-10 col-xs-10 home_marketing_color_box">
        <div class="home_marketing_text_box">
        <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="home_marketing">
      <div class="col-md-5 col-sm-12 col-xs-12 home_marketing_img_box"> <img src="<?php echo get_field('second_image'); ?>" alt=""> </div>
      <div class="col-md-7 col-sm-10 col-xs-10 home_marketing_color_box2">
        <div class="home_marketing_text_box">
         <?php echo get_field('second_content'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="wish_list_bottom_details">
   <?php echo get_field('third_content'); ?>
  </div>
  <!-- /END WISH-LIST --> 
</div>

<?php endwhile; ?>
<?php get_footer(); ?>