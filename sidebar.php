<!-- Begin new Subnav -->

<!-- Begin Sidebar -->

<div id="sidebar">

<nav id="nav-sub" class="one-third right">

		<?php if (is_page()) : ;?>
        
        <h3><?php echo get_the_title($post->post_parent); // get the gateway page title 
		
		?></h3>
        
        <ul>

<?php if ($post->post_parent) {
	
	wp_list_pages(array('child_of' => $post->post_parent,'title_li' => '',));
	
} else {
	
	wp_list_pages(array('child_of' => $post->ID,'title_li' => '',));
		
}

?>
</ul>
<?php endif; ?>

<?php if(!(is_page())) : ?>

        <h3>Blog</h3>
        
    <ul>
    
    <?php wp_list_categories(array('title_li' => ''));?>
    
    </ul>
  
  <?php endif; ?>

<!--Begin Pullquote-->

<?php if(get_post_meta($post->ID, 'Quote', true)) : ?>

<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>

<?php endif; ?>

<!--End Pullquote-->

<!--Begin dynamic sidebar-->

<?php dynamic_sidebar(); ?>

<!--End dynamic sidebar-->



</div>		<!--End sidebar-->