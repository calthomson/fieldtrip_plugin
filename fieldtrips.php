<?php
/*
Plugin Name: Field Trips
Plugin URI: caledonia.homeunix.org
Description: A plugin that will create a custom post type displaying fieldtrips.
Version: 1.0
Author: UBC Flexible Learning Project
Author URI: caledonia.homeunix.org
*/

add_action( 'init', 'fieldtrip' );

function fieldtrip() {
    register_post_type( 'fieldtrips',
        array(
            'labels' => array(
                'name' => 'Field Trips',
                'singular_name' => 'Field Trip',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Field Trip',
                'edit' => 'Edit',
                'edit_item' => 'Edit Field Trip',
                'new_item' => 'New Field Trip',
                'view' => 'View',
                'view_item' => 'View Field Trip',
                'search_items' => 'Search Field Trips',
                'not_found' => 'No Field Trips found',
                'not_found_in_trash' => 'No Field Trips found in Trash',
                'parent' => 'Parent Field Trip',
		'show_in_nav_menus' => TRUE
            ),

            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-admin-site',
            'has_archive' => true
        )
    );
}
 
include_once dirname( __FILE__ ) . '/lib/fieldtrips_plugins.php';


?>
