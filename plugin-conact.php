<?php
/**
 * Template Name: Contact Page
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
    <h3><?php the_title(); ?> Template</h3>
<?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?>
    </div>  
</article>  

<?php get_sidebar(); ?>
 </div>

</div>		<!--close content-->

<?php get_footer(); ?>