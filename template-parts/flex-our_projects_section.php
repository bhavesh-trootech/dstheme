<?php
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	?>
<section class="peinture_section">
		<div class="container_big">
			<div class="pein_head" data-aos="fade-up" data-aos-duration="1200">
				<?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
				<?php } ?>
				<?php if(!empty($add_sub_text)) { ?>
				<h5  data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_sub_text; ?></h5>
				<?php } ?>
			</div>

			<?php
		    $argsportfolios_posts = array(
		        'post_type' => 'portfolio',
		        'post_status' => 'publish',
		        'order'   => 'DESC',
		        'posts_per_page' => '10',
		    );
		    $portfolios_posts = new WP_Query( $argsportfolios_posts );
		    ?>
        <?php if ( $portfolios_posts->have_posts() ) : ?>
			<div class="pein_list">
				<?php $delay =1; while ( $portfolios_posts->have_posts() ) : $portfolios_posts->the_post(); ?>
				<div class="pein_box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
					<a href="<?php echo the_permalink(); ?>">
						<div class="pein_img">
							<?php
						       if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full' );
									} else { ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pain_img_min.jpg" alt="" />
						<?php } ?>
						</div>
					</a>
				</div>
			<?php $delay++; endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
		</div>
	</section>