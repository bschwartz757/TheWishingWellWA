<?php
/**
 * Template Name: Gateway Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>

<div class="spotlight">
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/placeimg_940_300_grayscale_animals.jpg" alt="gateway featured image"/>
<a href="<?php echo home_url(); ?>/?page_id=64"><h1>Our Mission</h1></a>
</div>

<div class="gateway-main-tile">
    <h2><?php the_title(); ?></h2>
    <p><?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?></p>
</div> <!--end gateway-main-tile-->

<?php get_sidebar(); ?>
<!--<div class="clear"></div>-->
<div class="section-tiles">
<?php get_child_pages(); ?>       
 
</div> <!--end section-tiles-->
<!--<div class="clear"></div>-->
</div> <!--close content-->    

<?php get_footer(); ?>