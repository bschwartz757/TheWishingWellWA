
<!-- Start footer -->
<footer>            
    
    <div class="social-icons">    
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="#"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="#"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="#"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="#"></a></li>
        </ul>  
    </div>
        <div class="donate-button footer">
            <a href="#">Donate</a>
        </div>  
<div class="clear"></div>  
    
<!-- Start wp Footer Menu -->

<?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'nav','container_id' => 'nav-footer')); ?>
<!-- End wp Footer Menu -->

    <p>&copy; The Wishing Well 2015 - <?php print("" . date('Y') . ""); ?></p>
</footer>
<!-- close footer -->

<!-- Start WP Footer - contains js scripts, etc. -->
<?php wp_footer(); ?>

<!-- End WP Footer -->

</div><!--  close wrapper  -->

</body>
</html>