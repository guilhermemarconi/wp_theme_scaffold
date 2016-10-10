<?php
/**
 * @package WordPress
 */

include_once "includes/functions/theme_setup.php";
include_once "includes/functions/scripts_method.php";
include_once "includes/functions/new_embed_size.php";
include_once "includes/functions/new_excerpt_more.php";
include_once "includes/functions/custom_excerpt_length.php";
include_once "includes/functions/custom_imagelink_setup.php";
include_once "includes/functions/is_post_type.php";
include_once "includes/functions/is_subcategory.php";
include_once "includes/functions/custom_pagination.php";
include_once "includes/widgets/popular_posts/popular_posts.php";
if ( function_exists( 'woocommerce' ) ) {
  include_once "includes/woocommerce/configs.php";
}
