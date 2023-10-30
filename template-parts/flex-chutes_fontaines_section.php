<?php
     	$add_background_image = get_sub_field('add_background_image');
     	$add_background_mobile_image = get_sub_field('add_background_mobile_image');
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	?>
	<section class="band_one_section">
 <?php if(!empty($add_background_image)) {
			$add_background_image_url = $add_background_image['url'];
		} else {
			$add_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-05-min.jpg';
		}
		 ?>
		<div class="baon_bg parallax band_desktop" style="background-image: url(<?php echo $add_background_image_url;?>);">
		</div>

		 <?php if(!empty($add_background_mobile_image)) {
			$add_background_mobile_image_url = $add_background_mobile_image['url'];
		} else {
			$add_background_mobile_image_url = get_stylesheet_directory_uri() .'/assets/images/band-chute-mobile.jpg';
		}
		 ?>
		<div class="baon_bg parallax band_mobile" style="background-image: url(<?php echo $add_background_mobile_image_url;?>);">
		</div>

		<div class="container_big">
			<div class="baon_txt">
          <?php if(!empty($add_title)) { ?>
				<div class="baon_tleft" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
					<h2><?php echo $add_title; ?></h2>
				</div>
				<?php } ?>
				<?php if(!empty($add_sub_text)) { ?>
				<div class="baon_tright" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400">
					<?php echo $add_sub_text; ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>