<?php
/**
  Template Name:Registration
 
 */

get_header(); ?>


<!--registrations part-->
<div class="log-in-style">
  <div class="log-in-style-part">
    <h2> Registrations </h2>
   <!-- <div class="form-group">
      <label for="usr">First Name<sup>*</sup>:</label>
      <input type="text" class="form-control" placeholder="Type here" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Last Name<sup>*</sup>:</label>
      <input type="text" class="form-control" placeholder="Type here" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Email<sup>*</sup>:</label>
      <input type="text" class="form-control" placeholder="Type here" id="usr">
    </div>-->
    
    <!--<div class="form-group">
   <label for="usr">Country<sup>*</sup>:</label>
   <div class="form-group"> 
   <select class="form-control" id="sel1">
   <option>Country</option>
   </select>
</div>
      
    </div>-->
    
    <!--<div class="form-group">
      <label for="usr">Password<sup>*</sup>:</label>
      <input type="Password" class="form-control" placeholder="Type here" id="usr">
    </div>
    <div class="form-group">
      <label for="usr">Confirm Password<sup>*</sup>:</label>
      <input type="Password" class="form-control" placeholder="Type here" id="usr">
    </div>-->
    <!--<label class="checkbox-inline">
      <input type="checkbox" value="">
      Sign Up means you're okay with our <a href=""> Terms and conditions </a></label>
    <div class="full" style="width:100%; float:left;"> <a href="general-user-my-account.html" class="logDDIV-BTN" style="margin-top:30px;"> Submit </a> </div>-->
    <?php echo do_shortcode('[user_registration_form id="64"]'); ?>
  </div>
</div>



  <?php get_footer(); ?>