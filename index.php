<?php
/**
 * Template Name: Index Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>

        <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
        	<article class="post-excerpt">
        		<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?>></a></h2>
                <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a><?php the_excerpt(); ?>
                <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
        	</article>
        <?php endwhile; else : ?>
        	<p><?= ('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    	</div><!--Close content-->

<?php get_sidebar(); ?>                

      <small>index.php</small>  
<?php get_footer(); ?>    