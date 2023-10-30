<?php
	     	$add_title = get_sub_field('add_title');
	     	$add_sub_text = get_sub_field('add_sub_text');
	     	$add_link_text = get_sub_field('add_link_text');
	     	$add_link = get_sub_field('add_link');
	     	?>
	<section class="reparat_section">
		<div class="container_big">
			<div class="reparat_head" data-aos="fade-up" data-aos-duration="1200">
				<?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
				<?php } ?>
				<?php if(!empty($add_sub_text)) { ?>
				<?php echo $add_sub_text; ?>
				<?php } ?>
				<?php if(!empty($add_link_text)) { ?>
				<div class="more_link" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600"><a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?> </a></div>
				<?php } ?>
			</div>
		</div>
	</section>