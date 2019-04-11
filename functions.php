<?php
// functions
//
// disable CSS on [gallery] inside of each posts 
// (https://css-tricks.com/snippets/wordpress/remove-gallery-inline-styling/)

add_filter( 'use_default_gallery_style', '__return_false' );

?>