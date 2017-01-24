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

/**
* Add featured image for front page
*/
function sacre_davey_front_page_inline_styles() {
  if(!is_front_page()) {
    return;
  }
  $css='';
  $logo= CFS()->get('front_page_banner');
  if(!$logo) {
    return;
  }
  $css .='
      #hero-image {
        background:
        linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
        url('.$logo.') bottom/cover no-repeat;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_front_page_inline_styles');


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
        url('.$logo.') bottom/cover no-repeat;
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
* Add featured image for services page
*/
function sacre_davey_services_inline_styles() {
  if(!is_page_template('page-services.php')) {
    return;
  }
  $css='';
  $logo= CFS()->get('services_banner');
  if(!$logo) {
    return;
  }
  $css .='
      #services-hero {
        background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('.$logo.') bottom/cover no-repeat;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_services_inline_styles');



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
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_contact_inline_styles');

/**
* Add featured image for careers page
*/
function sacre_davey_careers_inline_styles() {
  if(!is_page_template('page-careers.php')) {
    return;
  }
  $css='';
  $logo= CFS()->get('careers_banner');
  if(!$logo) {
    return;
  }
  $css .='
      .careers-hero-image {
        background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url('.$logo.') bottom/100% 100% no-repeat;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-flow: column nowrap;

}';

wp_add_inline_style('sacre-davey-style', $css);
}

add_action( 'wp_enqueue_scripts','sacre_davey_careers_inline_styles');


//Sectors page inline style
function sacre_davey_sectors_inline_styles() {
  if(!is_single()) {
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
        background-size: 100% 100%;
        
          }
    ';
    $counter++;
}
wp_add_inline_style('sacre-davey-style', $css);
}
add_action( 'wp_enqueue_scripts','sacre_davey_sectors_inline_styles');  


/**
* Custom loop for projects archive page
*/
function sacre_davey_modifying_project_archive_query($query) {
    if (is_post_type_archive('projects') && !is_admin() && $query->is_main_query()) {
        $query->set( 'posts_per_page', 30);
        $query->set( 'order', 'ASC');
        $query->set( 'orderby', 'title');
    }
}
add_action( 'pre_get_posts', 'sacre_davey_modifying_project_archive_query' );


//Change the excerpt length, [....] and allowed tags

function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
global $post;
if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');
 
    //Delete all shortcode tags from the content. 
    $text = strip_shortcodes( $text );
 
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
     
    $allowed_tags = '<p>'; /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
    $text = strip_tags($text, $allowed_tags);
     
    $excerpt_word_count = 65; 
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
     
    $excerpt_end = '<p class="news-read-more"><a href="'. get_permalink($post->ID) . '">Read more</a></p>'; 
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
     
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
       $text = $text . '...' . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');


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

//Add custom theme colors to the color palette
function mytheme_change_tinymce_colors( $init ) {
   $default_colours = '
        "000000", "Black",
        "993300", "Burnt orange",
        "333300", "Dark olive",
        "003300", "Dark green",
        "003366", "Dark azure",
        "000080", "Navy Blue",
        "333399", "Indigo",
        "333333", "Very dark gray",
        "800000", "Maroon",
        "FF6600", "Orange",
        "808000", "Olive",
        "008000", "Green",
        "008080", "Teal",
        "0000FF", "Blue",
        "666699", "Grayish blue",
        "808080", "Gray",
        "FF0000", "Red",
        "FF9900", "Amber",
        "99CC00", "Yellow green",
        "339966", "Sea green",
        "33CCCC", "Turquoise",
        "3366FF", "Royal blue",
        "800080", "Purple",
        "999999", "Medium gray",
        "FF00FF", "Magenta",
        "FFCC00", "Gold",
        "FFFF00", "Yellow",
        "00FF00", "Lime",
        "00FFFF", "Aqua",
        "00CCFF", "Sky blue",
        "993366", "Brown",
        "C0C0C0", "Silver",
        "FF99CC", "Pink",
        "FFCC99", "Peach",
        "FFFF99", "Light yellow",
        "CCFFCC", "Pale green",
        "CCFFFF", "Pale cyan",
        "99CCFF", "Light sky blue",
        "CC99FF", "Plum",
        "FFFFFF", "White"
        ';
    $custom_colours = '
        "272D66", "Theme Dark Blue",
        "279AB6", "Theme Light Blue"
        ';
    $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';
    $init['textcolor_rows'] = 6; // expand colour grid to 6 rows
    return $init;
}
add_filter('tiny_mce_before_init', 'mytheme_change_tinymce_colors');

//Show all projects on archive page
function get_all_projects_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( 'projects' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_projects_posts' );