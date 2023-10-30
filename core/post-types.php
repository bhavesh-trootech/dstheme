<?php
/* Add portfolio CPT */
function portfolio_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Portfolios ', 'Questions', 'dstheme' ),
        'singular_name'       => _x( 'Portfolio', 'Questions', 'dstheme' ),
        'menu_name'           => __( 'Portfolios', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'dstheme' ),
        'all_items'           => __( 'All Portfolios', 'dstheme' ),
        'view_item'           => __( 'View Portfolio', 'dstheme' ),
        'add_new_item'        => __( 'Add New Portfolio', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Portfolio', 'dstheme' ),
        'update_item'         => __( 'Update Portfolio', 'dstheme' ),
        'search_items'        => __( 'Search Portfolio', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'portfolios', 'dstheme' ),
        'description'         => __( 'portfolios news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ), 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'taxonomies' 	      => array('portfolio-category'),
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'portfolio', $args );
 
}
add_action( 'init', 'portfolio_post_type', 0 );

//register texonomy
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_question_taxonomies', 0 );
function create_question_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'dstheme' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'dstheme' ),
		'search_items'      => __( 'Search Category', 'dstheme' ),
		'all_items'         => __( 'All Category', 'dstheme' ),
		'parent_item'       => __( 'Parent Category', 'dstheme' ),
		'parent_item_colon' => __( 'Parent Category:', 'dstheme' ),
		'edit_item'         => __( 'Edit Category', 'dstheme' ),
		'update_item'       => __( 'Update Category', 'dstheme' ),
		'add_new_item'      => __( 'Add New Category', 'dstheme' ),
		'new_item_name'     => __( 'New Category Name', 'dstheme' ),
		'menu_name'         => __( 'Category', 'dstheme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy( 'portfolio-category', array( 'portfolio' ), $args );
	
	$labelsStyle = array(
		'name'              => _x( 'Style', 'taxonomy general name', 'dstheme' ),
		'singular_name'     => _x( 'Style', 'taxonomy singular name', 'dstheme' ),
		'search_items'      => __( 'Search Style', 'dstheme' ),
		'all_items'         => __( 'All Style', 'dstheme' ),
		'parent_item'       => __( 'Parent Style', 'dstheme' ),
		'parent_item_colon' => __( 'Parent Style:', 'dstheme' ),
		'edit_item'         => __( 'Edit Style', 'dstheme' ),
		'update_item'       => __( 'Update Style', 'dstheme' ),
		'add_new_item'      => __( 'Add New Style', 'dstheme' ),
		'new_item_name'     => __( 'New Style Name', 'dstheme' ),
		'menu_name'         => __( 'Style', 'dstheme' ),
	);

	$argsstyle = array(
		'hierarchical'      => true,
		'labels'            => $labelsStyle,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-style' ),
	);
	register_taxonomy( 'portfolio-style', array( 'portfolio' ), $argsstyle );
	
	$labelsproduits = array(
		'name'              => _x( 'Produits', 'taxonomy general name', 'dstheme' ),
		'singular_name'     => _x( 'Produits', 'taxonomy singular name', 'dstheme' ),
		'search_items'      => __( 'Search Produits', 'dstheme' ),
		'all_items'         => __( 'All Produits', 'dstheme' ),
		'parent_item'       => __( 'Parent Produits', 'dstheme' ),
		'parent_item_colon' => __( 'Parent Produits:', 'dstheme' ),
		'edit_item'         => __( 'Edit Produits', 'dstheme' ),
		'update_item'       => __( 'Update Produits', 'dstheme' ),
		'add_new_item'      => __( 'Add New Produits', 'dstheme' ),
		'new_item_name'     => __( 'New Produits Name', 'dstheme' ),
		'menu_name'         => __( 'Produits', 'dstheme' ),
	);

	$argsproduits = array(
		'hierarchical'      => true,
		'labels'            => $labelsproduits,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-produits' ),
	);

	register_taxonomy( 'portfolio-produits', array( 'portfolio' ), $argsproduits );
}

