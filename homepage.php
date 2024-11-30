<?php
/**
  Template Name:Home
 
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
<!-- Banner
    ================================================== -->
<div class="banner">
  <div class="container mContainer">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 bannerText">
      <?php the_content(); ?>
        <a href="<?php echo get_page_link(8); ?>" class="btn btn-primary">View Shop</a> </div>
      <div class="col-md-6 col-sm-12 col-xs-12 bannerImg"><img src="<?php echo $image[0]; ?>" alt=""></div>
    </div>
  </div>
</div>
<!-- /.banner --> 
<?php endwhile;?>


<?php
	//echo get_vimeo_data_from_id( '76979871', 'thumbnail_url' );
?>
   

<!-- Features-Products
    ================================================== -->
<div class="container mContainer">
  <div class="homeMarketing">
    <h1><span>Featured</span> Products</h1>
    <div class="row">
    
    <?php
  $args = array(
        'post_type' => 'product',
        'posts_per_page' => 3,
        'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
    $loop = new WP_Query( $args );

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); global $product;$pimage=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>

<div class="col-md-4 col-sm-4 col-xs-12">
        <div class="home_feature_img"><img src="<?php echo $pimage[0]; ?>" alt=""></div>
        <div class="home_feature_text">
          <h2><?php the_title(); ?></h2>
          <h3><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></h3>
         <h4><?php 
$terms = get_the_terms( $post->ID, 'brand');
foreach ( $terms as $term ) {
	 echo  '<a href="'.get_term_link($term->slug, 'brand').'">'.$term->name.'</a>';
  
}

?></h4>



<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>
          <a class="btn btn-default" href="<?php echo the_permalink(); ?>">View Product</a> </div>
      </div>

<?php endwhile;
wp_reset_query(); ?>


      
      <!-- /.col-lg-4 -->
   <!--   <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="home_feature_img"><img src="<?php bloginfo( 'template_url' ); ?>/images/home_feature_product_img.png" alt=""></div>
        <div class="home_feature_text">
          <h2>Adult Dog Food</h2>
          <h3>Chicken, sweet potato and Herb</h3>
          <h4>Grain free</h4>
          <a class="btn btn-default" href="product-details.html" role="button">View Product</a> </div>
      </div>-->
      <!-- /.col-lg-4 -->
      <!--<div class="col-md-4 col-sm-4 col-xs-12">
        <div class="home_feature_img"><img src="<?php bloginfo( 'template_url' ); ?>/images/home_feature_product_img.png" alt=""></div>
        <div class="home_feature_text">
          <h2>Adult Dog Food</h2>
          <h3>Chicken, sweet potato and Herb</h3>
          <h4>Grain free</h4>
          <a class="btn btn-default" href="product-details.html" role="button">View Product</a> </div>
      </div>-->
      <!-- /.col-lg-4 --> 
    </div>
    <!-- /.row --> 
    
    <a href="<?php bloginfo( 'template_url' ); ?>/shop" class="viewProductsLink">View All Products ></a> </div>
     <div class="clearfix"></div>
    <?php get_footer(); ?>