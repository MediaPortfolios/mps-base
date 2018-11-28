<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package    Media_Portfolios
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * Uninstall avatars.
 *
 * During uninstallation, remove the custom field from the users
 * and delete the local avatars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mpb_user_avatars_uninstall() {

	$mpb_user_avatars = new mpb_user_avatars;
	$users            = get_users_of_blog();

	foreach ( $users as $user ) {
		$mpb_user_avatars->avatar_delete( $user->user_id );
	}

	delete_option( 'mpb_user_avatars_caps' );

}
register_uninstall_hook( __FILE__, 'mpb_user_avatars_uninstall' );