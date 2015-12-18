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
    
<section class="destination-page-title clear-fix">
    <div class="destination-title-img clear-fix">
            <?php get_featured_image(); ?>
    </div>
    <div class="destination-title-excerpt">
        <h1 class="destination-title"><?php the_title(); ?></h1>
        <span class="destination-title-text"><?php the_excerpt(); ?></span>
    </div>  
</section> 
<article class="destination-content">
<!-- Need to use The Loop to get page content -->    
<?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?>
</article>    
<?php get_sidebar(); ?>

</div>		<!--close content-->

<?php get_footer(); ?>