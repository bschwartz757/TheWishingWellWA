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
        
         
<article class="blog-page-content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
    <div class="single-blog">
    
    <div class="blog-image"><?php the_post_thumbnail('medium');// gets the post thumbnail ?></div>   
    <h2><a href="<?php the_permalink();// links to the post ?>"><?php the_title();// gets the post title ?></a></h2>
    <p><?= the_excerpt(); ?></p>
    <p class="meta">Posted on <?php the_time('F j, Y');// gets the time ?> by <?php the_author();// gets the author ?> in <?php the_category(', ');// gets the category - comma separates if multiple ?></p>
    <div class="clear-fix"></div>
     </div>
    <?php endwhile; else : ?>
    <p><?= ('Sorry, no posts matched your criteria.'); ?></p>
    </div>
    
    <?php endif; ?>
    <div class="clear-fix"></div>
</article> 
<?php get_sidebar(); ?>

    	</div><!--Close content-->

                
<?php get_footer(); ?>    