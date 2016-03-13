<?php

#-----------------------------------------------------------------#
# Create admin testimonial section
#-----------------------------------------------------------------#

function cs_add_post_type_testimonial() {
    $testimonial_labels = array(
        'name' => __('Testimonials', 'taxonomy general name', THEMENAME),
        'singular_name' => __('Testimonial Item', THEMENAME),
        'search_items' => __('Search Testimonial Items', THEMENAME),
        'all_items' => __('Testimonial', THEMENAME),
        'parent_item' => __('Parent Testimonial Item', THEMENAME),
        'edit_item' => __('Edit Testimonial Item', THEMENAME),
        'update_item' => __('Update Testimonial Item', THEMENAME),
        'add_new_item' => __('Add New Testimonial Item', THEMENAME),
        'not_found' => __('No testimonial found', THEMENAME)
    );

    $options = get_option('cshero');
    $custom_slug = null;

    if (!empty($options['testimonial_rewrite_slug']))
        $custom_slug = $options['testimonial_rewrite_slug'];

    $args = array(
        'labels' => $testimonial_labels,
        'rewrite' => array('slug' => $custom_slug, 'with_front' => false),
        'singular_label' => __('Project', THEMENAME),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_position' => 9,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor', 'thumbnail', 'comments')
    );

    register_post_type('testimonial', $args);

    register_taxonomy('testimonial_category', 'testimonial', array('hierarchical' => true, 'label' => __('Testimonial Categories', THEMENAME), 'query_var' => true, 'rewrite' => true));

    $labels = array(
        'name' => _x('Testimonial Tags', 'taxonomy general name', THEMENAME),
        'singular_name' => _x('Tag', 'taxonomy singular name', THEMENAME),
        'search_items' => __('Search Tags', THEMENAME),
        'popular_items' => __('Popular Tags', THEMENAME),
        'all_items' => __('All Tags', THEMENAME),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Tag', THEMENAME),
        'update_item' => __('Update Tag', THEMENAME),
        'add_new_item' => __('Add New Tag', THEMENAME),
        'new_item_name' => __('New Tag Name', THEMENAME),
        'separate_items_with_commas' => __('Separate tags with commas', THEMENAME),
        'add_or_remove_items' => __('Add or remove tags', THEMENAME),
        'choose_from_most_used' => __('Choose from the most used tags', THEMENAME),
        'menu_name' => __('Testimonial Tags', THEMENAME),
    );

    register_taxonomy('testimonial_tag', 'testimonial', array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'tag'),
    ));
}

add_action('init', 'cs_add_post_type_testimonial');