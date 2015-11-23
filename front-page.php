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
<img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/placeimg_940_300_grayscale_animals.jpg" alt="front page slider"/>
    <blockquote>"We give foster care children confidence by providing for their basic material needs."</blockquote>
    <h1><a href="<?php echo home_url(); ?>/?page_id=6">More Info</a></h1>
</div>

<div class="home-thumbnails">
        <div class="home-thmb first"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/puppy_300_300.jpg" alt="volunteer"/>
                <h4>Making a lasting difference in the life of a foster child</h4>
                <a href="<?php echo home_url(); ?>/?page_id=10"><h1>Volunteer</h1></a>
        </div>
        <div class="home-thmb second">             
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/kitty_300_300.jpg" alt="donate"/>
                <h4>Provide hope by donating new or gently used clothing and supplies</h4>
                <a href="<?php echo home_url(); ?>/?page_id=12"><h1>Donate</h1></a>     
        </div>
        <div class="home-thmb third">            
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/puppy_300_300.jpg" alt="events"/>
                <h4>Connect through our family-oriented experiences</h4>
                <a href="<?php echo home_url(); ?>/?page_id=14"><h1>Events</h1></a>     
        </div>   
        <div class="clear"></div>
</div> <!-- end home-thumbnails-->
<div class="clear"></div>
<div class="front-page-excerpts">
<!--This section will have two columns, blog posts on the left and facebook posts on the right. 3 of each will be shown-->

    <div class="social-excerpts blog">
    <h1>latest from the blog</h1>
        
<?php
    $query = new WP_Query( array( "posts_per_page" => 3 ) );
    while ($query->have_posts()) : $query->the_post();
?>
        
<div class="social-excerpt blog">
    <div class="excerpt-image"><?php the_post_thumbnail('thumbnail'); ?>
    </div>    
    <h2><a href="<?= the_permalink(); ?>"><?php the_title() ?></a></h2>
    <p><?= the_excerpt(); ?></p>
<div class="clear"></div>
</div>
<?php 
    endwhile;
    wp_reset_postdata();
?>

        
<!--    
    <article class="blog-excerpt">
    <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
    <h2><a href="<?php the_permalink();// links to the post ?>"><?php the_title();// gets the post title ?></a></h2>
    <p><?php the_excerpt();// gets the post excerpt ?></p>
    <?php the_post_thumbnail('thumbnail');// gets the post thumbnail ?>
    <small>Posted on <?php the_time('F j, Y');// gets the time ?> by <?php the_author();// gets the author ?> in <?php the_category(', ');// gets the category - comma separates if multiple ?></small>                         
    <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
    <?php endwhile; else : ?>
    <p><?= ('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</article> -->
       
</div> <!-- END blog-excerpts-->    
      
    <div class="social-excerpts fb"><!--facebook posts go here--> 
    <h1>latest from facebook</h1>   
<!-- Experimental FB plugin code, requires JS script -->    
<div class="fb-page" data-href="https://www.facebook.com/The-Wishing-Well-Foundation-WA-272971612747453/" data-width="500" data-height="670" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
    <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a>
        </blockquote>
    </div>
</div>
</div> <!-- end social-excerpts fb -->   
<!-- End Experimental FB plugin code, requires JS script -->    

    <!--<h1>latest from facebook</h1>

<div class="social-excerpt fb first">
    <img class="excerpt-image" src="<?php// get_stylesheet_directory_uri(); ?>/imgs/excerpt250by200.jpg" alt="featured image" width="250px"/>
    <h2>FB Post Title</h2><hr width="0"/>
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


<?php get_footer(); ?>