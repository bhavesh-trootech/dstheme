<?php
     	$add_shortcode = get_sub_field('add_shortcode');
     	?>
	<section class="soumission-form-main" id="submission-form">
		<div class="container_big">
			 <?php if(!empty($add_shortcode)){
				?>
			<?php echo do_shortcode(get_sub_field('add_shortcode')); ?>
		    <?php } ?>
		</div>
	</section>