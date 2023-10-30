<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dstheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<header class="page-header text-center">

					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="" />
						<h3><?php _e( "Cette page n'existe plus", 'dstheme' ); ?></h3>
						<p><?php _e( "Veuillez cliquer sur le lien ci-dessous pour revenir à la page d'accueil", 'dstheme' ); ?></p>
						<div class="more_link">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'revenir à l’accueil', 'dstheme' ); ?></a>
						</div>
					</div>

				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
