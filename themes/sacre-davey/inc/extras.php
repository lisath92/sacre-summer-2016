<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Sacre Davey Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
// function red_starter_body_classes( $classes ) {
// 	// Adds a class of group-blog to blogs with more than 1 published author.
// 	if ( is_multi_author() ) {
// 		$classes[] = 'group-blog';
// 	}

// 	return $classes;
// }
// add_filter( 'body_class', 'red_starter_body_classes' );

function sacre_davey_modifying_product_archive_query($query) {
    if (is_post_type_archive('projects') && !is_admin() && $query->is_main_query()) {
        $query->set( 'posts_per_page', 25);
        $query->set( 'order', 'ASC');
        $query->set( 'orderby', 'title');
    }
}
add_action( 'pre_get_posts', 'sacre_davey_modifying_product_archive_query' );


