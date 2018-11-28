<?php
/**
 * Register custom editor blocks.
 *
 * @package    Media_Portfolios
 * @subpackage Includes\Editor_Blocks
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Includes\Editor_Blocks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register custom editor blocks.
 *
 * @since  1.0.0
 * @access public
 */
class Register_Blocks {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Enqueue sample block backend assets.
		add_action( 'enqueue_block_editor_assets', [ $this, 'block_editor_assets' ] );

		// Enqueue sample block frontend assets.
		add_action( 'enqueue_block_assets', [ $this, 'block_frontend_assets' ] );

	}

	/**
	 * Enqueue sample block backend assets.
	 *
	 * `wp-blocks`: includes block type registration and related functions.
	 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
	 * `wp-i18n`: To internationalize the block's text.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function block_editor_assets() {

		// Sample block scripts.
		wp_enqueue_script(
			'mpb-sample-block-script', // Handle.
			plugins_url( 'assets/js/sample-block.min.js', __FILE__ ), // Block.js: We register the block here.
			[ 'wp-blocks', 'wp-i18n', 'wp-element' ], // Dependencies, defined above.
			filemtime( MPB_PATH . 'includes/editor-blocks/assets/js/sample-block.min.js' ) // filemtime — Gets file modification time.
		);

		// Sample block styles.
		wp_enqueue_style(
			'mpb-sample-block', // Handle.
			plugins_url( 'assets/css/sample-block.min.css', __FILE__ ), // Block editor CSS.
			[ 'wp-edit-blocks' ], // Dependency to include the CSS after it.
			filemtime( MPB_PATH . 'includes/editor-blocks/assets/css/sample-block.min.css' ) // filemtime — Gets file modification time.
		);

	}

	/**
	 * Enqueue frontend block assets.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function block_frontend_assets() {

		wp_enqueue_style(
			'mpb-sample-block',
			plugins_url( 'includes/editor-blocks/assets/css/sample-block.css', __FILE__ ),
			[ 'wp-blocks' ],
			filemtime( MPB_PATH . 'includes/editor-blocks/assets/css/sample-block.css' )
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mpb_register_blocks() {

	return Register_Blocks::instance();

}

// Run an instance of the class.
mpb_register_blocks();