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

<div class="slider">
    <h1>Learn More</h1>
</div>

<div class="section home-thumbnails">
    <div class="row-1">
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 1</a>
            <div class="caption">
                <h4>Call to Action</h4>
            </div>
        </div>
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 2</a>  
            <div class="caption">
                <h4>Call to Action</h4>
            </div>            
        </div>
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 3</a>
            <div class="caption">
                <h4>Call to Action</h4>
            </div>            
        </div>        
    </div>
    <div class="row-2">
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 1</a>
            <div class="caption">
                <h4>Call to Action</h4>
            </div>            
        </div>
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 2</a>
            <div class="caption">
                <h4>Call to Action</h4>
            </div>            
        </div>
        <div class="thumbnail-3">
            <a href="#"><img src="#"/>Img 3</a>
            <div class="caption">
                <h4>Call to Action</h4>
            </div>            
        </div>        
    </div>
</div> 

<div class="front-page-excerpts">
<!--This section will have two columns, blog posts on the left and facebook posts on the right. 3 of each will be shown-->

    <div class="wp-post-excerpts">
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
        <!--facebook posts go here-->
    </div>
</div>    <!--close post-excerpts-->

<small>front-page.php</small>
</div> <!--close content-->
<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>