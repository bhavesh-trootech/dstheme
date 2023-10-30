<?php
     	$realisez_vos_reves_title = get_sub_field('realisez_vos_reves_title');
     	$val_mar_dans_les_subtext = get_sub_field('val-mar_dans_les_subtext');
     	$explorer_notre_portfolio_text = get_sub_field('explorer_notre_portfolio_text');
     	$explorer_notre_portfolio_link = get_sub_field('explorer_notre_portfolio_link');
     	?>
		<section class="real_dans_section">
		<div class="container_big">
			<div class="realisez_part">
				<div class="real_head" data-aos="fade-up" data-aos-duration="1200">
					<?php if(!empty($realisez_vos_reves_title)) { ?>
					<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $realisez_vos_reves_title; ?></h2>
					<?php } ?>

				<?php if(!empty($val_mar_dans_les_subtext)) { ?>
					<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $val_mar_dans_les_subtext; ?></h5>
					<?php } ?>

				<?php if(!empty($explorer_notre_portfolio_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600"><a href="<?php echo $explorer_notre_portfolio_link['url']; ?>"><?php echo $explorer_notre_portfolio_text; ?></a></div>
					<?php } ?>

				</div>
				<div class="real_slider owl-carousel">
		<?php
	     $args = array(
	      'post_type' => 'portfolio',
	      'posts_per_page' => -1,
	      'order' => 'DESC',
	      'post_status' =>'publish',
	      'meta_query' => array(
	                     array(
	                        'key'     => 'display_in_showcase',
	                        'value'   => 'yes',
	                        'compare' => '=',
	                    )
	                ),
	     );
	     ?>
	       <?php
	        $query = new WP_Query($args);
	       if ( $query->have_posts() ) : ?>
	         <?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="item">
							<div class="rslid_box">
								<div class="rslid_img">
							<?php
						       if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full' );
									} else { ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-01.jpg" alt="" />
									<?php } ?>
								</div>
								<div class="rslid_txt">
									<div class="rslid_left">
										<h3><?php echo the_title(); ?></h3>
									</div>
									<div class="rslid_right">
										<div class="more_link">
											<a href="<?php echo the_permalink(); ?>"><?php _e( 'Info', 'dstheme' ); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>

	  <?php else : ?>
	      <p><?php _e( 'Sorry, no portfolio matched your criteria.', 'dstheme' ); ?></p>
	  <?php endif; ?>
	 
	  
					</div>
				
				</div>
				 <div class="progress-div">
					<div class="slide-progress"></div>
				</div>
					 
				</div>
	</section>