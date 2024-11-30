<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="icon" href="../../favicon.ico"> -->


<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Font awesome CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Font awesome CSS -->

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Custom styles for this template -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet">


<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>


<body class='<?php if(is_page(5)) { }else { echo "inner_body";}?>'>

<?php $fieldid = 37; ?>
<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
  <div class="container mContainer">
    <div class="topHeader">
      <ul class="socialLinks">
        <li><a href="<?php echo get_field('instagram_link',$fieldid); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/top_intg_social_icon.png" alt=""></a></li>
        <li><a href="<?php echo get_field('facebook_link',$fieldid); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/top_fb_social_icon.png" alt=""></a></li>
      </ul>
      <ul class="topNavs">
        <?php
if ( is_user_logged_in() ) {?>
 <li><a href="<?php echo get_page_link( 11 ); ?>">My Account</a></li>
  <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a></li>
 <?php }else{ ?>
        <li><a href="<?php echo get_page_link( 11 ); ?>">Login</a></li>
        <?php } ?>
        <li><a href="<?php echo get_page_link( 13 ); ?>">Register</a></li>
      </ul> 
    </div>
    <nav class="navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <ul class="socialLinks">
          <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/top_intg_social_icon.png" alt=""></a></li>
          <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/top_fb_social_icon.png" alt=""></a></li>
        </ul>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt=""></a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
             <?php
$args = array(
 'order'                  => 'ASC',
 'orderby'                => 'menu_order',
'post_type'              => 'nav_menu_item',
 'post_status'            => 'publish',
 'output'                 => ARRAY_A,
 'output_key'             => 'menu_order',
 'nopaging'               => true,
'update_post_term_cache' => false );
 $items = wp_get_nav_menu_items( 'Menu', $args );
 $page_url = get_permalink();
 foreach($items as $item ) :
 ?>
          <li <?php if($item->url == $page_url){?>class="active"<?php }?>><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
          <?php endforeach;?>
        </ul>
        <ul class="topNavs"><?php
if ( is_user_logged_in() ) {?>
 <li><a href="<?php echo get_page_link( 11 ); ?>">My Account</a></li>
  <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a></li>
 <?php }else{ ?>
        <li><a href="<?php echo get_page_link( 11 ); ?>">Login</a></li>
        <?php } ?>
        <li><a href="<?php echo get_page_link( 13 ); ?>">Register</a></li>
      </ul>
        <a href="<?php echo get_page_link( 9 ); ?>" class="topBasket">Basket</a> <a href="#" class="topSearch"><img src="<?php bloginfo( 'template_url' ); ?>/images/search_icon.png" alt="" onclick="myFunction()">
        <div id="myDIV" style="display:none;">
          <div class="form-group"><?php //echo do_shortcode('[smart_search id="1"]'); ?>
            <div class="input-group">
              <!--<input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
              </div>-->
              <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'woocommerce' ); ?></label>
	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><?php echo esc_html_x( '', 'submit button', 'woocommerce' ); ?></button>
	<input type="hidden" name="post_type" value="product" />
</form>
              <!--<form action="<?php echo home_url(); ?>" id="search-form" method="get">
              <input type="text" name="s" id="s" value="Search" onblur="if(this.value=='')this.value='Search'"
    onfocus="if(this.value=='Search')this.value=''"  class="form-control"/>
    
            </form>-->
            
            
            </div>
          </div>
        </div>
        </a> </div>
    </nav>
  </div>
</div>
