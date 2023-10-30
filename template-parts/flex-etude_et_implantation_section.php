<?php
     	$add_right_image = get_sub_field('add_right_image');
     	?>
	<section class="votre_section">
		<div class="container_big">
			<div class="votre_main">
				<div class="votre_left">
					<?php if( have_rows('etude_boxes') ): ?>
			    <?php while( have_rows('etude_boxes') ): the_row();
			    	 $add_number = get_sub_field('add_number');
			    	 $add_title = get_sub_field('add_title');
			    	 $add_description = get_sub_field('add_description');
		        ?>
					<div class="votre_box" data-aos="fade-up" data-aos-duration="1200">
						<div class="votre_head" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="100">
							<?php if(!empty($add_number)) { ?>
							<div class="votre_num"><?php echo $add_number; ?></div>
							<?php } ?>

							<?php if(!empty($add_title)) { ?>
							<div class="votre_title">
								<h3><?php echo $add_title; ?></h3>
							</div>
							<?php } ?>

						</div>
						<?php if(!empty($add_description)) { ?>
						<div class="votre_txt" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
							<?php echo $add_description; ?>
						</div>
						<?php } ?>

					</div>
					<?php endwhile; ?>
		          <?php endif; ?>

				</div>
				<div class="votre_right parallax_scroll">
				<?php if(!empty($add_right_image)){ ?>
				<?php echo wp_get_attachment_image( $add_right_image, 'full' ); ?>
				<?php }else{ ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/votre-img-min.jpg" alt="" />
				<?php } ?>
				</div>
			</div>
		</div>
	</section>