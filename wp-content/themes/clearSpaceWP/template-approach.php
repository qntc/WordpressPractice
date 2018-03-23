<?php



/* Template Name: Approach Template */







?>









<?php get_header('approach'); ?>



<section class="section_1 section">



	<div class="section_1_left">

		<h2><?php the_field('section_1_h2') ?></h2>

	</div>



	<div class="section_1_right">

		<div class="section_1_p">

			<?php the_field('section_1_p'); ?>

		</div>

	</div>



</section> <!-- end .section_1 -->



<section class="section_2 section">

	<div class="section_2_left">

		<h2><?php the_field('section_2_h2'); ?></h2>

	</div>

	<div class="section_2_right">

		<h2 class="our_principles"><?php the_field('section_2_right_h2'); ?></h2>



		<!-- begin section_2_paragraphs repeater -->

		<?php 



		// check if repeater has stuff

		if( have_rows('section_2_paragraphs') ):



		 	// loop through stuff

		  while ( have_rows('section_2_paragraphs') ) : the_row();



		// vars



			$paragraph_copy = get_sub_field('paragraph_copy');

			$paragraph_header = get_sub_field('paragraph_header');



			?>



		<div class="section_2_paragraphs">

			<div class="paragraphBlock">

				<h2><?php echo $paragraph_header; ?></h2>

				<?php echo $paragraph_copy; ?>

			</div>







			</div> <!-- end .section_2_paragraphs -->



		  <?php endwhile; ?>



				<?php endif; ?>





	</div> <!-- end .section_2_right -->



</section> <!-- end .section_2 -->



<section class="section_3 section">

	<div class="section_3_left">

		<h2><?php the_field('section_3_h2'); ?></h2>

	</div>

	<div class="section_3_right">

		<h2><?php the_field('section_3_right_h2'); ?></h2>

	</div>

	

	<section class="approachLists">

	

	<!-- begin section_3_lists repeater -->

			<?php 



			// check if repeater has stuff

			if( have_rows('section_3_lists') ):



			 	// loop through stuff

			  while ( have_rows('section_3_lists') ) : the_row();



			// vars



				$list_items = get_sub_field('list_items');

				$list_header = get_sub_field('list_header');



				?>

			

			<div class="listBlock">

				<h2><?php echo $list_header; ?></h2>

				<?php echo $list_items; ?>

			</div>





			  <?php endwhile; ?>



					<?php endif; ?>



		</section>

</section>

<div class="ourTeam">

	<h2><?php the_field('section_4_h2') ?></h2>

</div>



<?php 



// check if repeater has stuff

if( have_rows('staff_profiles') ):



 	// loop through stuff

  while ( have_rows('staff_profiles') ) : the_row();



// vars



	$staff_image = get_sub_field('staff_image_url');

	$staff_quote = get_sub_field('staff_quote');

	$staff_name = get_sub_field('staff_name');

	$staff_title = get_sub_field('staff_title');

	$staff_paragraph = get_sub_field('staff_paragraph');

	$staff_connect = get_sub_field('staff_connect');

	$staff_phone = get_sub_field('staff_phone');

	$staff_email = get_sub_field('staff_email');



	?>



<section class="staffSection section">

	<div class="staffLeft">

		<div class="staffImage">

			<img src="<?php echo $staff_image; ?>" alt="">

		</div>

	</div> <!-- end .staffLeft  -->



	<div class="staffRight">

		<div class="nameTitle">

			<p><span><?php echo $staff_name; ?>,</span> <?php echo $staff_title; ?></p>

		</div>

		<div class="staffParagraph">

			<?php echo $staff_paragraph; ?>

		</div>

		<div class="nameTitle">

			<p><span><?php echo $staff_connect; ?></span></p>

			<p><?php echo $staff_phone; ?></p>

			<p><?php echo $staff_email; ?></p>

		</div>

	</div> <!-- end .staffRight -->

</section>	



    <?php endwhile; ?>



		<?php endif; ?>



<?php get_footer(); ?>







	