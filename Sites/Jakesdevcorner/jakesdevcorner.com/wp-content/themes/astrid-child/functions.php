<?php

// include './../wp-content/plugins/li(((stening_to_meta_box.php';
// include(plugins_url(  'listening_to_meta_box.php', __FILE__ ));
function add_listening_box() {
  add_meta_box('listening_to', 'Listening to', 'listening_to_metabox', 'post','normal', 'default');
}

add_action( 'add_meta_boxes', 'add_listening_box');

function listening_to_metabox() {

  global $post;

  echo '<input class="widefat" name="listening_to" type="text" value="' . get_post_meta( $post->ID,
  listening_to, true).'"/>';
}
?>
