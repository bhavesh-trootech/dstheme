<?php
     	$add_background_image = get_sub_field('add_background_image');
     	$add_mobile_background_image = get_sub_field('add_mobile_background_image');
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	$add_link_text = get_sub_field('add_link_text');
     	$add_link = get_sub_field('add_link');
     	?>
	<section class="demande-de-soumissio">
		<?php if(!empty($add_background_image)) {
			$add_background_image_url = $add_background_image['url'];
		} else {
			$add_background_image_url = get_stylesheet_directory_uri() .'/assets/images/contact-img.png';
		}
		 ?>
		 <div class="bo_bg parallax band_desktop" style="background-image: url(<?php echo $add_background_image_url; ?>);">
		</div>

		<?php if(!empty($add_mobile_background_image)) {
			$add_mobile_background_image_url = $add_mobile_background_image['url'];
		} else {
			$add_mobile_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-contact-mobile.png';
		}
		 ?>
		 <div class="bo_bg parallax band_mobile" style="background-image: url(<?php echo $add_mobile_background_image_url; ?>);">
		</div>

		<div class="text-block">
            <?php if(!empty($add_title)) { ?>
				<h2><?php echo $add_title; ?></h2>
				<?php } ?>
				<?php if(!empty($add_sub_text)) { ?>
				<p><?php echo $add_sub_text; ?></p>
				<?php } ?>
				<?php if(!empty($add_link_text)) { ?>
				<div class="more_link">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
				</div>
				<?php } ?>
		</div>
	</section>