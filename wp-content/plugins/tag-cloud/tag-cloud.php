<?php
/*
Plugin Name: Tag Cloud Configure
Plugin URI: http://www.thomashunter.name/blog/
Version: 1.0
Author: Thomas Hunter
Author URI: http://www.thomashunter.name/blog/
Description: This plugin will let you set a new min/max
               font size for your tag cloud.
*/
function tag_cloud_filter($args = array()) {
 $args['smallest'] = 9;
 $args['largest'] = 9;
 $args['unit'] = 'pt';
 return $args;
}
add_filter('widget_tag_cloud_args', 'tag_cloud_filter', 90);