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
function sacre_davey_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'sacre_davey_body_classes' );

/**
*Remove "Editor" link from sub-menus
*/
function sacre_davey_remove_submenus() {
  remove_submenu_page('themes.php', 'theme-editor.php');
  remove_submenu_page('plugins.php','plugin-editor.php');
}

add_action('admin_menu','sacre_davey_remove_submenus',110);

/*
* Check for post type.
*/
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

/**
* Add featured image for about us page
*/
function sacre_davey_about_inline_styles() {
  if(!is_page_template('page-about.php')) {
    return;
  }
  $css='';
  $logo= CFS()->get('about_us_hero_image');
  if(!$logo) {
    return;
  }
  $css .='
      .hero {
        background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('.$logo.') bottom/100% 100% no-repeat;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_about_inline_styles');

/**
* Add featured image for contact us page
*/
function sacre_davey_contact_inline_styles() {
  if(!is_page_template('contact-page.php')) {
    return;
  }
  $css='';
  $logo= CFS()->get('contact_page_image');
  if(!$logo) {
    return;
  }
  $css .='
      .hero {
        background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('.$logo.') bottom/100% 100% no-repeat;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_contact_inline_styles');

//Sectors page inline style
function sacre_davey_sectors_inline_styles() {
  if(!is_single() && is_post_type('sector')) {
    return;
  }

  $css='';
  $logo='';
  $counter=1;
  $images= CFS()->get('development');
  if(!$images) {
    return;
  }

  foreach($images as $image) {
    $logo = $image['development_photo'];
    $css .='
          .development:nth-of-type('.$counter.') {
      background:
        url('.$logo.') center no-repeat;
        height: 100%;
        width: 100%;
        
          }
    ';
    $counter++;
  
wp_add_inline_style('sacre-davey-style', $css);
}
}
add_action( 'wp_enqueue_scripts','sacre_davey_sectors_inline_styles');  


/**
* Custom loop for projects archive page
*/
function sacre_davey_modifying_project_archive_query($query) {
    if (is_post_type_archive('projects') && !is_admin() && $query->is_main_query()) {
        $query->set( 'posts_per_page', 25);
        $query->set( 'order', 'ASC');
        $query->set( 'orderby', 'title');
    }
}
add_action( 'pre_get_posts', 'sacre_davey_modifying_project_archive_query' );

/*
* Limit number of words for excerpts
*/
function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * Hide email from Spam Bots using a shortcode.
 *
 * @param array  $atts    Shortcode attributes. Not used.
 * @param string $content The shortcode content. Should be an email address.
 *
 * @return string The obfuscated email address. 
 */
function wpcodex_hide_email_shortcode( $atts , $content = null ) {
  if ( ! is_email( $content ) ) {
    return;
  }

  return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
}
add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );
