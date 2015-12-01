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

<div class="spotlight">
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/placeimg_940_300_grayscale_animals.jpg" alt="gateway featured image"/>
<a href="<?php echo home_url(); ?>/?page_id=64"><h1>Our Mission</h1></a>
</div>

<div class="gateway-main-tile">
    <h2>About</h2>
    <p>Bacon ipsum dolor amet venison prosciutto hamburger, alcatra biltong tail drumstick porchetta flank shoulder. Andouille porchetta kielbasa cupim. Tongue biltong meatloaf, kielbasa pork venison pork belly pastrami corned beef t-bone pork chop landjaeger short ribs chuck. Pork prosciutto leberkas doner tongue meatball salami pork chop ham strip steak tenderloin beef drumstick chuck. Pork chop corned beef bresaola sausage tri-tip short ribs boudin pork belly biltong hamburger ball tip.</p>
</div> <!--end gateway-main-tile-->

<?php get_sidebar(); ?>
<!--<div class="clear"></div>-->
<div class="section-tiles">
<?php get_child_pages(); ?>

        <!-- <div class="tile first">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/kitty_300_300.jpg" alt="tile image"/>
            <div class="caption">
              <a href="<?php echo home_url(); ?>/?page_id=64"><h1>Mission &gt;&gt;</h1></a>
            </div>
        </div>
        <div class="tile second"> 
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/puppy_300_300.jpg" alt="tile image"/>
            <div class="caption">
                <a href="<?php echo home_url(); ?>/?page_id=66"><h1>History &gt;&gt;</h1></a>
            </div>            
        </div>
        <div class="tile third">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/kitty_300_300.jpg" alt="tile image"/>
            <div class="caption">
                <a href="<?php echo home_url(); ?>/?page_id=68"><h1>Staff &gt;&gt;</h1></a>
            </div>            
        </div>        
        <div class="tile first">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/puppy_300_300.jpg" alt="tile image"/>
            <div class="caption">
                <a href="<?php echo home_url(); ?>/?page_id=20"><h1>Testimonials &gt;&gt;</h1></a>
            </div>            
        </div>
        <div class="tile second">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/kitty_300_300.jpg" alt="tile image"/>
            <div class="caption">
                <a href="<?php echo home_url(); ?>/?page_id=22"><h1>Funding &gt;&gt;</h1></a>
            </div>            
        </div>
        <div class="tile third">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/puppy_300_300.jpg" alt="tile image"/>
            <div class="caption">
                <a href="<?php echo home_url(); ?>/?page_id=24"><h1>Partners &gt;&gt;</h1></a>
            </div>            
        </div> -->        
 
</div> <!--end section-tiles-->
<!--<div class="clear"></div>-->
</div> <!--close content-->    

<?php get_footer(); ?>