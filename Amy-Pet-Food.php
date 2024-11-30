<?php
/**
  Template Name:Amy's Pet Food
 
 */

get_header(); ?>
<style>
body {
  font-family: Arial, sans-serif;
  background: url(http://www.shukatsu-note.com/wp-content/uploads/2014/12/computer-564136_1280.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
.overlay:target {
    z-index: 9;
}
.content2-only .form-control {
    box-shadow: none;
    border: 2px solid #e7e7e7;
    border-radius: 6px;
    font-size: 14px;
    color: #6b6b6b;
    height: 36px;
	padding: 0 6px;
}

.content2-only label { font-size:12px; margin-bottom:4px; }

.content2-only .form-group {
    margin-bottom: 5px;
} 

.content2-only .form-control::placeholder { 	color: #6b6b6b;  }

.popup h2 {
    margin-bottom: 0px;
}

.content2-only input[type="submit"] {
    background: #61b3ac;
    border-radius: 30px;
    color: #fff;
    float: left;
    line-height: 38px;
    padding: 0 30px;
    border: none;
    font-size: 14px;
    text-transform: uppercase;
    margin-top: 8px;
}

.content2-only textarea {
    height: 65px!important;
}


.popup10 {
    margin: 0px auto !important;
    width: 100% !important;
}   

.modal .modal-dialog {
    width: 400px;
}




@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
.popup10 { width:95%;  }  

.modal .modal-dialog {
    width: auto;
}
.modal { padding-right:0 !important;  }
  
}

@media screen and (max-width: 360px){

}


</style>
<?php while (have_posts()) : the_post(); //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<div class="banner CustomPage">
  <div class="container mContainer">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 bannerText text-center">
     <?php the_content(); ?>
     <a class="btn btn-default button" data-toggle="modal" data-target="#popup"> SUBMIT FORM</a>
      </div>
      
    </div><?php endwhile;?>
    <div class="homeMarketing">
     <!-- <h1><span>Featured</span> Products</h1>-->
      <div class="row">
       <?php 



$myposts=get_posts($args);
$myposts=get_posts('numberposts=100&post_type=amy_s_pet_foodlist&order=ASC');

foreach($myposts as $post){
setup_postdata($post);
$getcontent=get_the_content();
$getcontent=apply_filters(''.the_content.'',$getcontent);
$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); 


?>
           
        <div class="col-md-4 col-sm-4 col-xs-12 text-center PetFoodItem">
          <div class="home_feature_img"><img src="<?php echo $image[0]; ?>" alt=""></div>
          <div class="home_feature_text"><div class="subdiv">
            <h2><?php echo get_the_title($post->ID); ?></h2>
           <?php echo get_the_content($post->ID); ?><?php //echo get_field('link',$post->ID); ?>
          </div>   <!--<a class="btn btn-default button" data-toggle="modal" data-target="#popup<?php echo $post->ID; ?>"> <?php echo get_field('link_name',$post->ID); ?></a>-->
          
           <a class="btn btn-default button" href="<?php echo get_field('link',$post->ID); ?>"> <?php echo get_field('link_name',$post->ID); ?></a>
          </div>
        </div>
        
        

<!--popup-->


<div id="popup<?php //echo $post->ID; ?>" role="dialog" class="modal fade"> 

<div class="modal-dialog">
  <div class="modal-content">
	<div class="popup popup10">
		<h2>Contact Form</h2>
		<!--<a class="close" href="#">&times;</a>-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
  
        <?php echo do_shortcode('[contact-form-7 id="1907" title="Amys Pet Food contact form"]'); ?>
	</div>
    </div>
    </div>
</div>


        <?php } ?>
   
      </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>
