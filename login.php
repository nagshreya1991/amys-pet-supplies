<?php
/**
  Template Name:Login
 
 */

get_header(); ?>

<style>.logDDIV-BTN { background: #61b3ac !important;
    padding: 14px 35px !important;
    color: #fff !important;
    display: inline-block !important;
    font-size: 17px !important;
    border-radius: 50px !important;
    text-decoration: none !important;}
    .entry-title { display:none}
    </style> 
<!--login part-->
 <div class="log-in-style">
          <div class="log-in-style-part <?php
if ( is_user_logged_in() ) { echo "Myacc";} ?>">
          
          
			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
            <!--<h2> Member's Login </h2>
            <div class="form-group">
              <label for="usr">First Name<sup>*</sup>:</label>
              <input type="text" class="form-control" placeholder="Type here" id="usr">
            </div>
            <div class="form-group">
              <label for="usr">Email<sup>*</sup>:</label>
              <input type="text" class="form-control" placeholder="Type here" id="usr">
            </div> 
            <a href="#" class="logDDIV-BTN"> Login </a> 
            <a href="forgot-password.html" class="ForgotDiv"> Forgot Password? </a> -->
        </div>
      </div>


<!--login part-->


  <?php get_footer(); ?>