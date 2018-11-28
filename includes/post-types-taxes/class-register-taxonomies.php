<?php
/**
 * Register taxonomies.
 *
 * @package    Media_Portfolios
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "mpb_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'mps-text' ),
            'singular_name'              => __( 'Taxonomy', 'mps-text' ),
            'menu_name'                  => __( 'Taxonomy', 'mps-text' ),
            'all_items'                  => __( 'All Taxonomies', 'mps-text' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'mps-text' ),
            'view_item'                  => __( 'View Taxonomy', 'mps-text' ),
            'update_item'                => __( 'Update Taxonomy', 'mps-text' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'mps-text' ),
            'new_item_name'              => __( 'New Taxonomy', 'mps-text' ),
            'parent_item'                => __( 'Parent Taxonomy', 'mps-text' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'mps-text' ),
            'popular_items'              => __( 'Popular Taxonomies', 'mps-text' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'mps-text' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'mps-text' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'mps-text' ),
            'not_found'                  => __( 'No Taxonomies Found', 'mps-text' ),
            'no_terms'                   => __( 'No Taxonomies', 'mps-text' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'mps-text' ),
            'items_list'                 => __( 'Taxonomies List', 'mps-text' )
        ];

        $args = [
            'label'              => __( 'Taxonomies', 'mps-text' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'mpb_taxonomy',
            [
                'mpb_post_type'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;