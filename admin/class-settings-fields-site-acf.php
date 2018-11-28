<?php
/**
 * Site settings page field groups.
 *
 * @package    Media_Portfolios
 * @subpackage controlled-chaos\admin
 * @since      1.0.0
 */

namespace CC_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Site settings page field groups.
 */
final class Settings_Fields_ACF {

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

			// Register settings page fields.
    		$instance->settings_fields();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 */
	public function __construct() {}

	/**
	 * Register settings page fields.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings_fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5a0c7ff7764ca',
				'title'  => __( 'Settings Page', 'mps-text' ),
				'fields' => [

					/**
					 * Dashboard tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0c8d7232b94',
						'label'             => __( 'Dashboard', 'mps-text' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5b4807983ccaf',
						'label'             => __( 'Custom Welcome', 'mps-text' ),
						'name'              => 'mpb_custom_welcome',
						'type'              => 'true_false',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Use the custom Welcome panel on the Dashboard', 'mps-text' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					],
					[
						'key'               => 'field_5b48081b3ccb0',
						'label'             => __( 'Remove Welcome Dismiss', 'mps-text' ),
						'name'              => 'mpb_remove_welcome_dismiss',
						'type'              => 'true_false',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Remove the Welcome panel dismiss button.', 'mps-text' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					],
					[
						'key'               => 'field_5a0c8f393edd6',
						'label'             => __( 'Hide Widgets', 'mps-text' ),
						'name'              => 'mpb_dashboard_hide_widgets',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select the Dashboard widgets to hide.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'gutenberg' => __( 'Try Gutenberg', 'mps-text' ),
							'welcome'   => __( 'Welcome', 'mps-text' ),
							'news'      => __( 'WordPress News', 'mps-text' ),
							'quick'     => __( 'Quick Press', 'mps-text' ),
							'at_glance' => __( 'At a Glance', 'mps-text' ),
							'activity'  => __( 'Activity', 'mps-text' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],

					/**
					 * Admin Menu tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0c800f57d56',
						'label'             => __( 'Admin Menu', 'mps-text' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a0c80ab57d59',
						'label'             => __( 'Settings Page', 'mps-text' ),
						'name'              => 'mpb_settings_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of this Settings page link, and whether to show or hide the other settings links.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'default' => __( 'Default/Show', 'mps-text' ),
							'top'     => __( 'Top Level/Hide', 'mps-text' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'default',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5aad41ffad3e6',
						'label'             => __( 'Site Settings Label', 'mps-text' ),
						'name'              => 'mpb_site_settings_link_label',
						'type'              => 'text',
						'instructions'      => __( 'Change the label of the link to this page.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'Site Settings', 'mps-text' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b4809a3f4f0b',
						'label'             => __( 'Site Settings Icon', 'mps-text' ),
						'name'              => 'mpb_site_settings_link_icon',
						'type'              => 'text',
						'instructions'      => __( 'Enter a Dashicons CSS class for the icon of the link to this page.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'dashicons-admin-settings',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b480aa335a20',
						'label'             => __( 'Site Plugin Position', 'mps-text' ),
						'name'              => 'mpb_site_plugin_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Make the site-specific plugin admin page a top-level link.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'default' => __( 'Under Plugins', 'mps-text' ),
							'top'     => __( 'Top Level', 'mps-text' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'default',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5b480b0d35a21',
						'label'             => __( 'Site Plugin Label', 'mps-text' ),
						'name'              => 'mpb_site_plugin_link_label',
						'type'              => 'text',
						'instructions'      => __( 'Change the label of the link to this page.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'Site Settings', 'mps-text' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5b480b4f35a22',
						'label'             => __( 'Site Plugin Icon', 'mps-text' ),
						'name'              => 'mpb_site_plugin_link_icon',
						'type'              => 'text',
						'instructions'      => __( 'Enter a Dashicons CSS class for the icon of the link to this page.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '50',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'dashicons-welcome-learn-more',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a0c802257d57',
						'label'             => __( 'Menus Link', 'mps-text' ),
						'name'              => 'mpb_menus_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Menus page link.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'mps-text' ),
							'default' => __( 'Default', 'mps-text' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c808757d58',
						'label'             => __( 'Widgets Link', 'mps-text' ),
						'name'              => 'mpb_widgets_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Widgets page link.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'mps-text' ),
							'default' => __( 'Default', 'mps-text' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c8d8a32b95',
						'label'             => __( 'Hide Links', 'mps-text' ),
						'name'              => 'mpb_admin_hide_links',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select which menu items to hide.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'themes'  => __( 'Appearance', 'mps-text' ),
							'plugins' => __( 'Plugins', 'mps-text' ),
							'users'   => __( 'Users', 'mps-text' ),
							'tools'   => __( 'Tools', 'mps-text' ),
							'fields'  => __( 'Custom Fields', 'mps-text' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5aaa73e38deb3',
						'label'             => __( 'Restore Links Manager', 'mps-text' ),
						'name'              => 'mpb_links_manager',
						'type'              => 'true_false',
						'instructions'      => __( 'The old Links Manager is hidden by default in newer WordPress installations.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => __( 'Enabled', 'mps-text' ),
						'ui_off_text'       => __( 'Disabled', 'mps-text' ),
					],

					/**
					 * Admin Pages tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a0cbb3873e55',
						'label'             => __( 'Admin Pages', 'mps-text' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5bd8abd79a46d',
						'label'             => __( 'Admin Header', 'mps-text' ),
						'name'              => 'mpb_use_admin_header',
						'type'              => 'true_false',
						'instructions'      => __( 'Add the site title, site tagline, and a nav menu to the top of admin pages.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Use the admin header.', 'mps-text' ),
						'default_value'     => 0,
						'ui'                => 1,
						'ui_on_text'        => __( 'Yes', 'mps-text' ),
						'ui_off_text'       => __( 'No', 'mps-text' ),
					],
					[
						'key'               => 'field_5b834989e850c',
						'label'             => __( 'Drag & Drop Sort Order', 'mps-text' ),
						'name'              => 'mpb_use_custom_sort_order',
						'type'              => 'true_false',
						'instructions'      => __( 'When posts and taxonomies are selected for custom sort order functionality, the table rows on their respective admin management screen can be dragged up or down.

						The order you set on the admin management screens will automatically set the order of the posts in the blog index pages and in archive pages.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Add drag & drop sort order functionality to post types and taxonomies.', 'mps-text' ),
						'default_value'     => 0,
						'ui' => 1,
						'ui_on_text'        => __( 'Yes', 'mps-text' ),
						'ui_off_text'       => __( 'No', 'mps-text' ),
					],
					[
						'key'               => 'field_5a0cbb5e73e56',
						'label'             => __( 'Admin Footer Credit', 'mps-text' ),
						'name'              => 'mpb_admin_footer_credit',
						'type'              => 'text',
						'instructions'      => __( 'The "developed by" credit.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a0cbba573e57',
						'label'             => __( 'Admin Footer Link', 'mps-text' ),
						'name'              => 'mpb_admin_footer_link',
						'type'              => 'url',
						'instructions'      => __( 'Link to the website devoloper.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],

					/**
					 * Meta/SEO tab settings.
					 *
					 * @since 1.0.0
					 */

