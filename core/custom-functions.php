<?php
//all custom function will come this file

/***Walker manu***/
class Nav_Walker_Nav_Menu extends Walker_Nav_Menu{
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
			$class_names = ' class="'. esc_attr( $class_names ) . '"';

			$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

			$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .='</a>';
			if(in_array('menu-item-has-children',$classes))
			{

			$item_output .= '<span class="arrow_submenu  '. $item->title .'">';
			//$item_output .= '<i class="fa fa-chevron-down" aria-hidden="true"></i>';
			$item_output .= '</span>';
			}

			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
// Add Option page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}
// Year Shortcode
function year_shortcode () {
	$year = date_i18n ('Y');
	return $year;
}
add_shortcode ('year', 'year_shortcode');

//SVG support function
function ds_add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'ds_add_file_types_to_uploads');

//language filter in header
function ds_language_selector_special_dek() {
	if(function_exists('icl_get_languages')){
    $languages = icl_get_languages('skip_missing=1&orderby=code');
    $ls_str = NULL;

    if (!empty($languages)) {

        foreach ($languages as $l) {
            if (!$l['active']) {
                $ls_str .= "<a href='{$l['url']}' class='header-desktop-language'>";
                $ls_str .= $l['language_code'];
                $ls_str .= "</a>";
            }
        }

        //$ls_str = substr($ls_str,0,-2);
    }
	}
    return $ls_str;
}

//add body class to specific page templates
add_filter( 'body_class', 'dd_neat_body_class');
function dd_neat_body_class( $classes ) {
     if ( is_singular( array( 'portfolio', 'press' ) ) || is_404() )
          $classes[] = 'light-header';
 
     return $classes; 
}

//add body class to specific page templates
add_filter( 'body_class', 'dd_resident_quote_body_class');
function dd_resident_quote_body_class( $classes ) {
     if ( is_page( 'demande-de-soumission-residentiel' ))
          $classes[] = 'resident-circle-hide';
 
     return $classes; 
}

/** Add current menu item class to CTP archive pages**/
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	function add_current_nav_class($classes, $item) {
		// Getting the current post details
		global $post;
		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite['slug'];
			
		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));
		
		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {
		   $classes[] = 'current-menu-item';
		
		}
		// Return the corrected set of classes to be added to the menu item
		return $classes;
	}
/****/

/****/
add_filter( 'big_image_size_threshold', '__return_false' );
/****/