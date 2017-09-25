<?php
/*
Plugin Name: Homepage Slider
Plugin URI: http://www.kieraneves.co.uk/
Description: Plugin for the homepage slider images
Version: 1.0
Author: Kieran Eves
Author URI: http://www.kieraneves.co.uk/
License: GPLv2
*/

// Custom Post Type
function hero_images() {
  register_post_type( 'hero-images',
    array(
      'labels' => array(
        'name' => 'Hero Images',
        'singular_name' => 'Hero Image',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Hero Image',
        'edit' => 'Edit',
        'edit_item' => 'Edit Hero Image',
        'new_item' => 'New Hero Image',
        'view' => 'View',
        'view_item' => 'View Hero Image',
        'search_items' => 'Search Hero Images',
        'not_found' => 'No Hero Image found',
        'not_found_in_trash' => 'No Hero Images found in Trash',
      ),
      'exclude_from_search' => true,
      'public' => true,
      'menu_position' => 26,
      'supports' => array( 'title', 'thumbnail'),
      'has_archive' => false
    )
  );
}

add_action( 'init', 'hero_images' );

// Testimonial Meta
function hero_image_meta() {
  add_meta_box(
    'hero_image_meta_box',
    'Hero Image Details',
    'display_hero_image_meta_box',
    'hero-images',
    'normal',
    'high'
  );
}

function display_hero_image_meta_box( $hero ) {
  $text = esc_html( get_post_meta( $hero->ID, 'hero_text', true ) );
  $dark = esc_html( get_post_meta( $hero->ID, 'hero_dark', true ) );

  ?>
  <table>
    <tr>
      <td style="width: 100%">Hero Text</td>
      <td><input type="text" size="60" name="hero_text" value="<?php echo $text; ?>" /></td>
    </tr>
    <tr>
      <td style="width: 100%">Dark Overlay? (tick for yes)</td>
      <td><input type='hidden' value='0' name='hero_dark'><input type="checkbox" name="hero_dark" <?php if( $dark == true ) { ?>checked="checked"<?php } ?> /></td>
    </tr>
  </table>
  <?php
}

add_action( 'admin_init', 'hero_image_meta' );

function add_hero_image( $hero_id, $hero ) {
  if ( $hero->post_type == 'hero-images' ) {
    if ( isset( $_POST['hero_text'] ) && $_POST['hero_text'] != '' ) {
        update_post_meta( $hero_id, 'hero_text', $_POST['hero_text'] );
    }
    if ( isset( $_POST['hero_dark'] )) {
        update_post_meta( $hero_id, 'hero_dark', $_POST['hero_dark'] );
    }
  }
}

add_action( 'save_post', 'add_hero_image', 10, 2 );

?>
