<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>

<div class="home-slider">
    <blockquote>We give foster care children confidence by providing for their basic material needs."</blockquote>
    <h1>Learn More &gt;&gt;</h1>
</div>

<div class="home-thumbnails">
        <div class="home-thmb-1">
            <a href="#"></a>
            <div class="caption">
                <h4>Volunteer</h4>
            </div>
        </div>
        <div class="home-thmb-2">
            <a href="#"></a>  
            <div class="caption">
                <h4>Donate</h4>
            </div>            
        </div>
        <div class="home-thmb-3">
            <a href="#"></a>
            <div class="caption">
                <h4>Events</h4>
            </div>            
        </div>       
</div> <!-- end home-thumbnails-->

<div class="front-page-excerpts">
<!--This section will have two columns, blog posts on the left and facebook posts on the right. 3 of each will be shown-->

    <div class="blog-excerpts">
    <h1>latest from the blog</h1>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home-blog-excerpts.png" alt="Recent Blog Posts"/>
    <?php if(have_posts()) : while(have_posts()) : the_post(); // start the loop ?>
            <article class="post-excerpt">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
            <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
            <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>           
            <?php the_excerpt(); ?>
            <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>        
            </article>
    <?php endwhile; endif; // end the loop ?>
    </div>
    <div class="fb-post-excerpts">
    <h1>latest from facebook</h1>
        <!--facebook posts go here-->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/home-fb-excerpts.png" alt="Recent Blog Posts"/>
    </div>
</div>    <!--close front-page-excerpts-->

</div> <!--close content-->
<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>