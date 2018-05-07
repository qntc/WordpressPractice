<?php get_header(  );
      pageBanner(array(
          'title' => 'title yey',
          'subtitle' => 'world going on'
      ));
    ?>


<div class="container container--narrow page-section">
  <?php
    while(have_posts()){
      the_post();

      get_template_part( 'template-parts/content-event');


    }
    echo paginate_links(  );
   ?>

   <a class="btn btn--blue" href="<?php echo site_url( '/past-events') ?>">Past Events</a>

</div>

<?php
get_footer(  ); ?>
