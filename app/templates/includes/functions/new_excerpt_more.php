<?php

function new_excerpt_more( $more ) {
  global $post;
  return '&hellip; <a href="' . get_permalink($post->ID) . '">Continue lendo &raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
