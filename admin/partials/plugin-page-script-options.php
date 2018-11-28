<?php
/**
 * About page script options output.
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
<h3><?php _e( 'Script Inclusion and Loading', 'mps-text' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'This plugin is equipped with', 'mps-text' ),
	esc_url( admin_url( 'options-general.php?page=' . MPB_ADMIN_SLUG . '-scripts' ) ),
	__( 'an admin page', 'mps-text' ),
	__( 'for enqueueing third-party scripts included in the plugin, as well as for script loading options.', 'mps-text' )
 ); ?>
<h3><?php _e( 'Included Vendor Scripts', 'mps-text' ); ?></h3>
<p><?php _e( 'UI &amp; UX JS plugins ready to use', 'mps-text' ); ?></p>
<ul>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'Fancybox 3', 'mps-text' ), esc_attr( 'https://github.com/fancyapps/fancybox' ), esc_url( 'https://github.com/fancyapps/fancybox' ) ); ?>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'Slick', 'mps-text' ), esc_attr( 'https://github.com/kenwheeler/slick' ), esc_url( 'https://github.com/kenwheeler/slick' ) ); ?>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'Tabslet', 'mps-text' ), esc_attr( 'https://github.com/vdw/Tabslet' ), esc_url( 'https://github.com/vdw/Tabslet' ) ); ?>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'Sticky-kit', 'mps-text' ), esc_attr( 'https://github.com/leafo/sticky-kit' ), esc_url( 'https://github.com/leafo/sticky-kit' ) ); ?>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'Tooltipster', 'mps-text' ), esc_attr( 'https://github.com/iamceege/tooltipster' ), esc_url( 'https://github.com/iamceege/tooltipster' ) ); ?>
	<?php echo sprintf( '<li>%1s - <a href="%2s" target="_blank">%3s</a></li>', _x( 'FitVids', 'mps-text' ), esc_attr( 'https://github.com/davatron5000/FitVids.js' ), esc_url( 'https://github.com/davatron5000/FitVids.js' ) ); ?>
</ul>