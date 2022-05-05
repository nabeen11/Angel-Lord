<?php


function prefix_club()
{

    $labels = array(
        'name'              => __('Clubs', 'angel_lord'),
        'singular_name'     => __('Club', 'angel_lord', 'angel_lord'),
        'add_new'           => _x('Add new Club', 'angel_lord'),
        'add_new_item'      => __('Add New Club', 'angel_lord'),
        'edit_item'          => __('Edit Club', 'angel_lord'),
        'new_item'           => __('New Club', 'angel_lord'),
        'view_item'          => __('View Club', 'angel_lord'),
        'search_items'       => __('Search Clubs', 'angel_lord'),
        'not_found'          => __('No Clubs found', 'angel_lord'),
        'not_found_in_trash' => __('No Clubs found in Trash', 'angel_lord'),
        'parent_item_colon'  => __('Parent Club', 'angel_lord'),
        'menu_name'          => __('Clubs', 'angel_lord'),
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
        'menu_icon'           => 'dashicons-block-default',
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

    register_post_type('club', $args);
}

add_action('init', 'prefix_club');
