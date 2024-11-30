<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="container mContainer">
<?php if( is_shop() || is_product_category() ){ ?>

<style>.entry-title { display:none}
.entry-meta { display:none}
.woocommerce-result-count { display:none;}
.entry-utility { display:none}
.nocomments { display:none}
</style>
<!--  <div class="offerTag">LAST DATE FOR GUARANTEED DELIVERY BEFORE CHRISTMAS IS WEDNESDAY 16TH DECEMBER 2020 <a href="#" class="crossTag"><img src="<?php bloginfo( 'template_url' ); ?>/images/white_cross.png" alt=""></a></div>-->
  <?php woocommerce_breadcrumb(); ?>

    <div class="homeMarketing">
    <h1><span>All</span> Products</h1>
    <div class="row">
      <?php 
	  get_sidebar(); ?>
     
      <div class="col-md-9 col-sm-8 right_shop">
        <!--<div class="filterTop">
          <ul class="filterList">
            <li><a href="#">Filter by</a></li>
            <li><a href="#">Newest</a></li>
          </ul>
        </div>-->
        <div class="row">
          <ul class="shopItemList">
          <?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
  
			?>
            </ul>
        </div>
        <!--<ul class="pagi">
          <li class="prev"><a href="#">< Prev Page</a></li>
          <li class="next"><a href="#">Next Page ></a></li>
        </ul>-->
      </div>
    </div>
  </div>
          
  <?php } else {?>

			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
  }
			?>
 </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
