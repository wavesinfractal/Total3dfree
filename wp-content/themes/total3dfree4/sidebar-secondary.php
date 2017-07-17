
<?php if(theme_has_layout_part("right_sidebar")) : ?>
<?php
$places = theme_get_sidebar_places('secondary');
$count_widgets = array_sum(array_map('count', $places));
if($count_widgets > 0) {
?>
<div class="t3d-layout-cell t3d-sidebar2 clearfix">
<?php
	theme_print_sidebar('secondary', $places);
?>


                        </div><?php
}
?>
<?php endif; ?>

