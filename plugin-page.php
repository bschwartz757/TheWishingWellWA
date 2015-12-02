<?php
/**
 * Template Name: Plugin Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
    
<div class="page-title">
    <div class="thumbnail-2">
    </div>
    <div class="page-text">
        <h1 class="title"><?php the_title(); ?></h1>
        
    </div>  
</div>    
<article class="plugin-content">
    <h3><?php the_title(); ?> Template</h3>
</article>    

<?php get_sidebar(); ?>

</div>		<!--close content-->

<?php get_footer(); ?>