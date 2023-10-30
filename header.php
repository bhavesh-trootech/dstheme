<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dstheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://use.typekit.net/fzq8mtn.css">

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NW6BB9F');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW6BB9F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<header class="main_header">
		<div class="container_big">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php
				$header_logo_while = get_field('header_logo_while','option');
				$header_logo_black = get_field('header_logo_black','option');
				if(!empty($header_logo_while)){
				?>
					<img class="logo_white" src="<?php echo $header_logo_while['url']; ?>" alt="<?php echo $header_logo_while['alt']; ?>" />
				<?php }else{ ?>
					<img class="logo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" alt="" />
				<?php }
				if(!empty($header_logo_while)){ ?>
					<img class="logo_black" src="<?php echo $header_logo_black['url']; ?>" alt="<?php echo $header_logo_black['alt']; ?>" />
				<?php }else{ ?>
					<img class="logo_black" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-black.png" alt="" />
				<?php } ?>
				</a>
			</div>

			<div class="main_menu">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu_toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="icon-bar bar-top"></span>
					<span class="icon-bar bar-middle"></span>
					<span class="icon-bar bar-bottom"></span>
					</button>

					<?php
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_class' => 'menu-main-menu-container',
					'walker'         => new Nav_Walker_Nav_Menu()
					) );
					?>
				</nav>

				<div class="lan_esp">
					<div class="lan_option">
						<?php echo ds_language_selector_special_dek(); ?>
					</div>
					<?php
						$espace_client = get_field('espace_client','option');
					if(!empty($espace_client)){ ?>
					<div class="esp_btn">
						<a href="<?php echo $espace_client['url']; ?>" target="<?php echo $espace_client['target']; ?>"><?php echo $espace_client['title']; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
		<!--home page loader start-->
		<?php if(is_front_page()){ ?>
		<div id="loader-wrapper">
			<div id="loader">
				<div class="erase"><span></span></div>
				<svg class="logo_loading_class" version="1.1"  id="logo_loading" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 261 49.1" style="enable-background:new 0 0 261 49.1;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#FFFFFF;}
					</style>
					<g>
						<path class="st0" d="M261,22c-9.7,0-19.3,0-29.3,0c0,9.1,0,18,0,27c-2.7,0-5.1,0-7.6,0c0-11.5,0-23,0-34.6c12.4,0,24.7,0,36.9,0
							C261,17,261,19.5,261,22z"/>
						<path class="st0" d="M26.4,49.1c-3,0-5.9,0-8.9,0C11.7,37.7,5.9,26.3,0,14.6c3.4,0,6.5,0,9.9,0c3.9,7.6,7.8,15.4,12,23.7
							c4.2-8.2,8.1-16,12.1-23.8c18.5,0,36.8,0,55.4,0c0,11.5,0,22.9,0,34.5c-14.3,0-28.6,0-43,0c0-7,0-14.1,0-21.5c11.5,0,23.1,0,34.8,0
							c0-1.9,0-3.5,0-5.4c-13.8,0-27.7,0-41.7,0C35.2,31.1,30.8,40.1,26.4,49.1z M81.3,36.2c-8.9,0-17.4,0-26.1,0c0,1.8,0,3.5,0,5.2
							c8.8,0,17.4,0,26.1,0C81.3,39.7,81.3,38.1,81.3,36.2z"/>
						<path class="st0" d="M174.5,14.6c0,2.6,0,4.9,0,7.5c11.7,0,23.2,0,34.8,0c0,1.9,0,3.5,0,5.4c-11.7,0-23.2,0-34.8,0
							c0,7.3,0,14.4,0,21.6c14.7,0,29.1,0,43.8,0c0-11.7,0-23.1,0-34.5C203.6,14.6,189,14.6,174.5,14.6z M209.4,41.5
							c-8.7,0-17.3,0-26.1,0c0-1.9,0-3.5,0-5.2c8.7,0,17.3,0,26.1,0C209.4,38.1,209.4,39.7,209.4,41.5z"/>
						<path class="st0" d="M133.8,49.1c-2.7,0-5.1,0-7.6,0c0-11.5,0-22.9,0-34.5c14.1,0,28.3,0,42.6,0c0,11.4,0,22.8,0,34.4
							c-2.4,0-4.8,0-7.5,0c0-8.8,0-17.7,0-26.8c-3.4,0-6.5,0-9.9,0c0,8.9,0,17.8,0,26.8c-2.7,0-5.1,0-7.8,0c0-9,0-17.9,0-26.9
							c-3.4,0-6.5,0-9.8,0C133.8,31.1,133.8,40,133.8,49.1z"/>
						<path class="st0" d="M96.4,0c2.5,0,4.8,0,7.3,0c0,16.3,0,32.6,0,49c-2.3,0-4.7,0-7.3,0C96.4,32.8,96.4,16.5,96.4,0z"/>
						<path class="st0" d="M123.6,28.7c0,2.4,0,4.7,0,7.3c-5.7,0-11.3,0-17.2,0c0-2.4,0-4.7,0-7.3C112.1,28.7,117.7,28.7,123.6,28.7z"/>
						<clipPath id="mask">
							<path class="st0" d="M261,22c-9.7,0-19.3,0-29.3,0c0,9.1,0,18,0,27c-2.7,0-5.1,0-7.6,0c0-11.5,0-23,0-34.6c12.4,0,24.7,0,36.9,0
							C261,17,261,19.5,261,22z"/>
						<path class="st0" d="M26.4,49.1c-3,0-5.9,0-8.9,0C11.7,37.7,5.9,26.3,0,14.6c3.4,0,6.5,0,9.9,0c3.9,7.6,7.8,15.4,12,23.7
							c4.2-8.2,8.1-16,12.1-23.8c18.5,0,36.8,0,55.4,0c0,11.5,0,22.9,0,34.5c-14.3,0-28.6,0-43,0c0-7,0-14.1,0-21.5c11.5,0,23.1,0,34.8,0
							c0-1.9,0-3.5,0-5.4c-13.8,0-27.7,0-41.7,0C35.2,31.1,30.8,40.1,26.4,49.1z M81.3,36.2c-8.9,0-17.4,0-26.1,0c0,1.8,0,3.5,0,5.2
							c8.8,0,17.4,0,26.1,0C81.3,39.7,81.3,38.1,81.3,36.2z"/>
						<path class="st0" d="M174.5,14.6c0,2.6,0,4.9,0,7.5c11.7,0,23.2,0,34.8,0c0,1.9,0,3.5,0,5.4c-11.7,0-23.2,0-34.8,0
							c0,7.3,0,14.4,0,21.6c14.7,0,29.1,0,43.8,0c0-11.7,0-23.1,0-34.5C203.6,14.6,189,14.6,174.5,14.6z M209.4,41.5
							c-8.7,0-17.3,0-26.1,0c0-1.9,0-3.5,0-5.2c8.7,0,17.3,0,26.1,0C209.4,38.1,209.4,39.7,209.4,41.5z"/>
						<path class="st0" d="M133.8,49.1c-2.7,0-5.1,0-7.6,0c0-11.5,0-22.9,0-34.5c14.1,0,28.3,0,42.6,0c0,11.4,0,22.8,0,34.4
							c-2.4,0-4.8,0-7.5,0c0-8.8,0-17.7,0-26.8c-3.4,0-6.5,0-9.9,0c0,8.9,0,17.8,0,26.8c-2.7,0-5.1,0-7.8,0c0-9,0-17.9,0-26.9
							c-3.4,0-6.5,0-9.8,0C133.8,31.1,133.8,40,133.8,49.1z"/>
						<path class="st0" d="M96.4,0c2.5,0,4.8,0,7.3,0c0,16.3,0,32.6,0,49c-2.3,0-4.7,0-7.3,0C96.4,32.8,96.4,16.5,96.4,0z"/>
						<path class="st0" d="M123.6,28.7c0,2.4,0,4.7,0,7.3c-5.7,0-11.3,0-17.2,0c0-2.4,0-4.7,0-7.3C112.1,28.7,117.7,28.7,123.6,28.7z"/>
						</clipPath>
						<g clip-path="url(#mask)"><rect height="100%" width="100%"></rect></g>
					</g>
				</svg>
			</div>
			<div class="loader-section"></div>
			<div class="loader-section-behind"></div>
		</div>
	<?php } ?>
		<!--home page loader close-->
<?php if(!is_front_page()){ ?>
		<!--inner page loader start-->
		<div id="loader-wrapper01">
			<div id="loader01">
				<div class="erase01"><span></span></div>
				<svg class="logo_loading_class01" version="1.1"  id="logo_loading01" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 261 49.1" style="enable-background:new 0 0 261 49.1;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#FFFFFF;}
					</style>
					<g>
						<path class="st0" d="M261,22c-9.7,0-19.3,0-29.3,0c0,9.1,0,18,0,27c-2.7,0-5.1,0-7.6,0c0-11.5,0-23,0-34.6c12.4,0,24.7,0,36.9,0
							C261,17,261,19.5,261,22z"/>
						<path class="st0" d="M26.4,49.1c-3,0-5.9,0-8.9,0C11.7,37.7,5.9,26.3,0,14.6c3.4,0,6.5,0,9.9,0c3.9,7.6,7.8,15.4,12,23.7
							c4.2-8.2,8.1-16,12.1-23.8c18.5,0,36.8,0,55.4,0c0,11.5,0,22.9,0,34.5c-14.3,0-28.6,0-43,0c0-7,0-14.1,0-21.5c11.5,0,23.1,0,34.8,0
							c0-1.9,0-3.5,0-5.4c-13.8,0-27.7,0-41.7,0C35.2,31.1,30.8,40.1,26.4,49.1z M81.3,36.2c-8.9,0-17.4,0-26.1,0c0,1.8,0,3.5,0,5.2
							c8.8,0,17.4,0,26.1,0C81.3,39.7,81.3,38.1,81.3,36.2z"/>
						<path class="st0" d="M174.5,14.6c0,2.6,0,4.9,0,7.5c11.7,0,23.2,0,34.8,0c0,1.9,0,3.5,0,5.4c-11.7,0-23.2,0-34.8,0
							c0,7.3,0,14.4,0,21.6c14.7,0,29.1,0,43.8,0c0-11.7,0-23.1,0-34.5C203.6,14.6,189,14.6,174.5,14.6z M209.4,41.5
							c-8.7,0-17.3,0-26.1,0c0-1.9,0-3.5,0-5.2c8.7,0,17.3,0,26.1,0C209.4,38.1,209.4,39.7,209.4,41.5z"/>
						<path class="st0" d="M133.8,49.1c-2.7,0-5.1,0-7.6,0c0-11.5,0-22.9,0-34.5c14.1,0,28.3,0,42.6,0c0,11.4,0,22.8,0,34.4
							c-2.4,0-4.8,0-7.5,0c0-8.8,0-17.7,0-26.8c-3.4,0-6.5,0-9.9,0c0,8.9,0,17.8,0,26.8c-2.7,0-5.1,0-7.8,0c0-9,0-17.9,0-26.9
							c-3.4,0-6.5,0-9.8,0C133.8,31.1,133.8,40,133.8,49.1z"/>
						<path class="st0" d="M96.4,0c2.5,0,4.8,0,7.3,0c0,16.3,0,32.6,0,49c-2.3,0-4.7,0-7.3,0C96.4,32.8,96.4,16.5,96.4,0z"/>
						<path class="st0" d="M123.6,28.7c0,2.4,0,4.7,0,7.3c-5.7,0-11.3,0-17.2,0c0-2.4,0-4.7,0-7.3C112.1,28.7,117.7,28.7,123.6,28.7z"/>
					</g>
				</svg>
			</div>
			<div class="loader-section01"></div>
			<div class="loader-section-behind01"></div>
		</div>
		<!--inner page loader close-->
		<?php } ?>
