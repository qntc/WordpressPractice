<?php

/**

 * The template for displaying all single posts.

 *

 * @package styl_s

 */



get_header('workInterior'); ?>



	<div id="primary" class="">

		<main id="main" class="site-main" role="main">



		<section class="section_1 section">

			<div class="section_1_left">

				<h3>

					<?php the_field('project_scope') ?>

				</h3>	

				<p>

					<?php the_field('project_scope_list') ?>

				</p>

			</div>



			<div class="section_1_right">

				<h1>

					<?php the_field('section_1_h1') ?>

				</h1>

				<?php the_field('section_1_paragraph') ?>

			</div>

		</section>	<!-- end .section_1 -->



		  <!-- SLIDER STARTS -->


		<section class="section_3 section">

<!--			<h2><?php the_field('brand_positioning') ?></h2>

			<p><?php the_field('brand_positioning_p') ?></p>

-->			



		<div class="section_100">

			<?php 



			// check if the repeater field has rows of data

			if( have_rows('100_width') ):



			 	// loop through the rows of data

			    while ( have_rows('100_width') ) : the_row();



			// vars



			$image100 = get_sub_field('100_width');



				?>



				<div class="images_100">

					<img src="<?php echo $image100; ?>" alt="">

				</div>



			    <?php endwhile; ?>



			<?php endif; ?>

		</div>	



		<div class="section_50">

			<?php 



			// check if the repeater field has rows of data

			if( have_rows('50_width') ):



			 	// loop through the rows of data

			    while ( have_rows('50_width') ) : the_row();



			// vars



			$image50 = get_sub_field('50_width');



				?>



				<div class="images_50">

					<img src="<?php echo $image50; ?>" alt="">

				</div>



			    <?php endwhile; ?>



			<?php endif; ?>

		</div>	



		<div class="section_33">

			<?php 



			// check if the repeater field has rows of data

			if( have_rows('33_width') ):



			 	// loop through the rows of data

			    while ( have_rows('33_width') ) : the_row();



			// vars



			$image33 = get_sub_field('33_width');



				?>



				<div class="images_33">

					<img src="<?php echo $image33; ?>" alt="">

				</div>



			    <?php endwhile; ?>



			<?php endif; ?>

		</div>	

		


<?php if ( get_field('second_project_title') ) { ?>

<div class="row" style="text-align:left;position:relative;">

			<div class="col-lg-3 col-lg-push-9 section_2_right">

				<h2>

					<?php the_field('second_project_title') ?>

				</h2>

				<h3>

					<?php the_field('second_project_subject') ?>

				</h3>

				<p>

				<?php the_field('second_project_body') ?>

				</p>

			</div>

			<div class="col-lg-9 col-lg-pull-3 section_2_left">				

				<p>

				    <img class="img-responsive" src="<?php the_field('second_project_image') ?>">

				</p>



			</div>

</div>

<?php } ?>




<?php if( have_rows('100_width_2') ) { ?>

		<div class="section_100">

			<?php 



			// check if the repeater field has rows of data

			//if( have_rows('100_width_2') ):



			 	// loop through the rows of data

			    while ( have_rows('100_width_2') ) : the_row();



			// vars



			$image100 = get_sub_field('100_width');



				?>



				<div class="images_100">

					<img src="<?php echo $image100; ?>" alt="">

				</div>



			    <?php endwhile; ?>



			<?php //endif; ?>

		</div>	
		
<?php } ?>



		

	

		</section>


		<?php if ( get_field('testimonial_author') ) { ?>
		<section class="testimonial section">



			<div class="testimonialBlock">

				<h2><?php the_field('testimonial_quote') ?></h2>

				<p><span><?php the_field('testimonial_author') ?></span> <?php the_field('testimonial_job_title') ?></p>

				<p class="testimonialClient"><?php the_field('testimonial_client') ?></p>

			</div> <!-- end .testimonialBlock -->	

		</section>
		<?php } ?>


		<?php 
		$workpage = get_page_by_title('Work');
		$worklink = get_permalink($workpage->ID);
		?>
		<div class="postNav">
		<p>
		<span class="prev" ><?php next_post_link('%link', 'Previous<span class="desktop-only"> Project</span>', false); ?></span>
		<span class="all"><a href="<?php echo $worklink; ?>">All Projects</a></span>
		<span class="next"><?php previous_post_link('%link', 'Next<span class="desktop-only"> Project</span>', false); ?></span>
		</p>
		</div>


		</main><!-- #main -->

	</div><!-- #primary -->



<?php get_footer('work'); ?>