<?php
/**
 * Register post types.
 *
 * @package    Media_Portfolios
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "mpb_post_type" and replace with your post type database name.
         * Search case "custom-posts" and replace with your post type archive permalink slug.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'mps-text' ),
            'singular_name'         => __( 'Custom Post', 'mps-text' ),
            'menu_name'             => __( 'Custom Posts', 'mps-text' ),
            'all_items'             => __( 'All Custom Posts', 'mps-text' ),
            'add_new'               => __( 'Add New', 'mps-text' ),
            'add_new_item'          => __( 'Add New Custom Post', 'mps-text' ),
            'edit_item'             => __( 'Edit Custom Post', 'mps-text' ),
            'new_item'              => __( 'New Custom Post', 'mps-text' ),
            'view_item'             => __( 'View Custom Post', 'mps-text' ),
            'view_items'            => __( 'View Custom Posts', 'mps-text' ),
            'search_items'          => __( 'Search Custom Posts', 'mps-text' ),
            'not_found'             => __( 'No Custom Posts Found', 'mps-text' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'mps-text' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'mps-text' ),
            'featured_image'        => __( 'Featured image for this custom post', 'mps-text' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'mps-text' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'mps-text' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'mps-text' ),
            'archives'              => __( 'Custom Post archives', 'mps-text' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'mps-text' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'mps-text' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'mps-text' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'mps-text' ),
            'items_list'            => __( 'Custom Posts List', 'mps-text' ),
            'attributes'            => __( 'Custom Post Attributes', 'mps-text' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'mps-text' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'mpb_custom_posts_labels', $labels );

        $args = [
            'label'               => __( 'Custom Posts', 'mps-text' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'mps-text' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'mpb_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'mpb_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'mpb_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        // Apply a filter to arguments for customization.
        $args = apply_filters( 'mpb_custom_posts_args', $args );

        register_post_type(
            'mpb_post_type',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;