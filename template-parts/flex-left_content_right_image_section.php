<?php
     	$add_left_content = get_sub_field('add_left_content');
     	$add_right_image = get_sub_field('add_right_image');
     	?>
	<section class="les_text_section" id="les_text_section">
		<div class="container_big">
			<div class="les_text_main">
				<?php if(!empty($add_left_content)) { ?>
				<div class="les_left" data-aos="fade-up" data-aos-duration="1200">
					<?php echo $add_left_content; ?>
				</div>
				<?php } ?>

				<div class="les_right parallax_scroll">
					<div class="les_img">
					<?php if(!empty($add_right_image)){ ?>
					<?php echo wp_get_attachment_image( $add_right_image, 'full' ); ?>
					<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/produits-02-min.jpg" alt="" />
					<?php } ?>
					</div>
				</div>

			</div>
		</div>
	</section>