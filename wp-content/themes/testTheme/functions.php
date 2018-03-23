<?php

function university_files(){
  wp_enqueue_script( 'somejs', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
  wp_enqueue_style( 'google-custome-font', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
  wp_enqueue_style( 'font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  wp_enqueue_style('university_main_styles',get_stylesheet_uri(), NULL,microtime());
}

add_action( 'wp_enqueue_scripts', 'university_files' );

function university_features(){
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    register_nav_menu( 'footerLocationOne', 'Footer Location 1' );
    register_nav_menu( 'footerLocationTwo', 'Footer Location 2' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', "university_features");

function university_adjust_queries($query){
  $today  = date('Ymd');
  if (!is_admin() AND is_post_type_archive( 'event' ) AND $query->is_main_query()){
    $query->set('posts_per_page',-1);
  $query->set('meta_key','event_date');
  $query->set('orderby','meta_value_num');
  $query->set('order','ASC');
  $query->set(  'meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    ));
  }

}

add_action( 'pre_get_posts', 'university_adjust_queries' );