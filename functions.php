<?php
// functions
//
// disable CSS on [gallery] inside of each posts 
// (https://css-tricks.com/snippets/wordpress/remove-gallery-inline-styling/)

add_filter( 'use_default_gallery_style', '__return_false' );

add_filter( 'shortcode_atts_gallery', 'meks_gallery_atts', 10, 3);

/*
  size options

  - thumbnail
  - medium
  - large
  - full

  or, if your theme/plugin generate additional custom sizes you can use them as well

*/

function meks_gallery_atts( $output, $pairs, $atts ) {
  $output['size'] = 'medium';
  return $output;
}

?>