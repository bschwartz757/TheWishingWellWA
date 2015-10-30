<?php
// index.php

get_header();

get_sidebar();

?>

        <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
        	<article class="post-excerpt">
        		<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?>></a></h2>
                <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a><?php the_excerpt(); ?>
                <p class="read-more"><a href="<?php the_permalink(); ?>"></a>Read More</p>
        	</article>
        <?php endwhile; else : ?>
        	<p><?= ('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    	</div><!--Close content-->
        <aside>
        	<div class="sidebar">
        		<h2></h2>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, accusantium, numquam perferendis delectus dignissimos veritatis dolore at corrupti voluptate enim quo soluta unde laborum iusto consequuntur aspernatur adipisci similique quas.</p>
        		<p>Quos, quae, maiores vitae reprehenderit culpa alias molestias doloremque quis voluptates asperiores minima eum perspiciatis quam nihil repellendus provident eius suscipit numquam magni et. Sint, reiciendis ratione provident expedita tempore.</p>
        		<p>Excepturi, voluptatibus, tempore, eius qui reiciendis quidem quod suscipit quae impedit quas eum maxime ex hic ut rerum alias earum culpa sunt reprehenderit obcaecati ratione quibusdam eaque voluptatum asperiores facere.</p>
        	</div>
        </aside>
      <small>index.php</small>  
<?php get_footer(); ?>    