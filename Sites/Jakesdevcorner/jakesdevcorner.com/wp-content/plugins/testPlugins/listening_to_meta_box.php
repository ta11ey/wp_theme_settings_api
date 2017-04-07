<?php
function add_listening_box() {
  add_meta_box('listening_to', 'Listening to', 'listening_to_metabox', 'post','normal', 'default');
}

add_action( 'add_meta_boxes', 'add_listening_box');

function listening_to_metabox() {

  global $post;

  echo '<input class="widefat" name="listening_to" type="text" value="' . get_post_meta( $post->ID,
  listening_to, true).'"/>';
}


// function custom_meta_box_markup()
// {
//   echo 'What you put here, show\'s up in the meta box';
// }
//
// function add_custom_meta_box()
// {
//     add_meta_box("demo-meta-box", "Custom Meta Box", "custom_meta_box_markup", "post", "side", "high", null);
// }
//
// add_action("add_meta_boxes", "add_custom_meta_box");
//
//

?>
