<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dstheme
 */

?>

	</div><!-- #content -->
<?php
$postID = get_the_ID();
$footer_logo = get_field('footer_logo','option');
$copyright_text = get_field('copyright_text','option');
 ?>
	<footer id="colophon" class="main_footer">
		<div class="container_big">
			<div class="foot_main">
				<div class="foot_left">
					<div class="foot_logo">
					<?php if(!empty($footer_logo)){ ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
						</a>
					<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.png" alt="" />
					<?php } ?>
					</div>
					<div class="foot_res">
					<?php echo do_shortcode($copyright_text); ?>
					</div>
				</div>
				<div class="foot_right">
				<?php if(have_rows('footer_menu','option')){
					while(have_rows('footer_menu','option')){ the_row();
					$menu_link = get_sub_field('menu_link','option');
					if(!empty($menu_link)){
						if(isset($menu_link['target'])){ $target = $menu_link['target']; }else{ $target = '_self'; }
					?>
					<a href="<?php echo $menu_link['url']; ?>" target="<?php echo $target; ?>"><?php echo $menu_link['title']; ?></a>
					<?php }}} ?>
				</div>
			</div>
		</div>

			<div class="comm-button" data-aos="zoom-in">
				<?php $queried_object = get_queried_object();
					$term_id = $queried_object->term_id; 
					$term = get_term( $term_id, 'portfolio-category' );
					$catSlug = $term->slug;
				?>

                <?php if(ICL_LANGUAGE_CODE == 'fr'){
				if(is_page('demande-de-soumission-commercial')){
					$linkHref = site_url(). '/demande-de-soumission-residentiel';
				}
				else if(is_page('demande-de-soumission-residentiel') || ($catSlug == 'commercial' || is_page('commercial')) ) {
					$linkHref = site_url(). '/demande-de-soumission-commercial/';
				}else{
					$linkHref = site_url(). '/demande-de-soumission-residentiel/';
				}
				} ?>

				<?php if(ICL_LANGUAGE_CODE == 'en'){
				if(is_page('demande-de-soumission-commercial')){
					$linkHref = site_url(). '/en/demande-de-soumission-residentiel';
				}
				else if(is_page('demande-de-soumission-residentiel') || ($catSlug == 'commercial' || is_page('commercial')) ) {
					$linkHref = site_url(). '/en/demande-de-soumission-commercial/';
				}else{
					$linkHref = site_url(). '/en/demande-de-soumission-residentiel/';
				}
				} ?>

				<a href="<?php echo $linkHref; ?>">

            <?php if($catSlug == 'commercial' ||is_page('commercial')){ ?>
                <img  class="rotate-text" src="<?php echo get_template_directory_uri(); ?>/assets/images/commercial-button-ext.svg" alt="" />
            <?php } else { ?>
				<img class="rotate-text" src="<?php echo get_template_directory_uri(); ?>/assets/images/residentiel-button-ext.svg" alt="" /> 
			<?php } ?>

				<img class="inner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/commercial-button-int.svg" alt="" />
			    </a>

           <?php if(ICL_LANGUAGE_CODE == 'fr'){
           if( is_page('commercial') || ($catSlug == 'commercial') || (is_singular( 'portfolio' ) && (has_term( 'commercial', 'portfolio-category', $postID ) )) ){
					$linkMobileSticky = site_url(). '/demande-de-soumission-commercial/';
				}
				else{
					$linkMobileSticky = site_url(). '/demande-de-soumission-residentiel/';
				}
			}  ?>

			 <?php if(ICL_LANGUAGE_CODE == 'en'){
           if( is_page('commercial') || ($catSlug == 'commercial') || (is_singular( 'portfolio' ) && (has_term( 'commercial', 'portfolio-category', $postID ) )) ){
					$linkMobileSticky = site_url(). '/en/demande-de-soumission-commercial/';
				}
				else{
					$linkMobileSticky = site_url(). '/en/demande-de-soumission-residentiel/';
				}
			}  ?>

            <a href="<?php echo $linkMobileSticky; ?>">
			    <div class="mobile-comm">
				<img class="inner-img-white" src="<?php echo get_template_directory_uri(); ?>/assets/images/commercial-button-int-white.svg" alt="" />
				<p><?php _e( 'DEMANDE DE SOUMISSION', 'dstheme' ); ?></p>
				</div>
			 </a>

			</div>

	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
