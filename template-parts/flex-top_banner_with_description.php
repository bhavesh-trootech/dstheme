<?php
     	$add_banner_image = get_sub_field('add_banner_image');
     	$add_mobile_banner = get_sub_field('add_mobile_banner');
     	$add_big_text = get_sub_field('add_big_text');
     	$add_small_text = get_sub_field('add_small_text');
     	$add_description = get_sub_field('add_description');
     	?>
	<section class="banner_one_section">
		<div class="bo_bg">
			 <?php if(!empty($add_banner_image)){ ?>
			<?php echo wp_get_attachment_image( $add_banner_image, 'full', "", array( "class" => "img-desktop" ) ); ?>
			<?php }else{ ?>
			<img class="img-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-re-üsidentiel-phase.jpg" alt="" />
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
		<?php if(!empty($add_description)) { ?>
		<div class="chez_part">
			<div class="container_big" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
				<div class="chez_main">
					<?php echo $add_description; ?>
				</div>
			</div>
		</div>
		 <?php } ?>
	</section>