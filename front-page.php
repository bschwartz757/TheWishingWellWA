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
    <a href="<?php echo home_url(); ?>/?page_id=6"><h1>Learn More &gt;&gt;</h1></a>
</div>

<div class="home-thumbnails">
        <div class="home-thmb-1">            
            <div class="caption">
                <h4>Making a lasting difference in the life of a foster child</h4>
                <a href="<?php echo home_url(); ?>/?page_id=10"><h1>Volunteer &gt;&gt;</h1></a>
            </div>
        </div>
        <div class="home-thmb-2">             
            <div class="caption">
                <h4>Provide hope by donating new or gently used clothing and supplies</h4>
                <a href="<?php echo home_url(); ?>/?page_id=12"><h1>Donate &gt;&gt;</h1></a> 
            </div>            
        </div>
        <div class="home-thmb-3">            
            <div class="caption">
                <h4>Connect through our family-oriented experiences</h4>
                <a href="<?php echo home_url(); ?>/?page_id=14"><h1>Events &gt;&gt;</h1></a>
            </div>            
        </div>   
        
</div> <!-- end home-thumbnails-->
<div class="clear"></div>
<div class="front-page-excerpts">
<!--This section will have two columns, blog posts on the left and facebook posts on the right. 3 of each will be shown-->

    <div class="blog-excerpts">
    <h1>latest from the blog</h1>
    
<div class="blog-excerpt-1">
    <img class="excerpt-image" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>Blog Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#"> Read More &gt;&gt;</a></p>
</div>

<div class="blog-excerpt-2">
    <img class="excerpt-image" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>Blog Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#"> Read More &gt;&gt;</a></p>
</div>

<div class="blog-excerpt-3">
    <img class="excerpt-image" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>Blog Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#"> Read More &gt;&gt;</a></p>
</div>


    <!-- COMMENTED OUT THE LOOP FOR WIREFRAME 

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
    
    -->
    </div> <!-- END blog-excerpts-->
    
<!-- Experimental FB plugin code, requires JS script -->    
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="400" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
    <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a>
        </blockquote>
    </div>
</div>
<!-- End Experimental FB plugin code, requires JS script -->    
   
<!--facebook posts go here    
    <div class="fb-excerpts">
    <h1>latest from facebook</h1>

<div class="fb-excerpt-1">
    <img class="excerpt-image" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>FB Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#">Read More &gt;&gt;</a></p>
</div>

<div class="fb-excerpt-2">
    <img class="excerpt-image" src="<?php// echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>FB Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#">Read More &gt;&gt;</a></p>
</div>

<div class="fb-excerpt-3">
    <img class="excerpt-image" src="<?php// echo get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>FB Post Title</h2><hr width="0">
    <p>Post meta description<br/><a href="#">Read More &gt;&gt;</a></p>
</div>
       
        
    </div> end fb-excerpts -->
</div>    <!--end front-page-excerpts-->

</div> <!--close content-->
<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>