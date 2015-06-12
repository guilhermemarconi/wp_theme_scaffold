<?php

function new_embed_size() {
   return array( 'width' => 760, 'height' => 428 );
}
add_filter( 'embed_defaults', 'new_embed_size' );
