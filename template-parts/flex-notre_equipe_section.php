<?php
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	?>
	<section class="notre_section">
		<div class="container_big">
			<div class="notre_head" data-aos="fade-up" data-aos-duration="1200">
			<?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
			<?php } ?>
			<?php if(!empty($add_sub_text)) { ?>
				<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_sub_text; ?></h5>
			<?php } ?>
			</div>

			<?php if( have_rows('team_members') ): ?>
			<div class="notre_main">
				<?php $delay =1; while( have_rows('team_members') ): the_row();
			    	 $member_name = get_sub_field('member_name');
			    	 $member_designation = get_sub_field('member_designation');
			    	 $poste_number = get_sub_field('poste_number');
		        ?>

				<div class="notre_box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
					<?php if(!empty($member_name)) { ?>
					<div class="notre_title"><?php echo $member_name; ?></div>
					<?php } ?>
					<div class="notre_detail">
						<?php if(!empty($member_designation)) { ?>
						<div class="notre_left"><?php echo $member_designation; ?></div>
						<?php } ?>
						<?php if(!empty($poste_number)) { ?>
						<div class="notre_right"><?php echo $poste_number; ?></div>
					<?php } ?>
					</div>
				</div>
			<?php  $delay++; endwhile; ?>
			</div>
		<?php endif; ?>
		</div>
	</section>