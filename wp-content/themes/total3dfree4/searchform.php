<form class="t3d-search" method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
	<input name="s" type="text" value="<?php echo esc_attr(get_search_query()); ?>" />
	<input class="t3d-search-button" type="submit" value="<?php echo __('Search', THEME_NS); ?>" />
</form>