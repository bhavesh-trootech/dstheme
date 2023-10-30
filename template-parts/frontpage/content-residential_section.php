<?php
     	$residential_background_image = get_sub_field('residential_background_image');
     	$residential_mobile_background_image = get_sub_field('residential_mobile_background_image');
     	$residential_title = get_sub_field('residential_title');
     	$residential_sub_text = get_sub_field('residential_sub_text');
     	?>
	<section class="band_one_section">
      <?php if(!empty($residential_background_image)) {
			$residential_background_image_url = $residential_background_image['url'];
		} else {
			$residential_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-01-big.jpg';
		}
		 ?>
		<div class="baon_bg parallax band_desktop" style="background-image: url(<?php echo $residential_background_image_url;?>);">
		</div>

		<?php if(!empty($residential_mobile_background_image)) {
			$residential_mobile_background_image_url = $residential_mobile_background_image['url'];
		} else {
			$residential_mobile_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-pool-mobile.jpg';
		}
		 ?>
		<div class="baon_bg parallax band_mobile" style="background-image: url(<?php echo $residential_mobile_background_image_url;?>);">
		</div>

		<div class="container_big">
			<div class="baon_txt">
            <?php if(!empty($residential_title)) { ?>
				<div class="baon_tleft" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="200">
					<h2><?php echo $residential_title; ?></h2>
				</div>
			<?php } ?>

			 <?php if(!empty($residential_sub_text)) { ?>
				<div class="baon_tright" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300">
					<?php echo $residential_sub_text; ?>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>