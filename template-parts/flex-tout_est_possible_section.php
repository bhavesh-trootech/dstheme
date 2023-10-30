<?php
     	$add_background_image = get_sub_field('add_background_image');
     	$add_title = get_sub_field('add_title');
     	$add_description = get_sub_field('add_description');
     	?>
	<section class="band_three_section">
		<?php if(!empty($add_background_image)) {
			$add_background_image_url = $add_background_image['url'];
		} else {
			$add_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-01-big.jpg';
		}
		 ?>
		<div class="bath_bg parallax" style="background-image: url(<?php echo $add_background_image_url;?>);">
		</div>
		<div class="container_big">
			<div class="bath_txt">
				<?php if(!empty($add_title)) { ?>
				<h3 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h3>
				<?php } ?>

				<?php if(!empty($add_description)) { ?>
				<?php echo $add_description; ?>
				<?php } ?>

			</div>
		</div>
	</section>