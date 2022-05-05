<?php
  
/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */

function prefix_banner()
{
    $labels = array(
        'name'                  => __('Banners', 'angel_lord'),
        'singular_name'         => __('Banner', 'angel_lord'),
        'add_new'               => __('Add New Banner', 'angel_lord', 'angel_lord'),
        'add_new_item'          => __('Add New Banner', 'angel_lord'),
        'edit_item'             => __('Edit Banner', 'angel_lord'),
        'new_item'              => __('New Banner', 'angel_lord'),
        'view_item'             => __('View Banner', 'angel_lord'),
        'search_items'          => __('Search Banners', 'angel_lord'),
        'not_found'             => __('No Banners found', 'angel_lord'),
        'not_found_in_trash'    => __('No Banners found in Trash', 'angel_lord'),
        'parent_item_colon'     => __('Parent Banner', 'angel_lord'),
        'menu_name'             => __('Banners', 'angel_lord'),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        // 'show_in_rest'        => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-slides',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            // 'custom-fields',
            'trackbacks',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
    );

    register_post_type('banner', $args);
}

add_action('init', 'prefix_banner');
?>