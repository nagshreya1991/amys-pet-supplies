<?php
/**
  Template Name:Contact Us
 
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<!-- Contact
    ================================================== -->
<div class="container mContainer">
  <div class="contact_body">
    <h2>Contact <span>us</span></h2>
   <?php the_content(); ?>
    <div class="contact_gray_body">
    	<!--<ul class="contact_form">
        	<li class="first_list"><input type="text" name="" value="" placeholder="Name"></li>
            <li class="second_list"><input type="email" name="" value="" placeholder="Email"></li>
            <li><input type="text" name="" value="" placeholder="Subject"></li>
            <li><textarea cols="" row="" placeholder="Message"></textarea></li>
            <li class="btn_list"><input type="submit" name="" value="Submit" class="btn btn-primary"></li>
        </ul>-->
        <?php echo do_shortcode('[contact-form-7 id="75" title="Contact form"]'); ?>
    </div>
  </div>
  <!-- /END CONTACT --> 
</div>
<!-- /.container --> 
<?php endwhile;?>
<?php get_footer(); ?>