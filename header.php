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
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img class="logo-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png" alt="Wishing Well logo" width="350px"/><img class="logo-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo-small.png" alt="Wishing Well logo" width="0px"/></a>
    </div>
    <div class="social-icons">    
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="#"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="#"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="#"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="#"></a></li>
        </ul>  
    </div> <!--end social-icons-->    
    <!--<div class="clear"></div>-->
    <div class="donate-button header">
        <a href="#">Donate</a>
    </div>  
</header>    



<nav id="nav-mobile">			<!--Responsive toggle nav-->
    </a><a class="menu-button">&#9776;  MENU</a>
    <ul id="nav-toggle">
    	<li><a href="#">About</a>
        	<ul class="fallback">
            	<li><a href="#">Mission</a>
                <li><a href="#">History</a>
                <li><a href="#">Staff</a>
                <li><a href="#">Testimonials</a>
                <li><a href="#">Funding</a>
                <li><a href="#">Partners</a>
            </ul> 
        </li>           
        <li><a href="#">Volunteer</a></li>
        <li><a href="#">Donate</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#">Resources</a>                
        	<ul class="fallback">
            	<li><a href="#">Forms</a>
                <li><a href="#">Services</a>
            </ul> 
        </li>            
        <li><a href="#">Blog</a></li>  
        <li><a href="#">Contact</a></li>                             
    </ul>
</nav>



<!-- Begin new Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu','container' => 'nav','container_class' => 'nav-main')); ?>
<!-- End new Navigation -->
<div class="content">    