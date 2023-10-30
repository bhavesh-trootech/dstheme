<?php
     	$commercial_background_image = get_sub_field('commercial_background_image');
     	$commercial_mobile_background_image = get_sub_field('commercial_mobile_background_image');
     	$commercial_institutionnel_title = get_sub_field('commercial_institutionnel_title');
     	$commercial_subtext = get_sub_field('commercial_subtext');
     	$commercial_small_text = get_sub_field('commercial_small_text');
     	?>
	<section class="band_two_section">
			<?php if(!empty($commercial_background_image)) {
			$commercial_background_image_url = $commercial_background_image['url'];
		} else {
			$commercial_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-02.jpg';
		}
		 ?>
		<div class="batw_bg parallax band_desktop" style="background-image: url(<?php echo $commercial_background_image_url; ?>);">
		</div>

		<?php if(!empty($commercial_mobile_background_image)) {
			$commercial_mobile_background_image_url = $commercial_mobile_background_image['url'];
		} else {
			$commercial_mobile_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-spa-mobile.png';
		}
		 ?>
		<div class="batw_bg parallax band_mobile" style="background-image: url(<?php echo $commercial_mobile_background_image_url; ?>);">
		</div>

		<div class="container_big">
			<div class="batw_txt">
               <?php if(!empty($commercial_subtext)) { ?>
				<div class="batw_tleft" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="200">
					<?php echo $commercial_subtext; ?>
				</div>
			    <?php } ?>
			    <?php if(!empty($commercial_institutionnel_title)) { ?>
				<div class="batw_tright" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300">
					<h2><?php echo $commercial_institutionnel_title; ?></h2>
				</div>
				<?php } ?>

			</div>
			<?php if(!empty($commercial_small_text)) { ?>
			<div class="batw_ex" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100"><?php echo $commercial_small_text; ?></div>
		<?php } ?>
		</div>
	</section>