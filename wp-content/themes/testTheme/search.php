<?php get_header(  );

pageBanner(array(
  'title' => 'Search Results',
  'subtitle' => 'You searched for &ldquo;'. esc_html( get_search_query(false) )  .'&rdquo;'
));
?>



<div class="container container--narrow page-section">
  <?php
if (have_posts()){

    while ( have_posts() ) : the_post();

      /**
       * Run the loop for the search to output the results.
       * If you want to overload this in a child theme then include a file
       * called content-search.php and that will be used instead.
       */
      get_template_part( 'template-parts/content', get_post_type() );

    // End the loop.
    endwhile;
    echo paginate_links();
} else {
  echo '<h2 class="headline headline--small-plus">No results match that search.</h2>';
}


get_search_form( );
   ?>

</div>

<?php
get_footer(); ?>
