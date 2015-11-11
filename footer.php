
<!-- Start conventional footer -->
<footer>
 
<div class="social-icons">
    <ul class="social-icons-ul">
        <li class="icon"><a class="flaticon-facebook3" href="#"></a></li>
        <li class="icon"><a class="flaticon-twitter" href="#"></a></li>
        <li class="icon"><a class="flaticon-socialnetwork348" href="#"></a></li>
        <li class="icon"><a class="flaticon-tumblr1" href="#"></a></li>
    </ul>  
</div> 
<div class="donate-button">
    <button type="submit" class="btn-success">Donate</button>
</div>  
<div class="clear"></div>
<!--<div class="footer-nav">
    <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Volunteer</a></li>
        <li><a href="#">Donate</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#">Resources</a></li>        
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>        
    </ul>
</div> -->   
    
<!-- Start wp Footer Menu -->
        <!-- <?php var_dump($post) ?> -->
<?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'div','container_id' => 'links')); ?>
<!-- End wp Footer Menu -->

    <p>&copy; The Wishing Well 2015 - <?php print("" . date('Y') . ""); ?></p>
</footer>
<!-- close conventional footer -->

<!-- Start WP Footer - contains js scripts, etc. -->
<?php wp_footer(); ?>

<!-- End WP Footer -->

</div><!--  close wrapper  -->

</body>
</html>