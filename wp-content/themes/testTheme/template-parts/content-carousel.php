<div class="hero-slider__slide" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center"><?php echo get_the_title(); ?></h2>
      <p class="t-center"><?php echo get_the_excerpt(); ?></p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
