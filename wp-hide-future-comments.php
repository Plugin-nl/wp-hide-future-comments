<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://plugin.nl/
 * @since             1.0.0
 * @package           Wp_Hide_Future_Comments
 *
 * @wordpress-plugin
 * Plugin Name:       WP Hide Future Comments
 * Plugin URI:        https://plugin.nl/
 * Description:       Hide comments with publish dates in the future.
 * Version:           1.0.0
 * Author:            Tim van Iersel, Plugin.nl
 * Author URI:        https://plugin.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-hide-future-comments
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_HIDE_FUTURE_COMMENTS_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-hide-future-comments.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_hide_future_comments() {

	$plugin = new Wp_Hide_Future_Comments();
	$plugin->run();

}
run_wp_hide_future_comments();
