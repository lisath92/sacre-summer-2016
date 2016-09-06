<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function sector_type() {

	$labels = array(
		'name'                       => 'Sector Types',
		'singular_name'              => 'Sector Type',
		'menu_name'                  => 'Sector Type',
		'all_items'                  => 'All Sector Types',
		'parent_item'                => 'Parent Sector Type',
		'parent_item_colon'          => 'Parent Sector Type:',
		'new_item_name'              => 'New Sector Type Name',
		'add_new_item'               => 'Add New Sector Type',
		'edit_item'                  => 'Edit Sector Type',
		'update_item'                => 'Update Sector Type',
		'view_item'                  => 'View Sector type',
		'separate_items_with_commas' => 'Separate Sector Types with commas',
		'add_or_remove_items'        => 'Add or remove Sector Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Sector Types',
		'search_items'               => 'Search Sector Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No sector types',
		'items_list'                 => 'Sector Types list',
		'items_list_navigation'      => 'Sector Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'sector_type', array( 'sectors' ), $args );

}
add_action( 'init', 'sector_type', 0 );

// Register Custom Taxonomy
function project_type() {

	$labels = array(
		'name'                       => 'Project Types',
		'singular_name'              => 'Project Type',
		'menu_name'                  => 'Project Types',
		'all_items'                  => 'All Project Types',
		'parent_item'                => 'Parent Project Type',
		'parent_item_colon'          => 'Parent Project Type:',
		'new_item_name'              => 'New Project Type Name',
		'add_new_item'               => 'Add New Project Type',
		'edit_item'                  => 'Edit Project Type',
		'update_item'                => 'Update Project Type',
		'view_item'                  => 'View Project Type',
		'separate_items_with_commas' => 'Separate project types with commas',
		'add_or_remove_items'        => 'Add or remove projecdt types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Project Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No project types',
		'items_list'                 => 'Project Types list',
		'items_list_navigation'      => 'Project Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'project_type', array( 'projects' ), $args );

}
add_action( 'init', 'project_type', 0 );