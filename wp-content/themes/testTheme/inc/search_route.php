<?php

add_action('rest_api_init', 'universityRegisterSearch');

function universityRegisterSearch(){
  register_rest_route('university/v1','search', array(
    'methods' => 'GET',
    'callback' => 'universitySearchResults'
  ));
}

function universitySearchResults($data){
  $mainQuery = new WP_Query(array(
    'post_type' => array('page','post','professor','program','event','campus'),
    's' => sanitize_text_field($data['term'])
  ));

$results = array(
  'generalInfo' => array(),
  'professors' => array(),
  'programs' => array(),
  'events' => array(),
  'campuses' => array()
);

while($mainQuery->have_posts()){
  $mainQuery->the_post();

  if(get_post_type() == 'post' OR get_post_type() == 'page'){
    array_push($results['generalInfo'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'type' => get_post_type(),
      'authorName' => get_the_author()
    ));
  }

  if(get_post_type() == 'professor'){
    array_push($results['professors'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'type' => get_post_type(),
      'thumbnail' => get_the_post_thumbnail_url(0, 'size')
    ));
  }

  if(get_post_type() == 'program'){
$relatedCampuses = get_field('related_campus');

if ($relatedCampuses){
    foreach($relatedCampuses as $campus){
      array_push($results['campuses'],array(
        'title' => get_the_title($campus),
        'permalink' => get_the_permalink($campus)
      ));
    }
}

    array_push($results['programs'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'type' => get_post_type(),
      'id' => get_the_id()
    ));
  }

  if(get_post_type() == 'campus'){
    array_push($results['campuses'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'type' => get_post_type()
    ));
  }

  if(get_post_type() == 'event'){
  $eventDate = new DateTime(get_field('event_date'));
  $description = null;
  if(has_excerpt()){
 $description = get_the_excerpt();
} else{
 $description = wp_trim_words( get_the_content( ), 18);
}

    array_push($results['events'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'type' => get_post_type(),
      'month' => $eventDate->format('M'),
      'day' => $eventDate->format('d'),
      'description' => $description
    ));
  }

}

if ($results['programs']){

  $programsMetaQuery = array('relation' => 'OR');

  foreach($results['programs'] as $item){
    array_push($programsMetaQuery,  array(
          'key' => 'related_programs',
          'compare' => 'LIKE',
          'value' => '"' . $item['id'] . '"'
        ));
  }

  $programRe = new WP_Query(array(
    'post_type' => array(
      'professor','event'
    ),
    'meta_query' => $programsMetaQuery
  ));

  while($programRe->have_posts()){
    $programRe->the_post();


      if(get_post_type() == 'event'){
      $eventDate = new DateTime(get_field('event_date'));
      $description = null;
      if(has_excerpt()){
     $description = get_the_excerpt();
    } else{
     $description = wp_trim_words( get_the_content( ), 18);
    }

        array_push($results['events'], array(
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'type' => get_post_type(),
          'month' => $eventDate->format('M'),
          'day' => $eventDate->format('d'),
          'description' => $description
        ));
      }

    if(get_post_type() == 'professor'){
      array_push($results['professors'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'type' => get_post_type(),
        'thumbnail' => get_the_post_thumbnail_url(0, 'size')
      ));
    }
  }

  foreach ($results as $item){
    $item = array_values(array_unique($item, SORT_REGULAR));
  }
}


return $results;
}
