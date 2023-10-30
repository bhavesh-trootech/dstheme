<?php
     	$add_video_image = get_sub_field('add_video_image');
     	$add_video_iframe = get_sub_field('add_video_iframe');
     	$add_right_content = get_sub_field('add_right_content');
     	?>
	<section class="video_text_section">
		<div class="container_big">
			<div class="video_text_main">
				<div class="vtm_left">
					<div class="vtm_img parallax_scroll">
						 <?php if(!empty($add_video_image)){ ?>
						<?php echo wp_get_attachment_image( $add_video_image, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video_img.jpg" alt="" />
						<?php } ?>
					</div>
					<div class="vtm_play">
						<a class="video1" href="<?php echo $add_video_iframe; ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play_icon.svg" alt="" />
							 </a>
					</div>
				</div>
				<?php if(!empty($add_right_content)) { ?>
				<div class="vtm_right" data-aos="fade-up" data-aos-duration="1200">
					<?php echo $add_right_content; ?>
					<?php if( have_rows('add_links') ): ?>
				    <?php $delay =1; while( have_rows('add_links') ): the_row();
				    	 $add_link_text = get_sub_field('add_link_text');
				    	 $add_link = get_sub_field('add_link');
			        ?>
					<div class="more_link" data-aos="fade-up" data-aos-delay="<?php echo 400 * $delay; ?>">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
					</div>
					<?php $delay++; endwhile; ?>
		       <?php endif; ?>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>