<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://plugin.nl/
 * @since      1.0.0
 *
 * @package    Wp_Hide_Future_Comments
 * @subpackage Wp_Hide_Future_Comments/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Hide_Future_Comments
 * @subpackage Wp_Hide_Future_Comments/includes
 * @author     Tim van Iersel, Plugin.nl <tim@plugin.nl>
 */
class Wp_Hide_Future_Comments_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-hide-future-comments',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
