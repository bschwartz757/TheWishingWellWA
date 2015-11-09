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
    
<div class="page-title">
    <div class="thumbnail-2">
    </div>
    <div class="page-text">
        <h1 class="title">Blogs</h1>
        
    </div>  
</div>    
<article class="blog-content">
    <h3>Latest Blog</h3>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/placeimg_140_140_grayscale_animals.jpg" alt="thumbnail"/>
    <p>Bacon ipsum dolor amet venison prosciutto hamburger, alcatra biltong tail drumstick porchetta flank shoulder. Andouille porchetta kielbasa cupim.</p>
    <p>Andouille porchetta kielbasa cupim.Bacon ipsum dolor amet venison prosciutto hamburger, alcatra biltong tail drumstick porchetta flank shoulder.</p>
    <p>Pork prosciutto leberkas doner tongue meatball salami pork chop ham strip steak tenderloin beef drumstick chuck.</p>

</article>    

<?php get_sidebar(); ?>

</div>		<!--close content-->

<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>