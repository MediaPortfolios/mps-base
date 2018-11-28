<?php
/**
 * Content for the Remove Emoji Script help tab.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div>
	<h3><?php _e( 'Remove Emoji Script', 'mps-text' ); ?></h3>
	<p><?php _e( 'WordPress includes this script to allow emojis to work in older browsers. If your users work with modern browsers than this script is unnecessary.' ); ?></p>
</div>