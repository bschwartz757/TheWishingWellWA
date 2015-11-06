
<!-- Start conventional footer -->
<footer>
    
<!-- Start footer menu -->
<?php wp_nav_menu(array('theme_location' => 'footer_menu','container' => 'div','container_id' => 'links')); ?>   
<!-- End footer menu -->

    <p>&copy;2015-<?php print("" . date('Y') . ""); ?>The Wishing Well</p>
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