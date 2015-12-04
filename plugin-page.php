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
       
<article class="plugin-content">
    <h3><?php the_title(); ?> Template</h3>
<?php if(have_posts()) : the_post(); ?>
 <?php the_content(); ?>
    <?php endif; ?>
</article>    

<?php get_sidebar(); ?>

</div>		<!--close content-->

<?php get_footer(); ?>