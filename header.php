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
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/flaticon.css">  

<!--Meta-->
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- Start WP Head -->
<?php wp_head(); ?>


<!-- End WP Head -->
  
</head>
<body <?php body_class(); ?> class="home">

<div class="wrapper">

<header> 
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/wwflogo.jpg" alt="Wishing Well logo" width="350px"/></a>
    </div>
    <div class="social-icons">
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="#"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="#"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="#"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="#"></a></li>
        </ul>  
    </div> 
<div class="clear"></div>
    <div class="donate-button">
        <button type="submit" class="btn-success">Donate</button>
    </div>   
    
<!-- Begin new Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu','container' => 'nav','container_id' => 'nav-main')); ?>
<!-- End new Navigation -->
</header> 
<div class="content">    