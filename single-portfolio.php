<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="single-portfolio-container">
			<div class="container_big">
				<div class="row">
					<div class="col-md-7" data-aos="fade-up" data-aos-duration="1200">
						<h1><?php echo the_title(); ?></h1>
						<?php  $postID = get_the_ID();
                         $cat_array = get_the_terms($postID, 'portfolio-category' ); ?>
						<div class="caption"><?php echo $cat_array[0]->name;  ?></div>
					</div>
				</div>

				<div class="single-portfolio-content">
					<div class="row">
						<div class="col-sm-7" data-aos="fade-up" data-aos-duration="1200">
							<?php 
							$add_left_content = get_field('add_left_content');
							if(!empty($add_left_content)) { echo $add_left_content; } else{
								echo "<h3>No content found yet.</h3>";
							} ?>
							

          <?php if( have_rows('add_properties') ): ?>
						<div class="portfolio-detail-list" data-aos="fade-up" data-aos-duration="1200">
							<ul>
							<?php while( have_rows('add_properties') ): the_row(); 
					    	 $add_title = get_sub_field('add_title');
					    	 $add_value = get_sub_field('add_value');
				            ?>
							<li><strong><?php if(!empty($add_title)) { echo $add_title; } else{ echo "NA"; } ?></strong><?php if(!empty($add_value)) { echo $add_value; } else{ echo "NA"; } ?></li>
							<?php endwhile; ?>
								</ul>
							</div>
							 <?php endif; ?>
						</div>
		                
						<div class="col-sm-5 single-portfolio-img">
						<?php
						 $add_right_image = get_field('add_right_image');
						 if(!empty($add_right_image)){
							?>
							<?php echo wp_get_attachment_image( $add_right_image, 'full' ); ?>
							<?php } ?>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="realise-vos-main">
			<div class="container">
				<div class="row">
                 <?php
				$add_title = get_field('add_title','option');
				$add_subtext = get_field('add_subtext','option');
				$add_link_text = get_field('add_link_text','option');
				$add_link = get_field('add_link','option');
				?>
					<div class="col-sm-12 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <?php if(!empty($add_title)) { ?>
						<h2><?php echo $add_title; ?></h2>
						<?php } ?>
					<?php if(!empty($add_subtext)) { ?>
						<h5><?php echo $add_subtext; ?></h5>
						<?php } ?>
					<?php if(!empty($add_link_text)) { ?>
						<div class="more_link">
							<a href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
						</div>
					<?php } ?>
					</div>

					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="realise-slider owl-carousel">
							<?php if( have_rows('add_gallery_images') ): ?>
						    <?php while( have_rows('add_gallery_images') ): the_row(); 
						    	 $add_image = get_sub_field('add_image');
					        ?>
							<div class="item">
								<?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
							</div>
						<?php endwhile; ?>
		       <?php endif; ?>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
