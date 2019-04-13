<?php
// functions
//

/**************************/
/* disable CSS on [gallery] inside of each posts 
   (https://css-tricks.com/snippets/wordpress/remove-gallery-inline-styling/)
*/

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
  $output['size'] = 'large';
  return $output;
}

/**************************/


/**************************/
/* 
  place the eyecatch from the first img of article
*/
function first_img_to_eyecatch() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post -> post_content, $matches);
  $first_img = $matches[1][0];

  // define a default image for just in case if any of image would not find out
  if(empty($first_img)) { 
    $first_img = "https://dummyimage.com/600x400/000/fff.png&text=Now+Printing";
  }
  return $first_img;
}

/**************************/
?>