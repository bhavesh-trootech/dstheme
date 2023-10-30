<?php
     	$add_banner_image = get_sub_field('add_banner_image');
     	$add_mobile_banner = get_sub_field('add_mobile_banner');
     	$add_big_text = get_sub_field('add_big_text');
     	$add_small_text = get_sub_field('add_small_text');
     	$banner_scroll_to_link = get_sub_field('banner_scroll_to_link');
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
					<div class="overflow-hidden">
					<h1 class="light_color slideInUp wow" data-wow-delay="500ms"><?php echo $add_big_text; ?></h1></div>
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