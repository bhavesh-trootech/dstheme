<?php
     	$add_title = get_sub_field('add_title');
     	$add_description = get_sub_field('add_description');
     	$add_image1 = get_sub_field('add_image1');
     	$add_image2 = get_sub_field('add_image2');
     	?>
	<section class="enbet_section" id="piscin-en-beton">
		<div class="container_big">
			<div class="enbet_main">
				<div class="enbet_left" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($add_title)) { ?>
					<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="100"><?php echo $add_title; ?></h2>
					<?php } ?>

				<?php if(!empty($add_description)) { ?>
					<?php echo $add_description; ?>
					<?php } ?>

					<?php if( have_rows('add_links') ): ?>
					    <?php $delay=1; while( have_rows('add_links') ): the_row();
					    	 $add_link_text = get_sub_field('add_link_text');
					    	 $add_link = get_sub_field('add_link');
				        ?>
				        <?php if(!empty($add_link_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-delay="<?php echo 200 * $delay; ?>">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
					</div>
					<?php } ?>
					<?php $delay++; endwhile; ?>
				<?php endif; ?>

				</div>
				<div class="enbet_right">
					<div class="enbet_on">
						<?php if(!empty($add_image1)){ ?>
						<?php echo wp_get_attachment_image( $add_image1, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/enbet-1-min.jpg" alt="" />
						<?php } ?>

					</div>
					<div class="enbet_tw parallax_scroll">
						<?php if(!empty($add_image2)){ ?>
						<?php echo wp_get_attachment_image( $add_image2, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/produits_01_min.jpg" alt="" />
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>