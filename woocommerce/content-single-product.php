<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<style>
.entry-utility { display:none;}
.entry-title { display:none;}
.entry-meta { display:none;}
.comment-respond { display:none;}
#comments { display:none;}
.commentlist { display:none;}

</style>

<!-- Features-Products
    ================================================== -->
 

<div class="container mContainer">  <?php woocommerce_breadcrumb(); ?><a href="<?php echo get_page_link( 8 ); ?>" class="back_to_products_btn">Back to products</a> 
  <div class="row">
    <div class="col-md-5 col-sm-12 col-xs-12 product_details_img">
     <!-- <div class="outer">
        <div id="big" class="owl-carousel owl-theme">
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
        </div>
        <div id="thumbs" class="owl-carousel owl-theme">
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
          <div class="item"> <img src="images/product-details-img.png"> </div>
        </div>
      </div>-->
      <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
      <!--<img src="images/product-details-img.png" alt="">--> 
      
    </div>
    <div class="col-md-7 col-sm-12 col-xs-12 product_details_text">
      <h1><?php the_title(); ?></h1>
      <h3><?php //echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?><?php 
$product_catterms = get_the_terms( $post->ID, 'product_cat');
foreach ( $product_catterms as $proterm ) {
   echo  $proterm->name; echo " ";
}

?></h3>
      <h4><?php 
$terms = get_the_terms( $post->ID, 'brand');
foreach ( $terms as $term ) {
	 echo  '<a href="'.get_term_link($term->slug, 'brand').'">'.$term->name.'</a>';
  
}

?></h4>
      <span class="price_span"><?php echo $product->get_price_html(); ?></span> <span class="rating_span"><img src="<?php bloginfo( 'template_url' ); ?>images/rating_star_img.png" alt=""></span><?php global $comment;
$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

if ( $rating && wc_review_ratings_enabled() ) {
	echo wc_get_rating_html( $rating ); // WPCS: XSS ok.
} ?>
      <div class="clearfix"></div>
      <!--<input type="text" name="" value="Size" class="size_input">
      <input type="text" name="" value="1" class="quatity_input">
      <a href="cart.html">
      <input type="button" name="" value="Add to basket" class="btn btn-primary">-->
      <?php /*?><form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form><?php */?>
    <div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

      <div class="clearfix"></div>
      <div class="border_div"></div>
     <?php the_content(); ?>
      <!--<ul>
	 
    <?php  $comments = get_comments(array(
  'post_id' => $post->ID,
));
foreach($comments as $comment) {?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container">

		<?php
		/**
		 * The woocommerce_review_before hook
		 *
		 * @hooked woocommerce_review_display_gravatar - 10
		 */
		do_action( 'woocommerce_review_before', $comment );
		?>

		<div class="comment-text">

			<?php
			/**
			 * The woocommerce_review_before_comment_meta hook.
			 *
			 * @hooked woocommerce_review_display_rating - 10
			 */
			do_action( 'woocommerce_review_before_comment_meta', $comment );

			/**
			 * The woocommerce_review_meta hook.
			 *
			 * @hooked woocommerce_review_display_meta - 10
			 */
			do_action( 'woocommerce_review_meta', $comment );

			do_action( 'woocommerce_review_before_comment_text', $comment );

			/**
			 * The woocommerce_review_comment_text hook
			 *
			 * @hooked woocommerce_review_display_comment_text - 10
			 */
			do_action( 'woocommerce_review_comment_text', $comment );

			do_action( 'woocommerce_review_after_comment_text', $comment );
			?>

		</div>
	</div>
	 </li>
     <?php } 
	?> </ul>-->
	 
     <?php $composition = get_field('composition'); if(!empty($composition)){?>
     <h3>Composition</h3>
     <?php 
		echo $composition;	}
				//echo do_shortcode('[cusrev_reviews_grid]'); ?>
                
              
    </div>
  </div>
</div>




<?php //do_action( 'woocommerce_after_single_product' ); ?>
