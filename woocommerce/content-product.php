<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<!-- <li class="col-md-4 col-sm-6 col-xs-12"> 
 <a href="#"> <span class="home_feature_img"><img src="images/home_feature_product_img.png" alt=""></span> </a>
              <div class="home_feature_text">
                <h2><a href="#">Adult Dog Food</a></h2>
                <h3><a href="#">Chicken, sweet potato and Herb</a></h3>
                <h4><a href="#">Grain free</a></h4>
                <a class="btn btn-default" href="product-details.html" role="button">View Product</a> 
                </div>
            </li>-->
<li  class="col-md-4 col-sm-6 col-xs-12">
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
?>
<span class="home_feature_img">
<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
?>

</span>  <div class="home_feature_text">

<?php 
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
?>
 <h3><a href="#"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></a></h3>
                 <h4><?php 
$terms = get_the_terms( $post->ID, 'brand');
foreach ( $terms as $term ) {
	 echo  '<a href="'.get_term_link($term->slug, 'brand').'">'.$term->name.'</a>';
  
}

?></h4><?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>
<?php

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>
     <a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">View Product</a> 
     </div>
</li>
