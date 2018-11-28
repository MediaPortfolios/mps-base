<?php
/**
 * About page output.
 *
 * This page uses the jQuery tabs from the jQuery UI suite that is included
 * with WordPress. Tabs are activated by targeting the `backend-tabbed-content`
 * in this plugin's admin.js file.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 *
 * @see        Tabs admin/assets/js/admin.js
 * @link       Dashicons https://developer.wordpress.org/resource/dashicons/
 */

namespace CC_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Site Settings tab icon.
 *
 * The Site Settings page has options to make the page top-level in
 * the admin menu and set a Dashicons icon. If an icon has been set
 * for the link in the admin menu then we will use the same icon here
 * for the Site Settings tab.
 *
 * @since  1.0.0
 * @return void
 */

// Get the settings page menu icon option from Site Settings.
$settings_icon = sanitize_text_field( get_option( 'mpb_site_settings_link_icon' ) );

// If it's not empty, use the icon class from the option.
if ( $settings_icon ) {
	$settings = $settings_icon;

// Otherwise use the admin settings icon.
} else {
	$settings = 'dashicons-admin-settings';
}

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

    // Introduction tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-welcome-learn-more"></span> %2s</a></li>',
        '#intro',
        esc_html__( 'Introduction', 'mps-text' )
	),

	// Site Settings tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons %2s"></span> %3s</a></li>',
		'#settings',
		esc_attr( $settings ),
        esc_html__( 'Site Settings', 'mps-text' )
	),

	// Script Options tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-editor-code"></span> %2s</a></li>',
        '#scripts',
        esc_html__( 'Script Options', 'mps-text' )
	),

	// Media Options tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-admin-media"></span> %2s</a></li>',
        '#media',
        esc_html__( 'Media Options', 'mps-text' )
	),

	// Dev Tools tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-welcome-learn-more"></span> %2s</a></li>',
        '#tools',
        esc_html__( 'Development Tools', 'mps-text' )
    ),

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'mpb_tabs_page_about', $tabs );

?>
<!-- Default WordPress page wrapper -->
<div class="wrap site-plugin-wrap">
	<!-- Page heading -->
	<?php echo sprintf( '<h1 class="wp-heading-inline">%1s %2s</h1>', get_bloginfo( 'name' ), esc_html__( 'Plugin', 'mps-text' ) ); ?>
	<!-- Page description -->
    <p class="description"><?php esc_html_e( 'A feature-packed WordPress starter plugin for building custom-tailored websites.', 'mps-text' ); ?></p>
	<!-- Ornamental divider -->
	<hr class="wp-header-end">
	<!-- Begin jQuery tabbed content -->
	<div class="backend-tabbed-content">
		<ul>
			<?php echo implode( $page_tabs ); ?>
		</ul>
		<?php // Hook for adding tabbed content.
		do_action( 'mpb_content_page_about_before' ); ?>
		<!-- Begin content -->
		<div id="intro"><!-- Introduction content -->
			<?php include_once MPB_PATH . 'admin/partials/plugin-page-intro.php'; ?>
		</div>
		<div id="settings"><!-- Site Settings content -->
			<?php include_once MPB_PATH . 'admin/partials/plugin-page-site-settings.php'; ?>
		</div>
		<div id="scripts"><!-- Script Options content -->
			<?php include_once MPB_PATH . 'admin/partials//plugin-page-script-options.php'; ?>
		</div>
		<div id="media"><!-- Media Options content -->
			<?php include_once MPB_PATH . 'admin/partials/plugin-page-media-options.php'; ?>
		</div>
		<div id="tools"><!-- Dev Tools content -->
			<?php include_once MPB_PATH . 'admin/partials/plugin-page-dev-tools.php'; ?>
		</div>
		<?php // Hook for adding tabbed content.
		do_action( 'mpb_content_page_about_after' ); ?>
	</div><!-- End jQuery tabbed content -->
</div><!-- End WordPress page wrapper -->