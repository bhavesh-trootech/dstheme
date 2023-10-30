<?php
     	$add_title = get_sub_field('add_title');
     	$add_sub_text = get_sub_field('add_sub_text');
     	?>
	<section class="fiches-techniques" id="document-techniques">
		<div class="container_big">
			<div class="fiches_head" data-aos="fade-up" data-aos-duration="1200">
			<?php if(!empty($add_title)) { ?>
				<h2 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="200"><?php echo $add_title; ?></h2>
				<?php } ?>
				<?php if(!empty($add_sub_text)) { ?>
				<h5 data-aos="fade-in" data-aos-duration="1200" data-aos-delay="400"><?php echo $add_sub_text; ?></h5>
				<?php } ?>
			</div>

<?php
    $argsPdfs = array(
        'post_type' => 'commercial-pdfs',
        'post_status' => 'publish',
        'posts_per_page' => '6',
        'order' => 'DESC',
        'paged' => 1,
    );
    $pdf_posts = new WP_Query( $argsPdfs );
    ?>
    <?php if ( $pdf_posts->have_posts() ) : ?>
			<div class="fiches-techniques-main">
				<?php $delay =1; while ( $pdf_posts->have_posts() ) : $pdf_posts->the_post(); ?>
				<?php $add_pdf_link = get_field('add_pdf_link'); ?>
			<div class="fiches-techniques-box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
				<div class="fiches-techniques-tab">
						<h4><a target="_blank" href="<?php echo $add_pdf_link['url']; ?>"><?php echo the_title(); ?></a></h4>
				</div>
			</div>
		    <?php $delay++; endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
			<div class="more_link load_pdfs_btn" data-maxp="<?php echo $pdf_posts->max_num_pages; ?>" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"><a><?php _e( 'Voir Tout', 'dstheme' ); ?></a></div>
	</div>
</section>