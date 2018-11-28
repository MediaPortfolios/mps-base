<?php
/**
 * Settings for the Admin Pages tab on the Site Settings page.
 *
 * @package    Media_Portfolios
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Admin Pages tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Pages {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
			$instance->dependencies();

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

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Admin Pages tab.
		require MPB_PATH . 'admin/partials/field-callbacks/class-admin-pages-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin pages settings section.
		add_settings_section(
			'mpb-site-admin-pages',
			__( 'Admin Pages Settings', 'mps-text' ),
			[],
			'mpb-site-admin-pages'
		);

		// Use the admin header.
		add_settings_field(
			'mpb_use_admin_header',
			__( 'Admin Header', 'mps-text' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'admin_header' ],
			'mpb-site-admin-pages',
			'mpb-site-admin-pages',
			[ esc_html__( 'Add the site title, site tagline, and a nav menu to the top of admin pages.', 'mps-text' ) ]
		);

		register_setting(
			'mpb-site-admin-pages',
			'mpb_use_admin_header'
		);

		// Use custom sort order.
		add_settings_field(
			'mpb_use_custom_sort_order',
			__( 'Drag & Drop Sort Order', 'mps-text' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'custom_sort_order' ],
			'mpb-site-admin-pages',
			'mpb-site-admin-pages',
			[ esc_html__( 'Add drag & drop sort order functionality to post types and taxonomies.', 'mps-text' ) ]
		);

		register_setting(
			'mpb-site-admin-pages',
			'mpb_use_custom_sort_order'
		);

		// Admin footer credit.
		add_settings_field(
			'mpb_footer_credit',
			__( 'Admin Footer Credit', 'mps-text' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_credit' ],
			'mpb-site-admin-pages',
			'mpb-site-admin-pages',
			[ esc_html__( 'The "developed by" credit.', 'mps-text' ) ]
		);

		register_setting(
			'mpb-site-admin-pages',
			'mpb_footer_credit'
		);

		// Admin footer link.
		add_settings_field(
			'mpb_footer_link',
			__( 'Admin Footer Link', 'mps-text' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_link' ],
			'mpb-site-admin-pages',
			'mpb-site-admin-pages',
			[ esc_html__( 'Link to the website devoloper.', 'mps-text' ) ]
		);

		register_setting(
			'mpb-site-admin-pages',
			'mpb_footer_link'
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
function mpb_settings_fields_site_admin_pages() {

	return Settings_Fields_Site_Admin_Pages::instance();

}

// Run an instance of the class.
mpb_settings_fields_site_admin_pages();