<?
/*
Plugin Name: Fokustema admin
Plugin URI: http://fokus.se/fokustema
Description: Admin theme for Fokustema.
Author: Jonatan Fried
Version: 1.0
Author URI: http://fokus.se/author/jonatan
*/

function my_wp_admin_css() {
	wp_enqueue_script("jquery"); 
	echo '<link rel="stylesheet" href="/wp-content/plugins/fokustema-admin/fokustema-admin.css" type="text/css" />';
	echo '<script type="text/javascript" src="/wp-content/plugins/fokustema-admin/fokustema-admin.js"></script>';
}

add_action('admin_head','my_wp_admin_css');
?>
