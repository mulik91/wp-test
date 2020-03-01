<?php
/*
Plugin Name: pubplus
Plugin URI:  https://github.com/mulik91/wp-test
Description: Fetch data and manipulate it
Version:     1.0
Author:      Michael Mulik
Author URI:  https://github.com/mulik91/wp-test
License:     GPL2 etc
License URI: https://github.com/mulik91/wp-test
*/

function hook_header() {
	?>
	<script>
		function getQueryStringParameter(param){
			var queryString = window.location.search;
			for( var i = 0; i < queryString.length; i++ ){
				if( queryString[i].contains(param) ){
					return param;
				}else{
					return null;
				}
			}
		}
	</script>
<?php }
add_action('wp_head','hook_header');