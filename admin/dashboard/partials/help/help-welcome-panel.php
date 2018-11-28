<?php
/**
 * Content for the Welcome Panel help tab.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 *
 * @todo       Change this content when the custom welcome
 *             panel is ready to use.
 */

namespace CC_Plugin\Admin\Dashboard\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Welcome Panel', 'mps-text' ); ?></h3>
<p><?php _e( 'A custom, widgetized welcome panel is coming soon.', 'mps-text' ); ?></p>
<?php
echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'View options on the', 'mps-text' ),
	esc_url( 'http://localhost/controlledchaos/wp-admin/index.php?page=' . MPB_ADMIN_SLUG . '-settings' ),
	__( 'Dashboard Settings', 'mps-text' ),
	__( 'page.', 'mps-text' )
); ?>