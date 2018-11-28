<?php
/**
 * Backend search form template.
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
}

$label       = apply_filters( 'mpb_search_label', esc_html__( 'Search for:', 'mps-text' ) );
$placeholder = apply_filters( 'mpb_search_placeholder', esc_attr( esc_html__( 'Search ', 'mps-text' ) . get_bloginfo( 'name' ) ) );
$submit      = apply_filters( 'mpb_search_submit', esc_html__( 'Submit', 'mps-text' ) );
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo $label; ?></span>
        <input type="search" class="search" id="search" name="s" value="" placeholder="<?php echo $placeholder; ?>" />
    </label>
    <input type="submit" value="<?php echo $submit; ?>" class="search-submit" id="search-submit" />
</form>
