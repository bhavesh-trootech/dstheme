<?php
     	$dans_les_medias_title = get_sub_field('dans_les_medias_title');
     	$vous_navez_pas_subtext = get_sub_field('vous_navez_pas_subtext');
     	$tout_voir_text = get_sub_field('tout_voir_text');
     	$tout_voir_link = get_sub_field('tout_voir_link');
     	?>
		<section class="real_dans_section">
		<div class="container_big">
			<div class="dans_part">
				<div class="real_head" data-aos="fade-up" data-aos-duration="1200">
			<?php if(!empty($dans_les_medias_title)) { ?>
					<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $dans_les_medias_title; ?></h2>
			<?php } ?>

			<?php if(!empty($vous_navez_pas_subtext)) { ?>
					<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $vous_navez_pas_subtext; ?></h5>
			<?php } ?>

			<?php if(!empty($tout_voir_text)) { ?>
					<div class="more_link" data-aos="fade-in" data-aos-duration="1200" data-aos-delay="600"><a href="<?php echo $tout_voir_link['url']; ?>"><?php echo $tout_voir_text; ?></a></div>
			<?php } ?>

				</div>

				<div class="dans_blocks">
					<?php
	     $argsPresss = array(
	      'post_type' => 'press',
	      'posts_per_page' => 2,
	      'order' => 'DESC',
	      'post_status' =>'publish',
	     );
	     ?>
	       <?php
	        $query = new WP_Query($argsPresss);
	       if ( $query->have_posts() ) : ?>
	         <?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="dans_box">
						<div class="dans_img">
							<?php
						       if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'full' );
									} else { ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dans_02.jpg" alt="" />
							<?php } ?>
						</div>
						<div class="caption"><?php _e( 'La Presse', 'dstheme' ); ?></div>
						<div class="dans_title">
							<?php echo the_title(); ?>
						</div>
						<div class="more_link"><a href="<?php echo the_permalink(); ?>"><?php _e( 'En Lire Plus', 'dstheme' ); ?></a></div>
					</div>
					<?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>

	  <?php else : ?>
	      <p><?php _e( 'Sorry, no press matched your criteria.', 'dstheme' ); ?></p>
	  <?php endif; ?>

				</div>
			</div>
			</div>
	</section>