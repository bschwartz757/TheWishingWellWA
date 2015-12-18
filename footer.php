
<!-- Start footer -->
<footer>
    
    <div class="inside-footer">          
    
    <div class="social-icons">    
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="https://www.facebook.com/The-Wishing-Well-Foundation-WA-272971612747453/?fref=ts" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="https://twitter.com/" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="https://www.pinterest.com/" target="_blank"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="https://www.tumblr.com/" target="_blank"></a></li>
        </ul>  
    </div>
        <div class="donate-button footer">
            <a href="http://www.paypal.com" target="_blank">Donate</a>
        </div>  

<div class="clear"></div>  
    
<!-- Start wp Footer Menu -->

<?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'nav','container_class' => 'nav-footer')); ?>
<!-- End wp Footer Menu -->

</div> <!--- Closes Inside Footer -->

    <p>&copy; The Wishing Well 2015 - <?php print("" . date('Y') . ""); ?></p>
</footer>
<!-- close footer -->

<!-- Start WP Footer - contains js scripts, etc. -->
<?php wp_footer(); ?>

<!-- End WP Footer -->


<script>
<!--Toggle Nav Menu (mobile) - USES JQUERY-->
$(window).load(function() { // enable function upon window load
$(".menu-button").click(function() { // when toggle is clicked...
$("#nav-toggle").toggle(); // ... open or close the navigation
});
});
<!--End Toggle Nav Menu (mobile)-->
</script>

</body>
</html>