<?php
/**
 * About page media options output.
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
<h2><?php _e( 'Media and Upload Options', 'mps-text' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'mps-text' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'mps-text' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'mps-text' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'mps-text' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'mps-text' ); ?></h3>