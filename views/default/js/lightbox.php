<?php
/**
 * Elgg lightbox
 *
 * Usage
 * Call elgg_load_js('lightbox') and elgg_load_css('lightbox') then
 * apply the class elgg-lightbox to links.
 *
 * Advanced Usage
 * Please go to http://fancybox.net for more information on the options of
 * this lightbox.
 *
 */

if (0) { ?><script><?php }
?>

/**
 * Lightbox initialization
 */
elgg.ui.lightbox_init = function() {
	$(".elgg-lightbox").fancybox();
}

elgg.register_hook_handler('init', 'system', elgg.ui.lightbox_init);

<?php

$js_path = elgg_get_plugins_path();
$js_path = "{$js_path}fancybox/vendors/fancybox/jquery.fancybox-1.3.4.pack.js";
include $js_path;
