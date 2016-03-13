<?php

add_action('add_meta_boxes', 'cs_metabox_posts');

function cs_metabox_posts() {
    $wp_version = floatval(get_bloginfo('version'));

    #-----------------------------------------------------------------#
    # User team for post
    #-----------------------------------------------------------------#
    $teams = array();
    $teams[] = 'Choose';
    $args = array(
        'post_type'=> 'team',
        'order'    => 'ASC'
    );

    $wp_query = new WP_Query( $args );
    if($wp_query->have_posts() ) :
        foreach($wp_query->posts as $team) {
            $teams[$team->ID] = $team->post_title;
        }
    endif;

    $meta_box = array(
        'id' => 'cs-metabox-post-user-team',
        'title' => __('User Team Settings', THEMENAME),
        'description' => '',
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('User team', THEMENAME),
                'desc' => __('Please select user team for your post here.', THEMENAME),
                'id' => 'cs_user_team',
                'type' => 'select',
                'std' => $teams
            )
        )
    );
    $callback = create_function('$post, $meta_box', 'cs_create_meta_box( $post, $meta_box["args"] );');
    add_meta_box($meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box);

    #-----------------------------------------------------------------#
    # Custom Field for portfolio
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'cs-metabox-portfolio-custom-field',
        'title' => __('Custom Field', THEMENAME),
        'description' => '',
        'post_type' => 'portfolio',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Custom Field', THEMENAME),
                'desc' => __('Please enter custom field for your portfolio here.', THEMENAME),
                'id' => 'cs_custom_field',
                'type' => 'text',
                'std' => ''
            )
        )
    );
    $callback = create_function('$post, $meta_box', 'cs_create_meta_box( $post, $meta_box["args"] );');
    add_meta_box($meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box);
}

?>