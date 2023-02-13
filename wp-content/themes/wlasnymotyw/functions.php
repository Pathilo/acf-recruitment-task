<?php
get_template_part("files/assets/assets_loader");

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'Opcje strony',
      'menu_title'  => 'Opcje strony',
      'menu_slug'   => 'theme-options',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));
  }

  register_nav_menu('primary_menu', __('Primary Menu'));
  register_nav_menu('primary_footer', __('Menu footer'));

  function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-width' => true,
    ) );
  }
  add_action( 'after_setup_theme', 'theme_prefix_setup' );



// define custom gutenberg blocks
// add_action('acf/init', 'acf_blocks_init');
// function acf_blocks_init() {
//   require get_template_directory() . '../wp-includes/blocks/block-standard-text/register_block.php';
// }