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
   <?php the_post_thumbnail('gateway-feature'); ?>
<h1><a href="<?php echo home_url(); ?>/?page_id=64">Our Mission</a></h1>
</div>

<div class="gateway-main-tile">
    <h2><?php the_title(); ?></h2>
    <p><?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?></p>
</div> <!--end gateway-main-tile-->

<?php get_sidebar(); ?>

<div class="section-tiles">
<?php get_child_pages(); ?>       
 
</div> <!--end section-tiles-->

</div> <!--close content-->    

<?php get_footer(); ?>