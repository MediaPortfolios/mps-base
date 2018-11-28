<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'mps-text' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'mps-text' ),
	esc_url( admin_url( '?page=' . MPB_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'mps-text' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'mps-text' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'mps-text' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'mps-text' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'mps-text' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'mps-text' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'mps-text' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'mps-text' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'mps-text' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'mps-text' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'mps-text' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'mps-text' ); ?></li>
</ul>