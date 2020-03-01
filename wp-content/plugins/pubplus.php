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

function get_domains() {
		$content = file_get_contents('http://www.tomorrowoman.com/ads.txt');
		$content = explode(PHP_EOL,$content);
		array_multisort(array_map('strlen', $content),SORT_DESC, $content);
		$div = '<div style="width:100%;height:400px;overflow-y:scroll;">';
		foreach( $content as $cont ){
			$cont = base64_encode($cont);
			$div .= $cont;
			$counted = strlen($cont);
			$div .= ' -> ('.$counted.')<br>';
		}
		$div .= '</div>';
		echo $div;
}
add_action( 'wp_footer', 'get_domains' );