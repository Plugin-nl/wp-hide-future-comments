<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://plugin.nl/
 * @since      1.0.0
 *
 * @package    Wp_Hide_Future_Comments
 * @subpackage Wp_Hide_Future_Comments/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Hide_Future_Comments
 * @subpackage Wp_Hide_Future_Comments/public
 * @author     Tim van Iersel, Plugin.nl <tim@plugin.nl>
 */
class Wp_Hide_Future_Comments_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Add arguments
	 *
	 * @since    1.0.0
	 */
	public function add_comment_args($comment_args) {

			$comment_args['date_query'] = array(
		        array(
		            'before'    => date('Y-m-d H:i:s')
		        ),
		    );
				return $comment_args;
	}

}
