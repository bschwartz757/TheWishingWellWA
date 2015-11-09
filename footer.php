
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
<div class="footer-nav">
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
</div>    
    
<!-- Start footer menu -->
<?php// wp_nav_menu(array('theme_location' => 'footer_menu','container' => 'div','container_id' => 'links')); ?>   
<!-- End footer menu -->

    <p>&copy; The Wishing Well 2015 - <?php print("" . date('Y') . ""); ?></p>
</footer>
<!-- close conventional footer -->

<!-- Start WP Footer - contains js scripts, etc. -->
<?php wp_footer(); ?>

<!-- End WP Footer -->

</div><!--  close wrapper  -->

<!-- begin validation buttons -->
 <a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
 </a>
<!-- end validation buttons -->

</body>
</html>