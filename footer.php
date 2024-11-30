<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><?php $fieldid = 37; ?>
<?php if(!is_page( array( 11,13,9 ,10)) ){ ?>




	
<div class="container mContainer">
  <div class="home_marketing">
    <div class="col-md-4 col-sm-12 col-xs-12 home_marketing_img_box pull-right"> <img src="<?php echo get_field('healthy_options_image',$fieldid); ?>" alt=""> </div>
    <div class="col-md-8 col-sm-10 col-xs-10 home_marketing_color_box">
      <div class="home_marketing_text_img"><img src="<?php bloginfo( 'template_url' ); ?>/images/healthy_img.png" alt=""></div>
      <div class="home_marketing_text_box">
        <?php echo get_field('healthy_options',$fieldid); ?>
      </div>
    </div>
  </div>
  <div class="home_marketing">
    <div class="col-md-4 col-sm-12 col-xs-12 home_marketing_img_box"> <img src="<?php echo get_field('fun_toys_image',$fieldid); ?>" alt=""> </div>
    <div class="col-md-8 col-sm-10 col-xs-10 home_marketing_color_box2">
      <div class="home_marketing_text_img"><img src="<?php bloginfo( 'template_url' ); ?>/images/fun_toys_img.png" alt=""></div>
      <div class="home_marketing_text_box">
       <?php echo get_field('fun_toys',$fieldid); ?>
      </div>
    </div>
  </div>
  <!-- /END THE HOME-FEATURE --> 
</div>
  <!-- /END THE HOME-FEATURE --> 
</div>
<!-- /.container --> 

<!-- Home-Newsletter
      ================================================== -->
<div class="container mContainer">
  <div class="home_top_newsletter">
   <?php echo get_field('newsletter_heading',$fieldid); ?>
  </div>
  <!--<ul class="home_news_form">
    <li>
      <input type="text" name="" value="" placeholder="Name">
    </li>
    <li>
      <input type="email" name="" value="" placeholder="Email">
    </li>
    <li>
      <input type="submit" name="" value="Submit" class="btn btn-primary">
    </li>
  </ul>-->
  <div class="NewsDiv">
  <?php echo do_shortcode('[mailpoet_form id="1"]'); ?>
  </div>
</div>
<!-- /END HOME NEWSLETTER --> 
<?php } ?>
<!-- FOOTER -->
<div class="footer">
  <div class="container mContainer">
   <div class="ful2">
    <p><?php echo get_field('copyright',$fieldid); ?></p>
    <p class="rightPara"><?php echo get_field('country_name',$fieldid); ?></p>
    <span class="footerPaymentImg"><img src="<?php echo get_field('payment_image',$fieldid); ?>" alt=""></span>
    </div>
         <div class="weblink"> Made by  <a href="https://diablosdesigns.co.uk/" target="_blank">Diablos Designs </a> </div>
    </div>
</div>
<!-- /END FOOTER --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="<?php bloginfo( 'template_url' ); ?>/js/ie10-viewport-bug-workaround.js"></script> 

<!--<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");  
  });
});
</script>--> 

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
