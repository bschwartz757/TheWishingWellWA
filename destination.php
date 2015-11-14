<?php
/**
 * Template Name: Destination Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
    
<div class="destination-page-title">
    <div class="destination-title-img">
            <?php// the_post_thumbnail('medium'); ?>
    </div>
    <div class="title-text">
        <h1 class="title"><?php the_title(); ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, accusantium, numquam perferendis delectus dignissimos veritatis dolore at corrupti voluptate enim quo soluta unde laborum iusto consequuntur aspernatur adipisci similique quas.</p>
        <?php the_excerpt(); ?>
    </div>  
</div>    
<article class="destination-content">
    <!-- <?php var_dump($post) ?> -->
    <p>Quos, quae, maiores vitae reprehenderit culpa alias molestias doloremque quis voluptates asperiores minima eum perspiciatis quam nihil repellendus provident eius suscipit numquam magni et. Sint, reiciendis ratione provident expedita tempore.</p>
        		<p>Excepturi, voluptatibus, tempore, eius qui reiciendis quidem quod suscipit quae impedit quas eum maxime ex hic ut rerum alias earum culpa sunt reprehenderit obcaecati ratione quibusdam eaque voluptatum asperiores facere.</p>
 <?php the_content(); ?>
 </article>    

<?php get_sidebar(); ?>

<!--<p class="top-link"><a href="#nav-main">Back to top</a></p>-->

</div>		<!--close content-->

<?php get_footer(); ?>