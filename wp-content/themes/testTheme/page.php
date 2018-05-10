<?php

get_header();

while(have_posts()){
  the_post();
  pageBanner(array(
    'title' => 'title nay',
    'subtitle' => 'world going on',
    'photo' => 'https://img00.deviantart.net/9480/i/2011/046/4/a/random_banner_by_mobianangel11-d39nc1t.png'
  ));
  ?>




  <div class="container container--narrow page-section">

<?php
  $theParent = wp_get_post_parent_id( get_the_id() );
  if($theParent){
    ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php echo the_title(); ?></span></p>
    </div>
    <?php
} ?>

<?php
  $textArray = get_pages(array(
    'child_of' => get_the_id()
    ));

    if($theParent or $textArray){ ?>
    <div class="page-links">
      <a href="<?php echo get_permalink($theParent); ?>"><h2 class="page-links__title"><?php echo get_the_title($theParent); ?></h2></a>
      <ul class="min-list">
        <?php
        if($theParent){
          $findChildrenOf = $theParent;
        } else{
          $findChildrenOf = get_the_id();
        }
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ) );
         ?>
      </ul>
    </div>

  <?php } ?>

    <div class="generic-content">
      <?php the_content();

      $skyLord = sanitize_text_field(get_query_var('skyLord'));
      $groundLord = sanitize_text_field(get_query_var('groundLord'));

       if($skyLord == 'me' and $groundLord == 'you'){
         echo '<h1>WHY NO SEE ME</h1>';
       }
      ?>
      <form method="get">
        <input name='skyLord' placeholder="sky lord"/>
        <input name='groundLord' placeholder="ground lord"/>
        <button>Submit</button>
      </form>
      </div>

  </div>

  <?php
}

get_footer( );
?>
