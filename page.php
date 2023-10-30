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

<?php if( have_rows('flexible_content') ): ?>
    <?php while( have_rows('flexible_content') ): the_row(); ?>
     <?php if( get_row_layout() == 'page_div_main_class' ): ?>
     	<?php
     	 $divClass = get_sub_field('add_class');
     	 if(!empty($divClass)) {
     	 	$divClass = get_sub_field('add_class');
     	 } else{
     	 	$divClass = "a_propos_page";
     	 }
     	 ?>
     	<?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<div class="<?php echo $divClass; ?>">
<?php if( have_rows('flexible_content') ): ?>
    <?php while( have_rows('flexible_content') ): the_row();
      get_template_part( 'template-parts/flex', get_row_layout());
     ?>
      <?php endwhile; ?>
<?php endif; ?>
</div>

<?php
get_footer();