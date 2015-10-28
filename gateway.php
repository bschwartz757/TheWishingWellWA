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

<?php get_sidebar(); ?>


<div id="content" class="two-thirds left">
<?php if(have_posts()) : while(have_posts()) : the_post(); // start the loop ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>     
        <?php the_content(); ?>
<?php endwhile; endif; // end the loop ?>
</div>		<!--close content-->
<p>This page uses the gateway template! (gateway.php)</p>
<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>