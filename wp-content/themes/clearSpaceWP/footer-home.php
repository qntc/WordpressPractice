<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package styl_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerWrapperHome">
			<div class="site-info">
				<p>	Smart. Simple. Creative.</p>
				<p class="copyrightText"> &copy; <?php echo date('Y'); ?> Clear Space</p>
				<div class="socialIcons">
					<div class="social1">
						<a href="https://www.behance.net/clearspace" target="_blank"></a>
					</div>
<!--					<div class="social2">
						<a href="#"></a>
					</div>
-->
					<div class="social3">
						<a href="https://www.instagram.com/clearspacedesign/" target="_blank"></a>
					</div>
				</div>
			</div><!-- .site-info -->

			
		</div> <!-- end .footerWrapper -->	
		</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


<script>

	if ($(window).width() >= 814) {
		var slider = document.querySelector('.Wallop');
	  var Wallop = new Wallop(slider);

	  Wallop.on('change', function(e) {
	    
	  });

	  document.addEventListener('click', function(e) {
	  });

	  console.log('lets start some wallop');
	}
	// New instance of Wallop
</script>


<script>
	function checkSlider () {
    //initial check on window to make sure it's greater than 814 
    if( $(window).width() >= 814 ) {
		console.log("Checking the width");
		console.log("more than 814");
       
    }
    //if window is resized, we check again
    if ($(window).resize) {
        console.log( "Checking the width" );
        console.log( $(window).width() );
        if ($(window).width() <= 814){    
            
            console.log("Less than 814");
        }       
}
};

checkSlider();


</script>




</body>
</html>
