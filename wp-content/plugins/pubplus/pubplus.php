<?php
/*
Plugin Name: pubplus
Plugin URI:  https://github.com/mulik91/wp-test
Description: Describe what your plugin is all about in a few short sentences
Version:     1.0
Author:      Michael Mulik
Author URI:  https://github.com/mulik91/wp-test
License:     GPL2 etc
License URI: https://github.com/mulik91/wp-test
*/

function hook_header() {
	include_once 'script.js';
}
add_action('wp_head','hook_header');