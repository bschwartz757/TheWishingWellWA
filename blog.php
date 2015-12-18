<?php
/**
 * Template Name: Blog Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
    
    <?php if(have_posts()) : while(have_posts()) : the_post();// start the loop ?>
<article class="post-excerpt">
    <h2><a href="<?php the_permalink();// links to the post ?>"><?php the_title();// gets the post title ?></a></h2>
    <small>Posted on <?php the_time('F j, Y');// gets the time ?> by <?php the_author();// gets the author ?> in <?php the_category(', ');// gets the category ?></small>
    <?php the_post_thumbnail('thumbnail');// gets the post thumbnail ?>
    <?php the_excerpt();// gets the post excerpt ?>
 </article>    
    <?php endwhile; else;// end the loop ?>
        <p><?php e_('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>   

<?php get_sidebar(); ?>

</div>		<!--close content-->

<?php get_footer(); ?>