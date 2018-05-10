<?php

/*
Plugin Name: Jim's first plugin
Version: 0.1
Description: try it
Author: ${Jim Lin}
*/

add_filter('the_content', 'contentEdits');

function contentEdits($content){
  $content = $content . '<p>Jim`s signiture</p>';
  return $content;
}
  
