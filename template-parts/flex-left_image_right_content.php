<?php
     	$add_image = get_sub_field('add_image');
     	$add_right_content = get_sub_field('add_right_content');
     	?>
	<section class="video_text_section">
		<div class="container_big">
			<div class="video_text_main">
				<div class="vtm_left">
					<div class="vtm_img">
						 <?php if(!empty($add_image)){ ?>
						<?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/produits-02-min.jpg" alt="" />
					<?php } ?>
					</div>
				</div>
				<div class="vtm_right" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($add_right_content)) { ?>
						<?php echo $add_right_content; ?>
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
			</div>
		</div>
	</section>