<?php
/**
 * Template Name: Press Template
 */

get_header();
?>
<div class="press-page">
     	<?php
     	$add_banner_image = get_field('add_banner_image');
     	$add_mobile_banner = get_field('add_mobile_banner');
     	$add_big_text = get_field('add_big_text');
     	$add_small_text = get_field('add_small_text');
     	$banner_scroll_to_link = get_field('banner_scroll_to_link');
     	?>
		<section class="banner_one_section">
		<div class="bo_bg">
			 <?php if(!empty($add_banner_image)){
				?>
				<?php echo wp_get_attachment_image( $add_banner_image, 'full', "", array( "class" => "img-desktop" ) ); ?>
				<?php }else{ ?>
			<img class="img-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-propos-min.jpg" alt="" />
		<?php } ?>
		<?php if(!empty($add_mobile_banner)){
				?>
				<?php echo wp_get_attachment_image( $add_mobile_banner, 'full', "", array( "class" => "img-mobile" ) ); ?>
				<?php }else{ ?>
				<img class="img-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-mobile-home.jpg" alt="" />
			<?php } ?>
		</div>
		<div class="container_big">
			<div class="bo_txt">
				<?php if(!empty($add_big_text)) { ?>
					<div class="overflow-hidden"><h1 class="light_color slideInUp wow" data-wow-delay="500ms"><?php echo $add_big_text; ?></h1></div>
				    <?php } ?>
				    <?php if(!empty($add_small_text)) { ?>
					<h4 class="light_color fadeIn wow" data-wow-delay="900ms"><?php echo $add_small_text; ?></h4>
				  <?php } ?>
			</div>
		</div>
		<div class="scroll_down">
			<a class="scroll_animation" href="<?php echo $banner_scroll_to_link['url'];?>"><?php _e( 'Scroll Down', 'dstheme' ); ?>
				<div class="down_line"></div>
			</a>
		</div>
	</section>

	<section class="press-container" id="press-container">
		<div class="container_big">
			<div class="row">
		<?php
	     $argsPresss = array(
	      'post_type' => 'press',
	      'posts_per_page' => -1,
	      'order' => 'DESC',
	      'post_status' =>'publish',
	     );
	     ?>
	       <?php
	        $query = new WP_Query($argsPresss);
	       if ( $query->have_posts() ) : ?>
	         <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-6">
					<div class="press-block">
						<div class="press-img">
						<?php
				       if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'full' );
							} else { ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/new-01.png" alt="" />
							<?php } ?>

						</div>
						<div class="press-type"><?php _e( 'La Presse', 'dstheme' ); ?></div>
						<h4><?php echo the_title(); ?></h4>
						<div class="more_link"><a href="<?php echo the_permalink(); ?>"><?php _e( 'En Lire Plus', 'dstheme' ); ?></a></div>
					</div>
				</div>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
			  <?php else : ?>
			      <p><?php _e( 'Sorry, no press matched your criteria.', 'dstheme' ); ?></p>
			  <?php endif; ?>

			</div>
		</div>
	</section>

</div>
<?php
get_footer();