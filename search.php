<?php
/**
 * Template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<style>
.entry-title a { color: #000;
    font-size: 23px;
    margin: 0 0 13px 0;}
	.page-title { padding: 0 0 46px 0;}
	.home_marketing { padding: 26px 0 0 0;}
	.entry-summary p { font-family: 'Montserrat', sans-serif;}
	.entry-summary p a { color:#cd5091;  text-decoration: none;}
	
	
	
	
	
	
</style>

<div class="container mContainer">

<?php  if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				 <div class="shopItemList searchshop-only">
          <?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'search' );
  
			?>
            </div>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		

<?php get_footer(); ?>
