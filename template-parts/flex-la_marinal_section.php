<?php
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	$add_left_image = get_sub_field('add_left_image');
     	$add_description = get_sub_field('add_description');
     	?>
	<section class="marinal_section">
		<div class="container_big">
			<div class="real_head" data-aos="fade-up" data-aos-duration="1200">
           <?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
           <?php } ?>

			<?php if(!empty($add_sub_text)) { ?>
				<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_sub_text; ?></h5>
			<?php } ?>

			</div>
			<div class="marinal_main">
				<div class="mari_left">
					<div class="mari_img">
						 <?php if(!empty($add_left_image)){ ?>
						<?php echo wp_get_attachment_image( $add_left_image, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/produits-05-min.jpg" alt="" />
					<?php } ?>
					</div>
				</div>
				<?php if(!empty($add_description)) { ?>
				<div class="mari_right" data-aos="fade-up" data-aos-duration="1200">
					<?php echo $add_description; ?>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>