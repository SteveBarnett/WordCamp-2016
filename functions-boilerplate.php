<?php

/**
 * functions-boilerplate.php
 * A boilerplate for WordPress performance modifications and enhancements.
 *
 * TO USE:
 * 1. Make a copy of this file.
 * 2. Rename it functions.php.
 * 3. Delete all of the stuff you don't need.
 * 4. Replace `/path/to/your/` with the path to your actual files in your theme directory, treating your theme file as the root directory. For example, `/dist/js/main.js`.
 *
 * DO NOT copy this file verbatim into your theme. It will break all the things!
 */


	//
	// ---------------------------
	// CHAPTER
	// Loading CSS Better
	// ---------------------------
	//

	/**
	 * Load theme styles the traditional way if cached
	 */
	function load_theme_styles() {
		if ( isset($_COOKIE['fullCSS']) && $_COOKIE['fullCSS'] === 'true' ) {
			wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/path/to/your/main.css', null, null, 'all' );
		}
	}
	add_action('wp_enqueue_scripts', 'load_theme_styles');


	/**
	 * Load critical path CSS inline in the header and async the full stylesheet if not cached
	 */
	function load_critical_css_inline_header() {
		if ( !isset($_COOKIE['fullCSS']) || $_COOKIE['fullCSS'] !== 'true' ) :
		?>
			<style type="text/css">
				/**
				 * Your critical path CSS goes here...
				 */
			</style>
			<script>
				function loadCSS(e,t,n){"use strict";function r(){for(var t,i=0;i<d.length;i++)d[i].href&&d[i].href.indexOf(e)>-1&&(t=!0);t?o.media=n||"all":setTimeout(r)}var o=window.document.createElement("link"),i=t||window.document.getElementsByTagName("script")[0],d=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",i.parentNode.insertBefore(o,i),r(),o}
				function onloadCSS(n,o){n.onload=function(){n.onload=null,o&&o.call(n)},"isApplicationInstalled"in navigator&&"onloadcssdefined"in n&&n.onloadcssdefined(o)}
				var stylesheet = loadCSS( "<?php echo get_template_directory_uri() . '/path/to/your/main.css'; ?>" );
				onloadCSS( stylesheet, function() {
					var expires = new Date(+new Date + (7 * 24 * 60 * 60 * 1000)).toUTCString();
					document.cookie = 'fullCSS=true; expires=' + expires;
				});
			</script>
		<?php
		endif;
	}
	add_action('wp_head', 'load_critical_css_inline_header', 30);


	/**
	 * Load critical path CSS inline in the header and async the full stylesheet if not cached
	 * This version uses file_get_contents() so you don't have to copy/paste your inline code
	 */
	function load_critical_css_auto_inline_header() {
		if ( !isset($_COOKIE['fullCSS']) || $_COOKIE['fullCSS'] !== 'true' ) :
		?>
			<style type="text/css">
				<?php echo file_get_contents( get_template_directory_uri() . '/path/to/your/critical.css' ); ?>
			</style>
			<script>
				<?php echo file_get_contents( get_template_directory_uri() . '/path/to/loadCSS.js' ); ?>
				<?php echo file_get_contents( get_template_directory_uri() . '/path/to/onloadCSS.js' ); ?>
				var stylesheet = loadCSS( "<?php echo get_template_directory_uri() . '/path/to/your/main.css'; ?>" );
				onloadCSS( stylesheet, function() {
					var expires = new Date(+new Date + (7 * 24 * 60 * 60 * 1000)).toUTCString();
					document.cookie = 'fullCSS=true; expires=' + expires;
				});
			</script>
		<?php
		endif;
	}
	add_action('wp_head', 'load_critical_css_auto_inline_header', 30);


	/**
	 * Load fallback CSS in the footer if not cached
	 */
	function load_fallback_css_footer() {
		if ( !isset($_COOKIE['fullCSS']) || $_COOKIE['fullCSS'] !== 'true' ) :
		?>
			<noscript>
				<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/path/to/your/main.css'; ?>">
			</noscript>
		<?php
		endif;
	}
	add_action('wp_footer', 'load_fallback_css_footer', 30);