/* Add Press CPT */
function press_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Press ', 'Press', 'dstheme' ),
        'singular_name'       => _x( 'Press', 'Press', 'dstheme' ),
        'menu_name'           => __( 'Press', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Press', 'dstheme' ),
        'all_items'           => __( 'All Press', 'dstheme' ),
        'view_item'           => __( 'View Press', 'dstheme' ),
        'add_new_item'        => __( 'Add New Press', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Press', 'dstheme' ),
        'update_item'         => __( 'Update Press', 'dstheme' ),
        'search_items'        => __( 'Search Press', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Press', 'dstheme' ),
        'description'         => __( 'Press news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ), 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'press', $args );
 
}
add_action( 'init', 'press_post_type', 0 );

/* Add Testimonials CPT */
function testimonials_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials ', 'Testimonials', 'dstheme' ),
        'singular_name'       => _x( 'Testimonial', 'Testimonials', 'dstheme' ),
        'menu_name'           => __( 'Testimonials', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'dstheme' ),
        'all_items'           => __( 'All Testimonials', 'dstheme' ),
        'view_item'           => __( 'View Testimonials', 'dstheme' ),
        'add_new_item'        => __( 'Add New Testimonial', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Testimonial', 'dstheme' ),
        'update_item'         => __( 'Update Testimonial', 'dstheme' ),
        'search_items'        => __( 'Search Testimonial', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Testimonial', 'dstheme' ),
        'description'         => __( 'Testimonial news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor'), 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}
add_action( 'init', 'testimonials_post_type', 0 );
/*****end testimonial******/

/* Add partners CPT */
function partenaires_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Partenaires ', 'Partenaires', 'dstheme' ),
        'singular_name'       => _x( 'Partenaires', 'Partenaires', 'dstheme' ),
        'menu_name'           => __( 'Partenaires', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Partenaire', 'dstheme' ),
        'all_items'           => __( 'All Partenaire', 'dstheme' ),
        'view_item'           => __( 'View Partenaires', 'dstheme' ),
        'add_new_item'        => __( 'Add New Partenaire', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Partenaire', 'dstheme' ),
        'update_item'         => __( 'Update Partenaire', 'dstheme' ),
        'search_items'        => __( 'Search Partenaire', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Partenaire', 'dstheme' ),
        'description'         => __( 'Partenaire news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'), 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'partenaires', $args );
 
}
add_action( 'init', 'partenaires_post_type', 0 );
/*****end partners******/

/* Add PDFs CPT */
function pdfs_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'PDFs ', 'PDFs', 'dstheme' ),
        'singular_name'       => _x( 'PDFs', 'PDFs', 'dstheme' ),
        'menu_name'           => __( 'PDFs', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent PDF', 'dstheme' ),
        'all_items'           => __( 'All PDF', 'dstheme' ),
        'view_item'           => __( 'View PDFs', 'dstheme' ),
        'add_new_item'        => __( 'Add New PDF', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit PDF', 'dstheme' ),
        'update_item'         => __( 'Update PDF', 'dstheme' ),
        'search_items'        => __( 'Search PDF', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'PDF', 'dstheme' ),
        'description'         => __( 'PDF news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title'), 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'commercial-pdfs', $args );
 
}
add_action( 'init', 'pdfs_post_type', 0 );
/*****end PDFs******/

/* Add peintures CPT */
function peintures_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Peintures ', 'Peintures', 'dstheme' ),
        'singular_name'       => _x( 'Peinture', 'Peintures', 'dstheme' ),
        'menu_name'           => __( 'Peintures', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Peinture', 'dstheme' ),
        'all_items'           => __( 'All Peintures', 'dstheme' ),
        'view_item'           => __( 'View Peinture', 'dstheme' ),
        'add_new_item'        => __( 'Add New Peinture', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Peinture', 'dstheme' ),
        'update_item'         => __( 'Update Peinture', 'dstheme' ),
        'search_items'        => __( 'Search Peinture', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Peinture', 'dstheme' ),
        'description'         => __( 'Peinture news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail' ), 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'peintures', $args );
 
}
add_action( 'init', 'peintures_post_type', 0 );

/* Add nos ceramique CPT */
function nos_ceramique_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Ceramiques ', 'Ceramiques', 'dstheme' ),
        'singular_name'       => _x( 'Ceramiques', 'Ceramiques', 'dstheme' ),
        'menu_name'           => __( 'Ceramiques', 'dstheme' ),
        'parent_item_colon'   => __( 'Parent Ceramique', 'dstheme' ),
        'all_items'           => __( 'All Ceramiques', 'dstheme' ),
        'view_item'           => __( 'View Ceramique', 'dstheme' ),
        'add_new_item'        => __( 'Add New Ceramique', 'dstheme' ),
        'add_new'             => __( 'Add New', 'dstheme' ),
        'edit_item'           => __( 'Edit Ceramique', 'dstheme' ),
        'update_item'         => __( 'Update Ceramique', 'dstheme' ),
        'search_items'        => __( 'Search Ceramique', 'dstheme' ),
        'not_found'           => __( 'Not Found', 'dstheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dstheme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Ceramique', 'dstheme' ),
        'description'         => __( 'Ceramique news and reviews', 'dstheme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail' ), 
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'query_var'           => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'ceramiques', $args );
 
}
add_action( 'init', 'nos_ceramique_post_type', 0 );