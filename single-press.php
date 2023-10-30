<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="single-press-container">
			<div class="container_big">
				<div class="row">
					<div class="col-md-7" data-aos="fade-up" data-aos-duration="1200">
						<h1><?php echo the_title(); ?></h1>
						<div class="caption"><?php _e( 'La Presse', 'dstheme' ); ?></div>
					</div>
				</div>
				<?php $postID = get_the_ID(); ?>
				<?php if( have_rows('add_section', $postID) ): ?>
			    <?php while( have_rows('add_section', $postID) ): the_row(); 
			    	 $section_layout = get_sub_field('section_layout', $postID);
			    	 $add_left_content = get_sub_field('add_left_content', $postID);
			    	 $add_right_image = get_sub_field('add_right_image', $postID);
			    	 $add_left_image = get_sub_field('add_left_image', $postID);
			    	 $add_right_content = get_sub_field('add_right_content', $postID);
		        ?>

		        <?php if($section_layout == "Left content right image"){ ?>	
				<div class="press-section grid-70">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                          <?php if(!empty($add_left_content)) { ?>
                          	<?php echo $add_left_content; ?>
				        <?php }
				        else{ ?>
				        	<h3>No content fount yet.</h3>
				        <?php } ?>
						</div>
						<div class="col-sm-6">
							<?php if(!empty($add_right_image)){	?>
							<?php echo wp_get_attachment_image( $add_right_image, 'full' ); ?>
							<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-01.png" alt="" />
							<?php } ?>
						</div>
					</div>
				</div>
				<?php }
       elseif($section_layout == "Left image right content") { ?>
				<div class="press-section grid-70">
					<div class="row">
						<div class="col-sm-6">
							<?php if(!empty($add_left_image)){	?>
							<?php echo wp_get_attachment_image( $add_left_image, 'full' ); ?>
							<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-7.png" alt="" />
							<?php } ?>
						</div>
						<div class="col-sm-6" data-aos="fade-up" data-aos-duration="1200">
							<?php if(!empty($add_right_content)) { ?>
                          	<?php echo $add_right_content; ?>
				        <?php }
				        else{ ?>
				        	<h3>No content fount yet.</h3>
				        <?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php endwhile; ?>
		         <?php endif; ?>

				<div class="press-social-share" data-aos="fade-up" data-aos-duration="1200">
					<label><?php _e( 'Partagez l’article', 'dstheme' ); ?></label>
					<a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-logo.svg" alt="" />
					</a>
					<a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-social-logotype.svg" alt="" />
					</a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" target="_new">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-logo.svg" alt="" />
					</a>
					<?php
					$title = get_the_title($postID);
					$url = get_the_permalink($postID);
					$media = get_the_post_thumbnail_url($postID)
					 ?>
					<a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=<?php echo $media; ?>&description=<?php echo $title; ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest-social-logo.svg" alt="" />
					</a>
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-plus-social-logotype.svg" alt="" />
					</a>
				</div>

			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();