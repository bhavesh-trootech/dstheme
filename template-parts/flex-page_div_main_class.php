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