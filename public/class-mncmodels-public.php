<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mainetcare
 * @since      1.0.0
 *
 * @package    Mncmodels
 * @subpackage Mncmodels/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mncmodels
 * @subpackage Mncmodels/public
 * @author     MaiNetCare GmbH <info@mainetcare.com>
 */
class Mncmodels_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of the plugin.
	 * @param string $version The version of this plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mncmodels_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mncmodels_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mncmodels-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mncmodels_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mncmodels_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mncmodels-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_shortcode_mi_prices_webcare() {
		add_shortcode( 'mi_price_webcare', function ( $params ) {
			// init:
			$a     = shortcode_atts( array(
				'title' => 'Downloads'
			), $params );
			$title = $a['title'];
			ob_start();
			require_once plugin_dir_path(__FILE__) . 'partials/tabtable_prices_website_pflege.php';
			return ob_get_clean();
		});

	}

}
