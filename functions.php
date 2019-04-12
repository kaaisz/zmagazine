<?php
// functions
//
// disable CSS on [gallery] inside of each posts 
// (https://css-tricks.com/snippets/wordpress/remove-gallery-inline-styling/)

add_filter( 'use_default_gallery_style', '__return_false' );

add_filter( 'shortcode_atts_gallery', 'change_gallery_atts', 10, 3);

/*
  size options

  - thumbnail
  - medium
  - large
  - full

  or, if your theme/plugin generate additional custom sizes you can use them as well

*/

function change_gallery_atts( $output, $pairs, $atts ) {
  if( $atts['columns'] == 1 ) {
    // if gallery has one column, use large size
    $output['size'] = 'large';
  } else if( $atts['columns'] >= 2 && atts['columns'] <= 4 ) {
    // if gallery has two - four columns, use medium size
    $output['size'] = 'medium';
  } else {
    // if gallery has more than four columns, use thumbnail size
    $output['size'] = 'thumbnail';
  }
  return $output;
}

?>