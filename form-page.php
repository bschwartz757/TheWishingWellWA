<?php
/**
 * Template Name: Form Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
       
       <div class="clear-fix">
<article class="plugin-content">
	<div id="contact-form">
<?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?>
    </div>  
</article>  

<?php get_sidebar(); ?>
 </div>

</div>		<!--close content-->

<?php get_footer(); ?>