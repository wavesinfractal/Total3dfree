<?php

// $style = 'post' or 'block' or 'vmenu' or 'simple'
function theme_wrapper($style, $args) {
	$func_name = "theme_{$style}_wrapper";
	if (function_exists($func_name)) {
		call_user_func($func_name, $args);
	} else {
		theme_block_wrapper($args);
	}
}

function theme_post_wrapper($args = '') {
	$args = wp_parse_args($args, array(
			'id'        => '',
			'class'     => '',
			'title'     => '',
			'heading'   => 'h2',
			'thumbnail' => '',
			'before'    => '',
			'content'   => '',
			'after'     => ''
		)
	);
	extract($args);
	if (theme_is_empty_html($title) && theme_is_empty_html($content))
		return;
	if ($id) {
		$id = ' id="' . $id . '" ';
	}
	if ($class) {
		$class = ' ' . $class;
	}
	?>
	<article<?php echo $id; ?> class="t3d-post t3d-article <?php echo $class; ?>">
                                <?php
if (!theme_is_empty_html($title)) {
	echo '<'.$heading.' class="t3d-postheader">'.$title.'</'.$heading.'>';
}
?>
                                <?php echo $thumbnail; ?><div class="t3d-postcontent clearfix"><?php echo $content; ?></div>
</article>
	<?php
}

function theme_simple_wrapper($args = '') {
	$args = wp_parse_args($args, array(
			'id'      => '',
			'class'   => '',
			'title'   => '',
			'heading' => 'div',
			'content' => '',
		)
	);
	extract($args);
	if (theme_is_empty_html($title) && theme_is_empty_html($content))
		return;
	if ($id) {
		$id = ' id="' . $id . '" ';
	}
	if ($class) {
		$class = ' ' . $class;
	}
	echo "<div class=\"t3d-widget{$class}\"{$id}>";
	if (!theme_is_empty_html($title))
		echo '<' . $heading . ' class="t3d-widget-title">' . $title . '</' . $heading . '>';
	echo '<div class="t3d-widget-content">' . $content . '</div>';
	echo '</div>';
}

function theme_block_wrapper($args) {
	$args = wp_parse_args($args, array(
			'id'      => '',
			'class'   => '',
			'title'   => '',
			'heading' => 'div',
			'content' => '',
		)
	);
	extract($args);
	if (theme_is_empty_html($title) && theme_is_empty_html($content))
		return;
	if ($id) {
		$id = ' id="' . $id . '" ';
	}
	if ($class) {
		$class = ' ' . $class . ' ';
	}

	$begin = <<<EOL
<div {$id}class="t3d-block{$class} clearfix">
        
EOL;
	$begin_title = <<<EOL

EOL;
	$end_title = <<<EOL

EOL;
	$begin_content = <<<EOL
<div class="t3d-blockcontent">
EOL;
	$end_content = <<<EOL
</div>
EOL;
	$end = <<<EOL

</div>
EOL;
	echo $begin;
	if ($begin_title && $end_title && !theme_is_empty_html($title)) {
		echo $begin_title . $title . $end_title;
	}
	echo $begin_content;
	echo $content;
	echo $end_content;
	echo $end;
}


function theme_vmenu_wrapper($args) {
	$args = wp_parse_args($args, array(
			'id'      => '',
			'class'   => '',
			'title'   => '',
			'heading' => 'div',
			'content' => '',
		)
	);
	extract($args);
	if (theme_is_empty_html($title) && theme_is_empty_html($content))
		return;
	if ($id) {
		$id = ' id="' . $id . '" ';
	}
	if ($class) {
		$class = ' ' . $class;
	}

	$begin = <<<EOL
<div {$id}class="t3d-vmenublock clearfix">
        
EOL;
	$begin_title = <<<EOL

EOL;
	$end_title = <<<EOL

EOL;
	$begin_content = <<<EOL
<div class="t3d-vmenublockcontent">
EOL;
	$end_content = <<<EOL
</div>
EOL;
	$end = <<<EOL

</div>
EOL;
	echo $begin;
	if ($begin_title && $end_title && !theme_is_empty_html($title)) {
		echo $begin_title . $title . $end_title;
	}
	echo $begin_content;
	echo $content;
	echo $end_content;
	echo $end;
}
