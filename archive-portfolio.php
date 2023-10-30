<?php
/**

 * */

get_header();
if(isset($_GET['ps']) && !empty($_GET['ps'])){
	$ps = $_GET['ps'];
}else{
	$ps = "";
}
if(isset($_GET['pp']) && !empty($_GET['pp'])){
	$pp = $_GET['pp'];
}else{
	$pp = "";
}
?>
<div class="portfolio-page">
	<?php
		$add_banner_image = get_field('add_banner_image','option');
		$mobile_banner_image = get_field('mobile_banner_image','option');
		$add_big_text = get_field('add_big_text','option');
		$add_small_text = get_field('add_small_text','option');
		$add_portfolio_page_link = get_field('add_portfolio_page_link','option');
     	$size = 'full';
     	?>
	<section class="banner_one_section">
		<div class="bo_bg">
			<?php if(!empty($add_banner_image)){
				?>
				<?php echo wp_get_attachment_image( $add_banner_image,'full', "", array( "class" => "img-desktop" ) ); ?>
				<?php }else{ ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-peinture.jpg" alt="" />
			<?php } ?>
			<?php if(!empty($mobile_banner_image)){
				?>
				<?php echo wp_get_attachment_image( $mobile_banner_image, 'full', "", array( "class" => "img-mobile" ) ); ?>
				<?php }else{ ?>
				<img class="img-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-mobile-home.jpg" alt="" />
			<?php } ?>
		</div>
		<div class="container_big">
			<div class="bo_txt">
				<?php if(!empty($add_big_text)) { ?>
					<div class="overflow-hidden"><h1 class="light_color slideInUp wow" data-wow-delay="500ms"><?php echo $add_big_text; ?></h1></div>
				    <?php } ?>
				    <?php if(!empty($add_small_text)) { ?>
					<h4 class="light_color fadeIn wow" data-wow-delay="900ms"><?php echo $add_small_text; ?></h4>
				  <?php } ?>
			</div>
		</div>
		<div class="scroll_down">
			<a class="scroll_animation" href="#portfolio-list"><?php _e( 'Scroll Down', 'dstheme' ); ?>
				<div class="down_line"></div>
			</a>
		</div>
	</section>

	<section class="portfolio-filter-menu" id="portfolio-list">
		<div class="container_big portfolio-menu-container">
			<div class="portfolio-filter-type">
				<ul>
					<li><a href="javascript:;" sub_id="filter-type-1"><?php _e( 'Par style +', 'dstheme' ); ?></a></li>
					<li><a href="javascript:;" sub_id="filter-type-2"><?php _e( 'Par produits +', 'dstheme' ); ?></a></li>
				</ul>
			</div>
			<div class="portfolio-category">
				<ul>
				<?php
$pattern = '/page(\/)*([0-9\/])*/i';
$finalurl = preg_replace($pattern, '', get_site_url().'/'.$GLOBALS['wp']->request);
				 ?>
					<li><a data-href="<?php echo $finalurl; ?>/" href="<?php echo $add_portfolio_page_link['url']; ?>" class="portfoliopagelink <?php if ( is_post_type_archive( 'portfolio' ) ) { echo "act"; } ?>"><?php _e( 'VOIR TOUS', 'dstheme' ); ?></a></li>
					<?php $termscategory = get_terms( array(
			    'taxonomy' => 'portfolio-category',
			    'order'       => 'DESC',
			    'hide_empty' => true,
			) );  ?>
					<?php foreach ($termscategory as $term) {

						?>
					<li><a class="" href="<?php echo get_term_link( $term->term_id); ?>" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
				<?php } ?>
				</ul>
			</div>
		</div>
		<div class="portfolio-filter-submenu">
			<div class="container_big">
			<?php $termsParStyle = get_terms( array(
			    'taxonomy' => 'portfolio-style',
			    'order'       => 'DESC',
			    'hide_empty' => true,
			) );
			if(!empty($termsParStyle)) { ?>
				<ul id="filter-type-1">
					<?php foreach ($termsParStyle as $term) {
					if($ps !="" && $ps == $term->term_id){
						$cl = "act";
					}else{
						$cl = "";
					}
						?>
					<li><a class="portfolio_category_click1" href="" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>

			<?php $termsParProduits = get_terms( array(
			    'taxonomy' => 'portfolio-produits',
			    'order'       => 'DESC',
			    'hide_empty' => true,
			) );
			if(!empty($termsParProduits)) { ?>
				<ul id="filter-type-2">
					<?php foreach ($termsParProduits as $term) {
					if($pp !="" && $pp == $term->term_id){
						$cl = "act";
					}else{
						$cl = "";
					}
						?>
					<li><a class="portfolio_category_click <?php echo $cl; ?>" href="" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
				     <?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>
	</section>

	<section class="portfolio-list-container">
		<div class="container_big">
			<div class="row">

<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
            $postID = get_the_ID();
            $cat_array = get_the_terms($postID, 'portfolio-category' );
				?>

                    <div class="col-sm-6 col-md-4">
					<div class="portfolio-box">
						<a href="<?php echo the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						<h5><?php echo $cat_array[0]->name;  ?></h5>
						<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
				</div>
			<?php
				//get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

      ?>
      <div class="portfolio-pagination">
      <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '<img src="'. get_stylesheet_directory_uri(). '/assets/images/small-arrow-left.svg">', 'dstheme' ),
            'next_text' => __( '<img src="'. get_stylesheet_directory_uri(). '/assets/images/small-arrow-right.svg">', 'dstheme' ),
        ) );
        ?>
    </div>
       <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			</div>
		</div>
	</section>

</div>
<?php
get_footer();
