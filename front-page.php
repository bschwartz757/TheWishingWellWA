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
<?php the_post_thumbnail('gateway-feature'); ?>
    <blockquote>"We give foster care children confidence by providing for their basic material needs."</blockquote>
    <span class="home-slider-caption"><h1><a href="<?php echo home_url(); ?>/?page_id=6">More Info</a></h1></span>
</div>

<div class="section-tiles clear-fix">
        <div class="tile clear-fix"> 
        <?php front_page_CTA("volunteer"); ?>
        </div>
        <div class="tile clear-fix">  
        <?php front_page_CTA("donate"); ?> 
        </div>
        <div class="tile clear-fix">  
        <?php front_page_CTA("events"); ?>
        </div>   

</div> <!-- end home-thumbnails-->

<div class="front-page-excerpts">
<!--This section will have two columns, blog posts on the left and facebook posts on the right. 3 of each will be shown-->

    <div class="social-excerpts blog">
    <h1><a href="<?php echo home_url(); ?>/blog">latest from the blog</a></h1>
        
<?php
    $query = new WP_Query( array( "posts_per_page" => 3 ) );
    while ($query->have_posts()) : $query->the_post();
?>
        
<div class="social-excerpt blog">

    
    <div class="excerpt-image clear-fix"><?php the_post_thumbnail('blog-spotlight'); ?>
    </div>   
    <h2><a href="<?= the_permalink(); ?>"><?php the_title() ?></a></h2>
    <?= the_excerpt(); ?>

</div>
<?php 
    endwhile;
    wp_reset_postdata();
?>
       
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

</div>    <!--end front-page-excerpts-->

</div> <!--close content-->


<?php get_footer(); ?>