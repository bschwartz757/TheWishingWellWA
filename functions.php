<?php

/*
Theme Name: TheWishingWellWA
Authors: 
Site URI: 
Description: This is a custom theme developed for the ITC210/WEB210 class at SCC.
Version: 1.0
*/


// Register sidebars:
register_sidebar(array(
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

// Get my title tag:
function get_my_title_tag() {

global $post;

if (is_front_page()) {
	bloginfo('description');	
}

else if (is_page() || is_single()) {
	the_title();	
}

else {
	bloginfo('description');	
}

if ($post->post_parent) {
	echo ' | ';
	echo get_the_title($post->post_parent);	
}

	echo ' | ';
	bloginfo('name'); // site name
	echo ' | ';
	echo 'Seattle, WA';	// Write the city and state 
}

// Register menus:
register_nav_menus(array(
'main-menu' => __('Main'),
'footer-menu' => __('Footer Menu'),
'social-menu' => __('Social Menu')   
));

// Enable Featured Images & Post Thumbnails:
add_theme_support('post-thumbnails');

// Add Excerpt support:
add_post_type_support('page', 'excerpt');

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));
	if ( 1 > (int) $width || empty($caption) )
		return $content;
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
//
//Create Custom Image Sizes
add_image_size('featured-spotlight', 300, 300, array("left", "top")); //300 x 300, hard crop
add_image_size('blog-spotlight', 220, 175, array("left", "top")); //220 x 175, hard crop

//Get Child Pages
function get_child_pages(){

	global $post;

	rewind_posts(); //stops any previous loops
	query_posts(array('post_type' => 'page', 'posts_per_page'=> -1, 'post_status' => publish, 'post_parent' => $post->ID,'order'=> 'ASC','orderby' =>'menu_order'));//query and order child pages
	while (have_posts()) : the_post();

		$childPermalink = get_permalink($post->ID); //post permalink
		$childID = $post->ID; //post it
		$childTitle = $post->post_title; //post title
		$childExcerpt = $post->post_excerpt; //post excerpt
		$childImage = get_the_post_thumbnail($page->ID, 'featured-spotlight') ; //post thumbnail

		echo '<div class="tile">';
		echo $childImage;
		echo '<h1><a href="'.$childPermalink.'">' .$childTitle.'</a></h1>';
		echo '<p class="caption">'. $childExcerpt . '</p>';
		echo '</div>';

endwhile;
wp_reset_query();// reset query
}

function get_featured_image() {
	
	global $post;
	
	$theImage = get_the_post_thumbnail($page->ID, 'medium');
	$theLink = get_post_meta($post->ID, 'featured-image-link', true);
		
	echo '<figure class="featured-image">';
	
	if ($theLink) { 
	
		echo '<a href="'.$theLink.'" target="_blank" title="View: '.$theLink.'">'.$theImage.'</a>';
		
	} else {
		
		echo $theImage;
		
	}
		
	echo '</figure>';
	
}

function custom_excerpt_length( $length ) {
	return 25;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) .'">' . __( ' [<i>Read More...</i>]', 'your-text-domain' ) . '</a>';
		}
		add_filter( 'excerpt_more', 'new_excerpt_more' );

function front_page_CTA($slug) {

	$page_data = new WP_Query(array( "name" => $slug, "post_type" => "page") );
	$page_id = $page_data->post->ID;
	$page_link = get_permalink($page_id);
	$tagline = get_post_meta($page_id, 'Tagline','true');
	$title = get_the_title($page_id);
	$image = get_the_post_thumbnail($page_id,'featured-spotlight');
	echo $image;
	?>
	<h4> <?= $tagline ?></h4>
	<a href="<?= $page_link ?>">
		<h2><?= $title ?></h2>
	</a>
    <?php 
}


?>
