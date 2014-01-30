<?php
/*
Plugin Name: jQuery
Version: 2.0
Plugin URI: http://www.vdfn.altervista.org/
Description: provides <a href="http://jquery.com/" title="jQuery">jQuery</a>
Author: Piero VDFN
Author URI: http://www.vdfn.altervista.org/
JQuery and JQueryUI version bump by liquibyte
*/

## Original author: NoWhereMan (http://www.nowhereland.it)

add_action('wp_head', 'plugin_jquery_head', 0);


function plugin_jquery_head() {

	$pdir=plugin_geturl('jquery');
	echo <<<JSUTILS
	<!-- start of jsUtils -->
	<!--<script type="text/javascript" src="{$pdir}res/jquery-1.7.1.min.js"></script>-->
	<!--<script type="text/javascript" src="{$pdir}res/jquery-ui-1.8.11.custom.min.js"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!-- end of jsUtils -->
JSUTILS;
}

?>
