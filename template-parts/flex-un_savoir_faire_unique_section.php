<?php
     	$un_savoir_faire_unique_title = get_sub_field('un_savoir_faire_unique_title');
     	$add_description = get_sub_field('add_description');
     	$add_sub_text = get_sub_field('add_sub_text');
     	?>
	<section class="savoir_section" id="savoir_section">
		<div class="container_big">
			<div class="savoir_main">
				<div class="savoir_left" data-aos="fade-up" data-aos-duration="1200">
                  <?php if(!empty($un_savoir_faire_unique_title)) { ?>
					<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $un_savoir_faire_unique_title; ?></h2>
					<?php } ?>
					<?php if(!empty($add_description)) { ?>
						<?php echo $add_description; ?>
					<?php } ?>
				</div>
            <?php if(!empty($add_sub_text)) { ?>
				<div class="savoir_right" data-aos="fade-up" data-aos-duration="1200">
					<div class="sav_txt">
						<h4 class="notupper" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600"><?php echo $add_sub_text; ?></h4>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>