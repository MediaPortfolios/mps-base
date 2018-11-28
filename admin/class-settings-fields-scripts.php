<?php
/**
 * Settings fields for script loading and more.
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
 * Settings fields for script loading and more.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Scripts {

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

		// Register settings.
		add_action( 'admin_init', [ $this, 'settings' ] );

		// Include jQuery Migrate.
		$migrate = get_option( 'mpb_jquery_migrate' );
		if ( ! $migrate ) {
			add_action( 'wp_default_scripts', [ $this, 'include_jquery_migrate' ] );
		}

	}

	/**
	 * Register settings via the WordPress Settings API.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

		/**
		 * Generl script options.
		 */
		add_settings_section( 'mpb-scripts-general', __( 'General Options', 'mps-text' ), [ $this, 'scripts_general_section_callback' ], 'mpb-scripts-general' );

		// Inline scripts.
		add_settings_field( 'mpb_inline_scripts', __( 'Inline Scripts', 'mps-text' ), [ $this, 'mpb_inline_scripts_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Add script contents to footer', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_inline_scripts'
		);

		// Inline styles.
		add_settings_field( 'mpb_inline_styles', __( 'Inline Styles', 'mps-text' ), [ $this, 'mpb_inline_styles_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Add script-related CSS contents to head', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_inline_styles'
		);

		// Inline jQuery.
		add_settings_field( 'mpb_inline_jquery', __( 'Inline jQuery', 'mps-text' ), [ $this, 'mpb_inline_jquery_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Deregister jQuery and add its contents to footer', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_inline_jquery'
		);

		// Include jQuery Migrate.
		add_settings_field( 'mpb_jquery_migrate', __( 'jQuery Migrate', 'mps-text' ), [ $this, 'mpb_jquery_migrate_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Use jQuery Migrate for backwards compatibility', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_jquery_migrate'
		);

		// Remove emoji script.
		add_settings_field( 'mpb_remove_emoji_script', __( 'Emoji Script', 'mps-text' ), [ $this, 'remove_emoji_script_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Remove emoji script from <head>', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_remove_emoji_script'
		);

		// Remove WordPress version appended to script links.
		add_settings_field( 'mpb_remove_script_version', __( 'Script Versions', 'mps-text' ), [ $this, 'remove_script_version_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Remove WordPress version from script and stylesheet links in <head>', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_remove_script_version'
		);

		// Minify HTML.
		add_settings_field( 'mpb_html_minify', __( 'Minify HTML', 'mps-text' ), [ $this, 'html_minify_callback' ], 'mpb-scripts-general', 'mpb-scripts-general', [ esc_html__( 'Minify HTML source code to increase load speed', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-general',
			'mpb_html_minify'
		);

		/**
		 * Use included vendor scripts & options.
		 */
		add_settings_section( 'mpb-scripts-vendor', __( 'Included Vendor Scripts', 'mps-text' ), [ $this, 'scripts_vendor_section_callback' ], 'mpb-scripts-vendor' );

		// Use Slick.
		add_settings_field( 'mpb_enqueue_slick', __( 'Slick', 'mps-text' ), [ $this, 'enqueue_slick_callback' ], 'mpb-scripts-vendor', 'mpb-scripts-vendor', [ esc_html__( 'Use Slick script and stylesheets', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-vendor',
			'mpb_enqueue_slick'
		);

		// Use Tabslet.
		add_settings_field( 'mpb_enqueue_tabslet', __( 'Tabslet', 'mps-text' ), [ $this, 'enqueue_tabslet_callback' ], 'mpb-scripts-vendor', 'mpb-scripts-vendor', [ esc_html__( 'Use Tabslet script', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-vendor',
			'mpb_enqueue_tabslet'
		);

		// Use Sticky-kit.
		add_settings_field( 'mpb_enqueue_stickykit', __( 'Sticky-kit', 'mps-text' ), [ $this, 'enqueue_stickykit_callback' ], 'mpb-scripts-vendor', 'mpb-scripts-vendor', [ esc_html__( 'Use Sticky-kit script', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-vendor',
			'mpb_enqueue_stickykit'
		);

		/**
		 * Use Tooltipster.
		 *
		 * @todo Add option to enqueue on the backend.
		 */
		add_settings_field( 'mpb_enqueue_tooltipster', __( 'Tooltipster', 'mps-text' ), [ $this, 'enqueue_tooltipster_callback' ], 'mpb-scripts-vendor', 'mpb-scripts-vendor', [ esc_html__( 'Use Tooltipster script and stylesheet', 'mps-text' ) ] );

		register_setting(
			'mpb-scripts-vendor',
			'mpb_enqueue_tooltipster'
		);

		// Site Settings section.
		if ( mpb_acf_options() ) {

			add_settings_section( 'mpb-registered-fields-activate', __( 'Registered Fields Activation', 'mps-text' ), [ $this, 'registered_fields_activate' ], 'mpb-registered-fields-activate' );

			add_settings_field( 'mpb_acf_activate_settings_page', __( 'Site Settings Page', 'mps-text' ), [ $this, 'registered_fields_page_callback' ], 'mpb-registered-fields-activate', 'mpb-registered-fields-activate', [ __( 'Deactive the field group for the "Site Settings" options page.', 'mps-text' ) ] );

			register_setting(
				'mpb-registered-fields-activate',
				'mpb_acf_activate_settings_page'
			);

		}

	}

	/**
	 * General section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_general_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Inline settings only apply to scripts and styles included with the plugin.' ) );

		echo $html;

	}

	/**
	 * Inline jQuery.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function mpb_inline_jquery_callback( $args ) {

		$option = get_option( 'mpb_inline_jquery' );

		$html = '<p><input type="checkbox" id="mpb_inline_jquery" name="mpb_inline_jquery" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_inline_jquery"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>This may break the functionality of plugins that put scripts in the head</em>.</small></p>';

		echo $html;

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function mpb_jquery_migrate_callback( $args ) {

		$option = get_option( 'mpb_jquery_migrate' );

		$html = '<p><input type="checkbox" id="mpb_jquery_migrate" name="mpb_jquery_migrate" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_jquery_migrate"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Some outdated plugins and themes may be dependent on an old version of jQuery</em></small></p>';

		echo $html;

	}

	/**
	 * Inline scripts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function mpb_inline_scripts_callback( $args ) {

		$option = get_option( 'mpb_inline_scripts' );

		$html = '<p><input type="checkbox" id="mpb_inline_scripts" name="mpb_inline_scripts" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_inline_scripts"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Inline styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function mpb_inline_styles_callback( $args ) {

		$option = get_option( 'mpb_inline_styles' );

		$html = '<p><input type="checkbox" id="mpb_inline_styles" name="mpb_inline_styles" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_inline_styles"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Remove emoji script.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_emoji_script_callback( $args ) {

		$option = get_option( 'mpb_remove_emoji_script' );

		$html = '<p><input type="checkbox" id="mpb_remove_emoji_script" name="mpb_remove_emoji_script" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_remove_emoji_script"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Emojis will still work in modern browsers</em></small></p>';

		echo $html;

	}

	/**
	 * Script options and enqueue settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_script_version_callback( $args ) {

		$option = get_option( 'mpb_remove_script_version' );

		$html = '<p><input type="checkbox" id="mpb_remove_script_version" name="mpb_remove_script_version" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_remove_script_version"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Minify HTML source code.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function html_minify_callback( $args ) {

		$option = get_option( 'mpb_html_minify' );

		$html = '<p><input type="checkbox" id="mpb_html_minify" name="mpb_html_minify" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mpb_html_minify"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Vendor section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_vendor_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Look for Fancybox options on the Media Settings page.' ) );

		echo $html;

	}

	/**
	 * Use Slick.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_slick_callback( $args ) {

		$option = get_option( 'mpb_enqueue_slick' );

		$html = '<p><input type="checkbox" id="mpb_enqueue_slick" name="mpb_enqueue_slick" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="mpb_enqueue_slick"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://kenwheeler.github.io/slick/' ) ),
			esc_attr( __( 'Learn more about Slick', 'mps-text' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tabslet.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tabslet_callback( $args ) {

		$option = get_option( 'mpb_enqueue_tabslet' );

		$html = '<p><input type="checkbox" id="mpb_enqueue_tabslet" name="mpb_enqueue_tabslet" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="mpb_enqueue_tabslet"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://vdw.github.io/Tabslet/' ) ),
			esc_attr( __( 'Learn more about Tabslet', 'mps-text' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Sticky-kit.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_stickykit_callback( $args ) {

		$option = get_option( 'mpb_enqueue_stickykit' );

		$html = '<p><input type="checkbox" id="mpb_enqueue_stickykit" name="mpb_enqueue_stickykit" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="mpb_enqueue_stickykit"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://leafo.net/sticky-kit/' ) ),
			esc_attr( __( 'Learn more about Sticky-kit', 'mps-text' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tooltipster.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tooltipster_callback( $args ) {

		$option = get_option( 'mpb_enqueue_tooltipster' );

		$html = '<p><input type="checkbox" id="mpb_enqueue_tooltipster" name="mpb_enqueue_tooltipster" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="mpb_enqueue_tooltipster"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://iamceege.github.io/tooltipster/' ) ),
			esc_attr( __( 'Learn more about Tooltipster', 'mps-text' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Site Settings section.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_activate() {

		if ( mpb_acf_options() ) {

			echo sprintf( '<p>%1s</p>', esc_html( 'The Controlled Chaos plugin registers custom fields for Advanced Custom Fields Pro that can be imported for editing. These built-in field goups must be deactivated for the imported field groups to take effect.', 'mps-text' ) );

		}

	}

	/**
	 * Site Settings section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_page_callback( $args ) {

		if ( mpb_acf_options() ) {

			$html = '<p><input type="checkbox" id="mpb_acf_activate_settings_page" name="mpb_acf_activate_settings_page" value="1" ' . checked( 1, get_option( 'mpb_acf_activate_settings_page' ), false ) . '/>';

			$html .= '<label for="mpb_acf_activate_settings_page"> '  . $args[0] . '</label></p>';

			echo $html;

		}

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function include_jquery_migrate( $scripts ) {

		if ( ! empty( $scripts->registered['jquery'] ) ) {

			$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, [ 'jquery-migrate' ] );

		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mpb_settings_fields_scripts() {

	return Settings_Fields_Scripts::instance();

}

// Run an instance of the class.
mpb_settings_fields_scripts();