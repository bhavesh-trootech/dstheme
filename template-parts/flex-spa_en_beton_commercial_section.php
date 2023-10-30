<?php
     	$add_background_image = get_sub_field('add_background_image');
     	$add_title = get_sub_field('add_title');
     	?>
	<section class="band_two_section" id="vous-architecte">
		<?php if(!empty($add_background_image)) {
			$add_background_image_url = $add_background_image['url'];
		} else {
			$add_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-04.jpg';
		}
		 ?>
		<div class="batw_bg parallax" style="background-image: url(<?php echo $add_background_image_url; ?>);">
		</div>
		<div class="container_big">
			<div class="batw_txt">
				<?php if(!empty($add_title)) { ?>
				<div class="batw_tright">
					<h2 data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100"><?php echo $add_title; ?></h2>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>