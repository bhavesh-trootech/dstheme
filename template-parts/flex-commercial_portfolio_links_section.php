<section class="commercial-services">
		<div class="container_big">
			<div class="commercial-services-main">
				<?php if( have_rows('add_boxes') ): ?>
			    <?php $delay=1; while( have_rows('add_boxes') ): the_row();
			    	 $add_portfolio_image = get_sub_field('add_portfolio_image');
			    	 $add_title = get_sub_field('add_title');
			    	 $add_link = get_sub_field('add_link');
		        ?>
				<div class="commercial-services-box">
					<div class="commercial-service-img">
					 <?php if(!empty($add_portfolio_image)){ ?>
						<?php echo wp_get_attachment_image( $add_portfolio_image, 'full' ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/com-services-1.png" alt="" />
					<?php } ?>
					</div>
				<div class="services-caption">
					<?php if(!empty($add_title)) { ?>
					<h3 data-aos="fade-up" data-aos-delay="<?php echo 50 * $delay; ?>"><?php echo $add_title; ?></h3>
					<?php } ?>
					<?php if(!empty($add_link)) { ?>
					<div class="more_link" data-aos="fade-up" data-aos-delay="<?php echo 70 * $delay; ?>">
						<a href="<?php echo $add_link['url'];?>"><?php _e( 'Voir portfolio', 'dstheme' ); ?></a>
					</div>
				<?php } ?>
				</div>
				</div>
            <?php $delay++; endwhile; ?>
		   <?php endif; ?>
			</div>
		</div>
	</section>