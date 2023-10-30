<?php
     	$add_banner_image = get_sub_field('add_banner_image');
        $add_mobile_banner = get_sub_field('add_mobile_banner');
     	$add_big_text = get_sub_field('add_big_text');
     	$add_small_text = get_sub_field('add_small_text');
     	$add_scroll_link = get_sub_field('add_scroll_link');
     	$add_heading = get_sub_field('add_heading');
     	?>
<section class="banner_one_section">
		<div class="bo_bg">
			 <?php if(!empty($add_banner_image)){ ?>
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
		 <?php if(!empty($add_heading)) { ?>
		<div class="psc_part" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
			<div class="container_big">
				<div class="psc_main">
					<h3><?php echo $add_heading; ?></h3>
               <?php if(!empty($add_scroll_link)) { ?>
					<a href="<?php echo $add_scroll_link['url']; ?>" class="go-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.jpg" alt="" /></a>
					 <?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>