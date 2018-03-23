<?php

/* Template Name: Home Page Template */

get_header('home'); ?>



	<div id="primary">
		<main id="main" class="site-main" role="main">
			
			<div class="homeParent">
				
					
   			<div class="Wallop Wallop--slide">
   			  <div class="Wallop-list">

					<?php

					// check if the repeater field has rows of data
					if( have_rows('home_repeater') ):



					 	// loop through the rows of data
					    while ( have_rows('home_repeater') ) : the_row(); ?>
						

   			    <div class="Wallop-item" id="Wallop-item" data-link="<?php the_sub_field('link_url'); ?>">

   			    <div class="mobileImage">
					<a href="<?php the_sub_field('link_url') ?>">
   			    	<img src="<?php the_sub_field('mobile_image'); ?>" alt="">
   			    	</a>
   			    </div>
				<div class="exampleClass" style="background-image:url('<?php the_sub_field('image_url') ?>')"> 

<?php 
	$text_style = get_sub_field( 'text_style' );
	$black_text = '<div class="homeTextBlock black-text">';
	$white_text = '<div class="homeTextBlock">';
if ( $text_style ) {
    echo $black_text;
} else {
    echo $white_text;
} ?>						

							
<h2><a href="<?php the_sub_field('link_url')?> "><?php  the_sub_field('header1');  ?></a></h2>

<h3><a href="<?php the_sub_field('link_url')?> "> <?php  the_sub_field('header2');  ?></h3></a>

										
<?php echo '</div>'; ?>

					</div>
				</div>

	  <?php endwhile; ?>

			<?php endif; ?>

					  <div class="Wallop-buttonPrevious"></div>
		  <div class="Wallop-buttonNext"></div>
   			 
   		


			

</div> <!-- end .homeParent -->


</div>        
					</div> 


<script>
function navCheck () {
	
	if ( $( "div.Wallop-item--current div.homeTextBlock" ).hasClass("black-text" ) ) {
		$("h1.site-title").attr('id', 'black_logo');
		$("nav.mobilenav").attr('id', 'black_menu');
		console.log("Black logo");
	} else {
		$("h1.site-title").attr('id', 'white_logo');
		$("nav.mobilenav").attr('id', 'white_menu');
		console.log("White Logo");
	};
}

navCheck();
	
</script>

<script>
 if ($(window).width() >= 814) {
var testVar = window.setInterval(function(){
    console.log("Were switching the slide due to a timer now");
    Wallop.next();
    //navCheck();
}, <?php the_field('carousel_pause_time'); ?>);

};




</script>



 


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('home'); ?>


