<?php


function prefix_gallery()
{

    $labels = array(
        'name'              => __('Galleries', 'angel_lord'),
        'singular_name'     => __('Gallery', 'angel_lord', 'angel_lord'),
        'add_new'           => _x('Add new Gallery', 'angel_lord'),
        'add_new_item'      => __('Add New Gallery', 'angel_lord'),
        'edit_item'          => __('Edit Gallery', 'angel_lord'),
        'new_item'           => __('New Gallery', 'angel_lord'),
        'view_item'          => __('View Gallery', 'angel_lord'),
        'search_items'       => __('Search Galleries', 'angel_lord'),
        'not_found'          => __('No Galleries found', 'angel_lord'),
        'not_found_in_trash' => __('No Galleries found in Trash', 'angel_lord'),
        'parent_item_colon'  => __('Parent Gallery', 'angel_lord'),
        'menu_name'          => __('Galleries', 'angel_lord'),
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-format-gallery',
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
            // 'editor',
            'author',
            'thumbnail',
            'excerpt',
            // 'custom-fields',
            'trackbacks',
            // 'comments',
            // 'revisions',
            'page-attributes',
            'post-formats',
        ),
    );

    register_post_type('gallery', $args);
}

add_action('init', 'prefix_gallery');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
// function gallerycategory()
// {

//     $labels = array(
//         'name'                  => _x('Gallery Categories', 'Gallery Categories', 'angel_lord'),
//         'singular_name'         => _x('Gallery Category', 'Gallery Category', 'angel_lord'),
//         'search_items'          => __('Search Gallery Categories', 'angel_lord'),
//         'popular_items'         => __('Popular Gallery Categories', 'angel_lord'),
//         'all_items'             => __('All Gallery Categories', 'angel_lord'),
//         'parent_item'           => __('Parent Gallery Category', 'angel_lord'),
//         'parent_item_colon'     => __('Parent Gallery Category', 'angel_lord'),
//         'edit_item'             => __('Edit Gallery Category', 'angel_lord'),
//         'update_item'           => __('Update Gallery Category', 'angel_lord'),
//         'add_new_item'          => __('Add New Gallery Category', 'angel_lord'),
//         'new_item_name'         => __('New Gallery Category Name', 'angel_lord'),
//         'add_or_remove_items'   => __('Add or remove Gallery Categories', 'angel_lord'),
//         'choose_from_most_used' => __('Choose from most used Gallery Categories', 'angel_lord'),
//         'menu_name'             => __('Gallery Categories', 'angel_lord'),
//     );

//     $args = array(
//         'labels'            => $labels,
//         'public'            => true,
//         'show_in_nav_menus' => true,
//         'show_admin_column' => true,
//         'hierarchical'      => true,
//         'show_tagcloud'     => true,
//         'show_ui'           => true,
//         'query_var'         => true,
//         'rewrite'           => true,
//         'query_var'         => true,
//         'capabilities'      => array(),
//     );

//     register_taxonomy('gallery-cat', array('gallery'), $args);
// }

// add_action('init', 'gallerycategory');
