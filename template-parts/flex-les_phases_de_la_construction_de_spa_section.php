<?php
     	$add_title_right = get_sub_field('add_title_right');
     	$add_description_right = get_sub_field('add_description_right');
     	?>
	<section class="phases_text_section">
		<div class="container_big">
			<div class="phases_text_main">
				<div class="phases_left" data-aos="fade-up" data-aos-duration="1200">
					<?php if( have_rows('add_phase_boxes') ): ?>
			    <?php while( have_rows('add_phase_boxes') ): the_row();
			    	 $add_title = get_sub_field('add_title');
			    	 $add_description = get_sub_field('add_description');
		        ?>
					<div class="phases_box">
						 <?php if(!empty($add_title)) { ?>
						<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="100"><?php echo $add_title; ?></h2>
						<?php } ?>
				        <?php if(!empty($add_description)) { ?>
						<?php echo $add_description; ?>
						<?php } ?>
					</div>
					<?php endwhile; ?>
		        <?php endif; ?>
				</div>

				<div class="phases_right" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($add_title_right)) { ?>
						<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="100"><?php echo $add_title_right; ?></h2>
						<?php } ?>
				        <?php if(!empty($add_description_right)) { ?>
						<?php echo $add_description_right; ?>
						<?php } ?>
						<?php if( have_rows('add_links') ): ?>
					    <?php $delay =1; while( have_rows('add_links') ): the_row();
					    	 $add_link_text = get_sub_field('add_link_text');
					    	 $add_link = get_sub_field('add_link');
				        ?>
 					<?php if(!empty($add_link_text)) { ?>
					<div class="more_link" data-aos="fade-up" data-aos-delay="<?php echo 300 * $delay; ?>">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
					</div>
					<?php } ?>
					<?php $delay++; endwhile; ?>
		        <?php endif; ?>
				</div>
			</div>
		</div>
	</section>