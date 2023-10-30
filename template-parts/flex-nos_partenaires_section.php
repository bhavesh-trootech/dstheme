<?php
     	$add_title = get_sub_field('add_title');
     	$add_subtext = get_sub_field('add_subtext');
     	?>
	<section class="peinture_section parternerListCls">
		<div class="container_big">
			<div class="pein_head" data-aos="fade-up" data-aos-duration="1200">
				<?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
				<?php } ?>
				<?php if(!empty($add_subtext)) { ?>
				<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_subtext; ?></h5>
				<?php } ?>
			</div>
			<div class="pein_list owl-carousel">
		<?php
		    $argsparteners = array(
		        'post_type' => 'partenaires',
		        'post_status' => 'publish',
		        'order'   => 'DESC',
		        'posts_per_page' => -1
		    );
		    $partetner_posts = new WP_Query( $argsparteners );
		    ?>
		    <?php if ( $partetner_posts->have_posts() ) : ?>
		    	<?php $counter = 0; while ( $partetner_posts->have_posts() ) : $partetner_posts->the_post();
                 if ($counter % 10 == 0) :
            echo $counter > 0 ? "</div>" : ""; // close div if it's not the first
            echo "<div class='pain-box-wrapper'>";
        endif;
		    	 ?>
				<div class="pein_box">
					<a href="#">
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
				<?php $counter++; endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
		</div>
	</section>