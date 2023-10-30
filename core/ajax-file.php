<?php

/*peintures load more ajax*/
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'peintures',
        'post_status' => 'publish',
        'posts_per_page' => '12',
        'paged' => $paged,
    );
    $peintures_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $peintures_posts->have_posts() ) : ?>
        <?php $countIndex=1; $delay =1; while ( $peintures_posts->have_posts() ) : $peintures_posts->the_post(); ?>
           <div class="pein_box painterListBox" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
					<a href="<?php echo the_permalink(); ?>">
						<div class="pein_img">
							<?php
						       if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full' );
									} else { ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pain_img_min.jpg" alt="" />
							<?php } ?>
						</div>
						<div class="pein_txt">
							<?php the_title(); ?>
						</div>
					</a>
				</div>
        <?php $countIndex++; $delay++; endwhile; ?>
        <?php
    endif;
 
    wp_die();
}

/*ceramiques load more ajax*/
add_action('wp_ajax_load_ceramiques_posts_by_ajax', 'load_ceramiques_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_ceramiques_posts_by_ajax', 'load_ceramiques_posts_by_ajax_callback');
function load_ceramiques_posts_by_ajax_callback() {
    check_ajax_referer('load_more_ceramiques_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'ceramiques',
        'post_status' => 'publish',
        'posts_per_page' => '12',
        'paged' => $paged,
    );
    $ceramiques_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $ceramiques_posts->have_posts() ) : ?>
        <?php $delay =1; while ( $ceramiques_posts->have_posts() ) : $ceramiques_posts->the_post(); ?>
           <div class="pein_box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
					<a href="<?php echo the_permalink(); ?>">
						<div class="pein_img">
							<?php
						       if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full' );
									} else { ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pain_img_min.jpg" alt="" />
							<?php } ?>
						</div>
						<div class="pein_txt">
							<?php the_title(); ?>
						</div>
					</a>
				</div>
        <?php $delay++; endwhile; ?>
        <?php
    endif;
 
    wp_die();
}

/*commercial PDFs load more ajax*/
add_action('wp_ajax_load_pdfs_posts_by_ajax', 'load_pdfs_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_pdfs_posts_by_ajax', 'load_pdfs_posts_by_ajax_callback');
function load_pdfs_posts_by_ajax_callback() {
    check_ajax_referer('load_more_pdfs_posts', 'security');
    $paged = $_POST['page'];
    $argsPdfs = array(
        'post_type' => 'commercial-pdfs',
        'post_status' => 'publish',
        'posts_per_page' => '6',
        'paged' => $paged,
    );
    $pdfs_posts = new WP_Query( $argsPdfs );
    ?>
 
    <?php if ( $pdfs_posts->have_posts() ) : ?>
        <?php $delay =1; while ( $pdfs_posts->have_posts() ) : $pdfs_posts->the_post(); ?>
            <?php
            $postID = get_the_ID();
             $add_pdf_link = get_field('add_pdf_link', $postID);
              ?>
           <div class="fiches-techniques-box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
                <div class="fiches-techniques-tab">
                        <h4><a target="_blank" href="<?php echo $add_pdf_link['url']; ?>"><?php echo the_title(); ?></a></h4>
                </div>
            </div>
        <?php $delay++; endwhile; ?>
        <?php
    endif;
 
    wp_die();
}

add_action( 'pre_get_posts' ,'portfolio_to_pre_get_posts', 1, 1 );
function portfolio_to_pre_get_posts( $query )
{
    if ( ! is_admin() && (is_post_type_archive( 'portfolio' ) || is_tax( 'portfolio-category' ) ) && $query->is_main_query() )
    {
        $query->set( 'posts_per_page', 18 ); //set query arg ( key, value )
		if(isset($_GET['ps']) && !empty($_GET['ps'])){
			$taxquery = array(
			'relation' => 'AND',
				array(
					'taxonomy' => 'portfolio-style',
					'field' => 'id',
					'terms' => $_GET['ps'],
				)
			);

			$query->set( 'tax_query', $taxquery );
		}
		if(isset($_GET['pp']) && !empty($_GET['pp'])){
			 $taxquery = array(
			 'relation' => 'AND',
				array(
					'taxonomy' => 'portfolio-produits',
					'field' => 'id',
					'terms' => $_GET['pp'],
				)
			);

			$query->set( 'tax_query', $taxquery );
		}
    }
	
}

/*portfolio par style post load ajax*/
add_action('wp_ajax_load_portfolio_parstyle_posts_by_ajax', 'load_portfolio_parstyle_posts_by_ajax');
add_action('wp_ajax_nopriv_load_portfolio_parstyle_posts_by_ajax', 'load_portfolio_parstyle_posts_by_ajax');
function load_portfolio_parstyle_posts_by_ajax() {
    check_ajax_referer('par_style_posts', 'security');
    $term_id_parStyle = $_POST['cat_id'];
   
    $argsParstyle = array(
            'post_type' => array('portfolio'),
            'post_status' => array('publish'),
            'posts_per_page' => -1,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                'taxonomy' => 'portfolio-category',
                'terms' => $term_id_parStyle
                 )
              )
        );
    $parStyle_posts = new WP_Query( $argsParstyle );
    ?>
 
    <?php if ( $parStyle_posts->have_posts() ) : ?>
        <?php while ( $parStyle_posts->have_posts() ) : $parStyle_posts->the_post(); ?>
            <?php
            $postID = get_the_ID();
            $cat_array = get_the_terms($postID, 'portfolio-category' );
              ?>
           <div class="col-sm-6 col-md-4">
                    <div class="portfolio-box">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <h5><?php echo $cat_array[0]->name;  ?></h5>
                        <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                </div>
        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}