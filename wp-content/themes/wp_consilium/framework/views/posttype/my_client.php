<?php

function cs_add_post_type_my_client() {
    $labels = array(
        'name' => _x('Clients', 'Post type general name', THEMENAME),
        'singular_name' => _x('Pro Clients', 'Post type singular name', THEMENAME),
        'add_new' => _x('Add new client', 'Client Item', THEMENAME),
        'add_new_item' => __('Add new client', THEMENAME),
        'edit_item' => __('Edit client', THEMENAME),
        'new_item' => __('New client', THEMENAME),
        'all_items' => __('All clients', THEMENAME),
        'view_item' => __('View', THEMENAME),
        'search_items' => __('Search', THEMENAME),
        'not_found' => __('No clients found.', THEMENAME),
        'not_found_in_trash' => __('No clients found.', THEMENAME),
        'parent_item_colon' => '',
        'menu_name' => 'Clients'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-networking',
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('myclients', $args);
    register_taxonomy(
        'clientscategory', array('myclients'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Client Categories',
            'add_new_item' =>
            'Add New Category',
            'parent_item' => 'Parent Category'),
        'query_var' => true,
        'rewrite' => array('slug' => 'clientscategory')
        )
    );
}
add_action('init', 'cs_add_post_type_my_client');