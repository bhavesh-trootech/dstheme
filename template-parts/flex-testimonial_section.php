<!--services-renovation & commercial page-->
<?php
 	$add_title = get_sub_field('add_title');
 	$add_sub_text = get_sub_field('add_sub_text');
 	?>
<section class="testimonials_section">
		<div class="container_big">
			<div class="testi_head" data-aos="fade-up" data-aos-duration="1200">
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title ?></h2>
				<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_sub_text ?></h5>
			</div>
			<div class="testi_slider owl-carousel">
				<?php
	     $args = array(
	      'post_type' => 'testimonials',
	      'posts_per_page' => -1,
	      'order' => 'DESC',
	      'post_status' =>'publish',
	     );
	     ?>
	     <?php
	        $queryTestimonial = new WP_Query($args);
	       if ( $queryTestimonial->have_posts() ) : ?>
	         <?php while ( $queryTestimonial->have_posts() ) : $queryTestimonial->the_post(); ?>
				<div class="item">
					<div class="testi_box">
						<div class="testi_txt">
							<?php echo the_content(); ?>
						</div>
						<div class="author"><span>-----</span> <?php echo the_title(); ?></div>
					</div>
				</div>
				<?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>
			  <?php else : ?>
			      <!-- <p><?php //_e( 'Sorry, no portfolio matched your criteria.', 'dstheme' ); ?></p> -->
			  <?php endif; ?>

			</div>
        <div class="progress-div">
			<div class="slide-progress"></div>
		</div>

		</div>
	</section>