					[
						'key'               => 'field_5a1989a036067',
						'label'             => __( 'Meta/SEO', 'mps-text' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5a237090744c4',
						'label'             => __( 'Meta Tags', 'mps-text' ),
						'name'              => 'mpb_meta_disable_tags',
						'type'              => 'true_false',
						'instructions'      => __( 'Disable if you plan on using Yoast SEO or a similarly awful plugin.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Check to disable', 'mps-text' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => __( 'Disabled', 'mps-text' ),
						'ui_off_text'       => __( 'Enabled', 'mps-text' ),
					],
					[
						'key'               => 'field_5a198d601b523',
						'label'             => __( 'Blog Pages Title', 'mps-text' ),
						'name'              => 'mpb_meta_blog_title',
						'type'              => 'text',
						'instructions'      => __( 'Will use the site title if left empty.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a198bd736068',
						'label'             => __( 'Blog Pages Description', 'mps-text' ),
						'name'              => 'mpb_meta_blog_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Will use the site tagline if left empty and if a tagline is set.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => 4,
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5a198c1836069',
						'label'             => __( 'Blog Pages Image', 'mps-text' ),
						'name'              => 'mpb_meta_blog_image',
						'type'              => 'image',
						'instructions'      => __( 'A minimum of 1230px by 600px is recommended for retina display devices.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5b2fd67604455',
						'label'             => __( 'Default Meta Image', 'mps-text' ),
						'name'              => 'mpb_meta_default_image',
						'type'              => 'image',
						'instructions'      => __( 'Will be used as a fallback for posts without a featured image and used for archive pages. A minimum of 1230px by 600px is recommended for retina display devices.', 'mps-text' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => MPB_ADMIN_SLUG . '-settings',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => 1,
				'description'           => '',
			 ] );

		endif;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mpb_settings_fields_acf() {

	return Settings_Fields_ACF::instance();

}

// Run an instance of the class.
mpb_settings_fields_acf();