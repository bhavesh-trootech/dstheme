<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dstheme
 */
get_header();
?>
<div class="front_page">
    <?php if( have_rows('flexible_content') ): ?>
    <?php while( have_rows('flexible_content') ): the_row();
	/*File name should be same like get_row_layout() */
	get_template_part( 'template-parts/frontpage/content', get_row_layout());
	?>
  <?php endwhile; ?>
<?php endif; ?>
</div>
<?php
get_footer();