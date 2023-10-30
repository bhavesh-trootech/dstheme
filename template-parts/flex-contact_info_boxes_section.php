<?php
     	$nos_bureaux_title = get_sub_field('nos_bureaux_title');
     	$laval_bureau_chef_title = get_sub_field('laval_bureau_chef_title');
     	$contact_info = get_sub_field('contact_info');
     	$carrieres = get_sub_field('carrieres');
     	$recherche_emploi = get_sub_field('recherche_emploi');
     	$add_email = get_sub_field('add_email');
     	$suivez_nous = get_sub_field('suivez_nous');
     	$nos_reseaux_sociaux = get_sub_field('nos_reseaux_sociaux');
     	?>
<section class="contacts" id="contact-info">
		<div class="container_big">
		<div class="contact-main">
			<div class="contact-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
				<?php if(!empty($nos_bureaux_title)) { ?>
				<h3><?php echo $nos_bureaux_title; ?></h3>
				<?php } ?>
				<?php if(!empty($laval_bureau_chef_title)) { ?>
				<h5 class="upper"><?php echo $laval_bureau_chef_title; ?></h5>
				<?php } ?>

				<?php if(!empty($contact_info)) { ?>
				<?php echo $contact_info; ?>
				<?php } ?>
			</div>
			<div class="contact-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <?php if(!empty($carrieres)) { ?>
				<h3><?php echo $carrieres; ?></h3>
				<?php } ?>
				<?php if(!empty($recherche_emploi)) { ?>
				<h5 class="upper"><?php echo $recherche_emploi; ?></h5>
				<?php } ?>
               <?php if(!empty($add_email)) { ?>
				<?php echo $add_email; ?>
			<?php } ?>
			</div>
			<div class="contact-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
				<?php if(!empty($suivez_nous)) { ?>
				<h3><?php echo $suivez_nous; ?></h3>
				<?php } ?>
				<?php if(!empty($nos_reseaux_sociaux)) { ?>
				<h5 class="upper"><?php echo $nos_reseaux_sociaux; ?></h5>
				<?php } ?>
				<?php if( have_rows('add_social_links') ): ?>
				<div class="social-link">
				<ul>
					    <?php while( have_rows('add_social_links') ): the_row();
					    	 $add_link_text = get_sub_field('add_link_text');
					    	 $add_link = get_sub_field('add_link');
				        ?>
						<li>
						<?php if(!empty($nos_reseaux_sociaux)) { ?>
							<a target="_blank" href="<?php echo $add_link['url']; ?>"><?php echo $add_link_text; ?></a>
						<?php } ?>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
				 <?php endif; ?>
			</div>
		</div>
	</div>
</section>