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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!--Meta-->
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />

<!-- Start WP Head -->
<?php wp_head(); ?>


<!-- End WP Head -->

</head>
  
<!-- FB plugin JavaScript -->    
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script> 
<!-- End FB plugin JavaScript -->     
    
<body <?php body_class(); ?> class="home">


<header class="clear-fix">
    <div class="inside-header"> 
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img class="logo-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png" alt="Wishing Well logo" width="350px"/><img class="logo-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-small.png" alt="Wishing Well logo" width="0px"/></a>
    </div>
    <div class="social-icons">    
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="https://www.facebook.com/The-Wishing-Well-Foundation-WA-272971612747453/?fref=ts" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="https://twitter.com/" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="https://www.pinterest.com/" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="https://www.tumblr.com/" target="_blank"></a></li>
        </ul>  
    </div> <!--end social-icons-->    

    <div class="donate-button header">
        <a href="http://www.paypal.com" target="_blank">Donate</a>
    </div> 
    </div> <!---END inside-header--> 
</header>    

<nav id="nav-mobile">			<!--Responsive toggle nav-->
    </a><a class="menu-button">&#9776;  MENU</a>
    <ul id="nav-toggle">
    	<li><a href="#">About</a>
        	<ul class="fallback">
            	<li><a href="<?php echo home_url(); ?>/about/mission" >Mission</a>
                <li><a href="<?php echo home_url(); ?>/about/history">History</a>
                <li><a href="<?php echo home_url(); ?>/about/staff">Staff</a>
                <li><a href="<?php echo home_url(); ?>/about/testimonials">Testimonials</a>
                <li><a href="<?php echo home_url(); ?>/about/funding">Funding</a>
                <li><a href="<?php echo home_url(); ?>/about/partners">Partners</a>
            </ul> 
        </li>           
        <li><a href="<?php echo home_url(); ?>/volunteer">Volunteer</a></li>
        <li><a href="<?php echo home_url(); ?>/donate">Donate</a></li>
        <li><a href="<?php echo home_url(); ?>/">Events</a></li>
        <li><a href="<?php echo home_url(); ?>/photos">Photos</a></li>
        <li><a href="<?php echo home_url(); ?>/resources">Resources</a>                
        	<ul class="fallback">
            	<li><a href="<?php echo home_url(); ?>/resources/forms">Inquiry Form</a>
                <li><a href="<?php echo home_url(); ?>/resources/services">Services</a>
            </ul> 
        </li>            
        <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>  
        <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>                             
    </ul>
</nav>

<nav class="color">
<div class="inside-nav">
<!-- Begin new Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu','container' => 'nav','container_class' => 'nav-main')); ?>
<!-- End new Navigation -->
</div> <!-- End inside-nav -->
</nav>
<div class="content">    





