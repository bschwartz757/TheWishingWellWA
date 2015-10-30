<!DOCTYPE html>
<html>
<head>
<title><?php get_my_title_tag(); ?></title>
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />  

<!--Meta-->
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- Start WP Head -->
<?php wp_head(); ?>


<!-- End WP Head -->
  
</head>
<body <?php body_class(); ?> id="home">

<div id="wrapper">

<header> 
    <div class="logo">
        <a href="#"><img src="#"/>Logo!</a>
    </div>
    <div class="social-icons">
        <ul>
            <li><a href="#"><img src="#"/>Facebook</a></li>
            <li><a href="#"><img src="#"/>Twitter</a></li>
        </ul>    
    </div>  
    <div class="donate-button">
        <button type="submit" class="btn-success">Donate</button>
    </div>    
    
<!-- Begin new Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu','container' => 'nav','container_id' => 'nav-main')); ?>
<!-- End new Navigation -->
</header>
    
<div class="content">    