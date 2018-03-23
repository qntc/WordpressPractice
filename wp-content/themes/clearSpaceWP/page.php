<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package styl_s
 */

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
					<a target="_blank" href="<?php the_sub_field('link_url') ?>">
   			    	<img src="<?php the_sub_field('mobile_image'); ?>" alt="">
   			    	</a>
   			    </div>
						
						<div class="exampleClass" style="background-image:url('<?php the_sub_field('image_url') ?>')"> 

<?php 
	$text_style = get_sub_field( 'text_style' );
	$black_text = '<div class="homeTextBlockBlack">';
	$white_text = '<div class="homeTextBlock">';
if ( $text_style ) {
    echo $black_text;
} else {
    echo $white_text;
} ?>						

							
<!-- 
									<h2>	<a target="_blank" href="<?php the_sub_field('link_url')?> ">	<?php  the_sub_field('header1');  ?></a> </h2>

									<h3>	<a target="_blank" href="<?php the_sub_field('link_url')?> "> <?php  the_sub_field('header2');  ?> </h3>	</a>

								<a target="_blank" href="<?php the_sub_field('link_url'); ?>">
									<div class="plusSignHome"></div>
								</a> -->
										
	   			   </div>

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
	if ($( "div.Wallop-item--current > div.exampleClass > div" ).hasClass("homeTextBlockBlack" )) {
    $("nav.mobilenav").attr('id', 'black_menu');
  } else {
    $("nav.mobilenav").attr('id', 'white_menu');
  };

  if ($( "div.Wallop-item--current > div.exampleClass > div" ).hasClass("homeTextBlockBlack" )) {
    $("h1.site-title").attr('id', 'black_logo');
    console.log("Black logo");
  } else {
    $("h1.site-title").attr('id', 'white_logo');
    console.log("White Logo");
  };
}

navCheck();
	
</script>

<script>
 if ($(window).width() >= 814) {
var testVar = window.setInterval(function(){
    console.log("Were switching the slide due to a timer now");
    navCheck();
    Wallop.next();
}, <?php the_field('carousel_pause_time'); ?>);

};




</script>



 


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('home'); ?>


