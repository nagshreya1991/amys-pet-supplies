<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="container mContainer">
		<!--<div id="container">
			<div id="content" role="main">-->

<?php
	/*
	 * Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>


<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	//rewind_posts();

	/*
	 * Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	//get_template_part( 'loop', 'archive' );
?>
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
         
          <?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			//get_template_part( 'loop', 'page' );
woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

			?>
          
        </div>
        <!--<ul class="pagi">
          <li class="prev"><a href="#">< Prev Page</a></li>
          <li class="next"><a href="#">Next Page ></a></li>
        </ul>-->
      </div>
    </div>
  </div>
			<!--</div> #content -->
	<!-- 	</div>#container -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
