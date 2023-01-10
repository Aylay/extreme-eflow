<?php
function wpm_new_image(){
  add_image_size( 'square_600', 600, 600, true);
  add_image_size( 'thumbnail_500', 500);
}
add_action( 'after_setup_theme', 'wpm_new_image' );
