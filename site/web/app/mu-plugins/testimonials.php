<?php
/*
Plugin Name: Testimonials
Plugin URI: http://www.kieraneves.co.uk/
Description: Plugin for the homepage Testimonials custom post type
Version: 1.0
Author: Kieran Eves
Author URI: http://www.kieraneves.co.uk/
License: GPLv2
*/

// Custom Post Type
function testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Testimonial',
        'edit' => 'Edit',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view' => 'View',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No Testimonials found',
        'not_found_in_trash' => 'No Testimonials found in Trash',
      ),
      'exclude_from_search' => true,
      'public' => true,
      'menu_position' => 30,
      'supports' => array( 'title', 'editor'),
      'has_archive' => false
    )
  );
}

add_action( 'init', 'testimonials' );

// Testimonial Meta
function testimonial_meta() {
  add_meta_box(
    'testimonial_meta_box',
    'Testimonial Details',
    'display_testimonial_meta_box',
    'testimonials',
    'normal',
    'high'
  );
}

function display_testimonial_meta_box( $testimonial ) {
  $website = esc_html( get_post_meta( $testimonial->ID, 'testimonial_website', true ) );
  ?>
  <table>
    <tr>
      <td style="width: 100%">Website URL</td>
      <td><input type="text" size="60" name="testimonial_website" value="<?php echo $website; ?>" /></td>
    </tr>
  </table>
  <?php
}

add_action( 'admin_init', 'testimonial_meta' );

function add_testimonial( $testimonial_id, $testimonial ) {
  if ( $testimonial->post_type == 'testimonials' ) {
    if ( isset( $_POST['testimonial_website'] ) && $_POST['testimonial_website'] != '' ) {
        update_post_meta( $testimonial_id, 'testimonial_website', $_POST['testimonial_website'] );
    }
  }
}

add_action( 'save_post', 'add_testimonial', 10, 2 );

?>
