 <?php if( have_rows('add_section') ): ?>
    <?php while( have_rows('add_section') ): the_row();
    	 $section_layout = get_sub_field('section_layout');
    ?>
<?php if($section_layout == "Left content right image"){ ?>
<?php
$left_content_section_id = get_sub_field('left_content_section_id');
$add_left_content = get_sub_field('add_left_content');
$add_right_image = get_sub_field('add_right_image');
?>
<section class="services_listing_one" id="<?php echo $left_content_section_id; ?>">
		<div class="container_big">
			<div class="ser_main">
				<div class="ser_left" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($add_left_content)) { ?>
					<?php echo $add_left_content; ?>
				    <?php } ?>

				    <?php if( have_rows('add_left_content_links') ): ?>
			    <?php $delay=1; while( have_rows('add_left_content_links') ): the_row();
			    	 $add_link_text = get_sub_field('add_link_text');
			    	 $add_link = get_sub_field('add_link');
		        ?>
		        <?php if(!empty($add_link_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-delay="<?php echo 300 * $delay; ?>">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
					</div>
					<?php } ?>
					<?php $delay++; endwhile; ?>
		        <?php endif; ?>

				</div>
				<div class="ser_right">
					<div class="ser_img parallax_scroll">
					<?php if(!empty($add_right_image)){ ?>
					<?php echo wp_get_attachment_image( $add_right_image, 'full' ); ?>
					<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-8-min.png" alt="" />
				<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }
elseif($section_layout == "Left image right content") { ?>
	<?php
$left_image_section_id = get_sub_field('left_image_section_id');
$add_left_image = get_sub_field('add_left_image');
$add_right_content = get_sub_field('add_right_content');
?>
	<section class="services_listing_two" id="<?php echo $left_image_section_id; ?>">
		<div class="container_big">
			<div class="ser_main">
				<div class="ser_left">
					<div class="ser_img parallax_scroll">
					<?php if(!empty($add_left_image)){ ?>
					<?php echo wp_get_attachment_image( $add_left_image, 'full' ); ?>
					<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-9-min.png" alt="" />
					<?php } ?>
					</div>
				</div>
				<div class="ser_right" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($add_right_content)) { ?>
					<?php echo $add_right_content; ?>
				    <?php } ?>
					<?php if( have_rows('add_right_content_links') ): ?>
			    <?php $delay=1; while( have_rows('add_right_content_links') ): the_row();
			    	 $add_link_text = get_sub_field('add_link_text');
			    	 $add_link = get_sub_field('add_link');
		        ?>
		        <?php if(!empty($add_link_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-delay="<?php echo 300 * $delay; ?>">
						<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
					</div>
					<?php } ?>
					<?php $delay++; endwhile; ?>
		        <?php  endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php } elseif($section_layout == "Êtes vous paysagiste section") { ?>
	<?php
$etes_vous__section_id = get_sub_field('etes_vous__section_id');
$add_background_image = get_sub_field('add_background_image');
$add_title = get_sub_field('add_title');
$add_sub_text = get_sub_field('add_sub_text');
?>
	<section class="band_two_section" id="<?php echo $etes_vous__section_id; ?>">
		<?php if(!empty($add_background_image)) {
			$add_background_image_url = $add_background_image['url'];
		} else {
			$add_background_image_url = get_stylesheet_directory_uri() .'/assets/images/band-01-big.jpg';
		}
		 ?>
		<div class="batw_bg parallax" style="background-image: url(<?php echo $add_background_image_url;?>);"></div>
		<div class="container_big">
			<div class="batw_txt">
				<?php if(!empty($add_sub_text)) { ?>
				<div class="batw_tleft" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200">
					<?php echo $add_sub_text; ?>
				</div>
				<?php } ?>
				<?php if(!empty($add_title)) { ?>
				<div class="batw_tright" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400">
					<h2><?php echo $add_title; ?></h2>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>
<?php } ?>
	<?php endwhile; ?>
	<?php endif; ?>