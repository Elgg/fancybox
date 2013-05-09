<?php
/**
 * Fancybox lightbox plugin
 */

elgg_register_event_handler('init', 'system', 'fancybox_init');

function fancybox_init() {
	elgg_register_simplecache_view('js/lightbox');
	$lightbox_js_url = elgg_get_simplecache_url('js', 'lightbox');
	elgg_register_js('lightbox', $lightbox_js_url);

	elgg_register_simplecache_view('css/lightbox');
	$lightbox_css_url = elgg_get_simplecache_url('css', 'lightbox');
	elgg_register_css('lightbox', $lightbox_css_url);
}
