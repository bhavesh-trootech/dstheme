<?php
     	$piscines_image1 = get_sub_field('piscines_image1');
     	$piscines_image2 = get_sub_field('piscines_image2');
     	$piscines_en_beton_title = get_sub_field('piscines_en_beton_title');
     	$piscines_description = get_sub_field('piscines_description');
     	$decouvrir_text = get_sub_field('decouvrir_text');
     	$decouvrir__link = get_sub_field('decouvrir__link');
     	$vos_aspirations__text = get_sub_field('vos_aspirations__text');
     	?>
	<section class="enbet_section">
		<div class="container_big">
			<div class="enbet_main">
				<div class="enbet_left" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($piscines_en_beton_title)) { ?>
					<h3 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $piscines_en_beton_title; ?></h3>
				    <?php } ?>

				    <?php if(!empty($piscines_description)) { ?>
					<?php echo $piscines_description; ?>
					<?php } ?>

					<?php if(!empty($decouvrir_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600">
						<a href="<?php echo $decouvrir__link['url'];?>"><?php echo $decouvrir_text; ?></a>
					</div>
					<?php } ?>
					<?php if(!empty($vos_aspirations__text)) { ?>
					<div class="enbet_mtxt" data-aos="fade-in" data-aos-duration="1200">
						<h4 class="notupper"><?php echo $vos_aspirations__text; ?></h4>
					</div>
					<?php } ?>
				</div>
				<div class="enbet_right">
                    <?php if(!empty($piscines_image1)) { ?>
					<div class="enbet_on">
						<?php if(!empty($piscines_image1)) { ?>
						<?php echo wp_get_attachment_image( $piscines_image1, 'full' ); ?>
						<?php }else{ ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/enbet-1-min.jpg" alt="" />
						<?php } ?>
					</div>
				    <?php } ?>
				    <?php if(!empty($piscines_image2)) { ?>
					<div class="enbet_tw parallax_scroll">
                    <?php if(!empty($piscines_image2)) { ?>
						<?php echo wp_get_attachment_image( $piscines_image2, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/enbet-2-min.jpg" alt="" />
						<?php } ?>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>