<?php


function prefix_team()
{

    $labels = array(
        'name'              => __('Teams', 'angel_lord'),
        'singular_name'     => __('Team', 'angel_lord', 'angel_lord'),
        'add_new'           => _x('Add new Team', 'angel_lord'),
        'add_new_item'      => __('Add New Team', 'angel_lord'),
        'edit_item'          => __('Edit Team', 'angel_lord'),
        'new_item'           => __('New Team', 'angel_lord'),
        'view_item'          => __('View Team', 'angel_lord'),
        'search_items'       => __('Search Teams', 'angel_lord'),
        'not_found'          => __('No Teams found', 'angel_lord'),
        'not_found_in_trash' => __('No Teams found in Trash', 'angel_lord'),
        'parent_item_colon'  => __('Parent Team', 'angel_lord'),
        'menu_name'          => __('Teams', 'angel_lord'),
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
        'menu_icon'           => 'dashicons-groups',
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

    register_post_type('team', $args);
}

add_action('init', 'prefix_team');

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
function teamcategory()
{

    $labels = array(
        'name'                  => _x('Team Categories', 'Team Categories', 'angel_lord'),
        'singular_name'         => _x('Team Category', 'Team Category', 'angel_lord'),
        'search_items'          => __('Search Team Categories', 'angel_lord'),
        'popular_items'         => __('Popular Team Categories', 'angel_lord'),
        'all_items'             => __('All Team Categories', 'angel_lord'),
        'parent_item'           => __('Parent Team Category', 'angel_lord'),
        'parent_item_colon'     => __('Parent Team Category', 'angel_lord'),
        'edit_item'             => __('Edit Team Category', 'angel_lord'),
        'update_item'           => __('Update Team Category', 'angel_lord'),
        'add_new_item'          => __('Add New Team Category', 'angel_lord'),
        'new_item_name'         => __('New Team Category Name', 'angel_lord'),
        'add_or_remove_items'   => __('Add or remove Team Categories', 'angel_lord'),
        'choose_from_most_used' => __('Choose from most used Team Categories', 'angel_lord'),
        'menu_name'             => __('Team Categories', 'angel_lord'),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );

    register_taxonomy('teamlevel', array('team'), $args);
}

add_action('init', 'teamcategory');
