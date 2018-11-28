<?php
/**
 * Content for the Convert Plugin help tab.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Converting the plugin for your website', 'mps-text' ); ?></h3>
<h4><?php _e( 'Directories and file names', 'mps-text' ); ?></h4>
<p><?php _e( 'The names for directories and files are descriptive enough to describe what they do yet generic enough that they likely will not need to be changed. However, you may want to remove some files, such as that in which this code is written.', 'mps-text' ); ?></p>
<h4><?php _e( 'Renaming the code', 'mps-text' ); ?></h4>
<p><?php _e( 'To rename this plugin to convert it specifically for a single website, first rename this file and rename the plugin folder with the same name as this file. Then use a find &amp; replace function to look for the following...', 'mps-text' ); ?></p>
<ol>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Text Domain', 'mps-text' ), esc_html__( 'The text domain should be the same as this file and the plugin folder. Replace "mps-text".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Classes', 'mps-text' ), esc_html__( 'Classes are prefixed with the plugin name. Replace "Controlled_Chaos".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Class Variables', 'mps-text' ), esc_html__( 'Class variables are prefixed with the plugin name. Replace "controlled_chaos".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Functions', 'mps-text' ), esc_html__( 'There are a few functions prefixed with the plugin name. The above replace of "controlled_chaos" will have given them your new name.', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Filters', 'mps-text' ), esc_html__( 'Filters are prexixed with an abbreviation for the plugin name. Replace "mpb".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Pages', 'mps-text' ), esc_html__( 'Admin page URLs are prexixed with an abbreviation for the plugin name. The above replace of "mpb" will have given them your new prefix.', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Options', 'mps-text' ), esc_html__( 'Options are prexixed with an abbreviation for the plugin name. The above replace of "mpb" will have given them your new prefix.', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Version', 'mps-text' ), esc_html__( 'The plugin version is all caps and is prexixed with an abbreviation for the plugin name. Replace "MPB".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Author', 'mps-text' ), esc_html__( 'The author name and email is used in class docblocks. Replace "Greg Sweet" and replace "greg@ccdzine.com".', 'mps-text' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Plugin Name', 'mps-text' ), esc_html__( 'The plugin name is used in various places. Replace "Controlled Chaos".', 'mps-text' ) ); ?>
</ol>