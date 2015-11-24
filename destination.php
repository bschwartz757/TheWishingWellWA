<?php
/**
 * Template Name: Destination Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
    
<div class="destination-page-title">
    <div class="destination-title-img">
            <?php get_featured_image(); ?>
    </div>
    <div class="title-text">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
    </div>  
</div> 
<div class="clear"></div>
<article class="destination-content">
<!-- Need to use The Loop to get page content -->    
<?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?>
 </article>    
<?php get_sidebar(); ?>

<!--<p class="top-link"><a href="#nav-main">Back to top</a></p>-->

</div>		<!--close content-->

<?php get_footer(); ?>