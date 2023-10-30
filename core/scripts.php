<?php
//header


// FOOTER
wp_enqueue_script( 'base-scripts', get_template_directory_uri() . '/assets/scripts.min.js', array('jquery'), (string) time(), true );

//add dd styles
// wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/assets/owl-carousel.js',  array('jquery'), (string) time(), true );
// wp_enqueue_script( 'aos-script', get_template_directory_uri() . '/assets/aos.js',  array('jquery'), (string) time(), true );
// wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/assets/simple-lightbox.js', array('jquery'), (string) time(), true );
// wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/magnific-popup.js', array('jquery'), (string) time(), true );
// wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/assets/wow.js', array('jquery'), (string) time(), true );
// wp_enqueue_script( 'jarallax-script', get_template_directory_uri() . '/assets/jarallax.js', array('jquery'), (string) time(), true );
wp_enqueue_script( 'dd-custom-script', get_template_directory_uri() . '/assets/zdd_custom.js', array('jquery'), (string) time(), true );

wp_localize_script('base-scripts', 'paintData', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'security' => wp_create_nonce( 'load_more_posts' )
));

wp_localize_script('base-scripts', 'ceramiquesData', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'security' => wp_create_nonce( 'load_more_ceramiques_posts' )
));

wp_localize_script('base-scripts', 'pdfsData', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'security' => wp_create_nonce( 'load_more_pdfs_posts' )
));

wp_localize_script('base-scripts', 'portfolioParStyleData', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'security' => wp_create_nonce( 'par_style_posts' )
));
