<?php
/*
Plugin Name: Consultants
Plugin URI: http://www.kieraneves.co.uk/
Description: Plugin for the homepage Testimonials custom post type
Version: 1.0
Author: Kieran Eves
Author URI: http://www.kieraneves.co.uk/
License: GPLv2
*/

// Custom Post Type

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'yourprefix_register_repeatable_group_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function yourprefix_register_repeatable_group_field_metabox() {
	$prefix = '_consultants_group';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => '_consultants_group_metabox',
		'title'        => esc_html__( 'Consultants', 'cmb2' ),
		'object_types' => array( 'page', ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'demo',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => esc_html__( 'Consultant {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Consultant Name', 'cmb2' ),
		'id'         => 'name',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Consultant Biography', 'cmb2' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'wysiwyg',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Consultant Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

}

?>
