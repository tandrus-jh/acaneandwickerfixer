<?php
#-----------------------------------------------------------------#
# Create Meta Box
#-----------------------------------------------------------------#

function cs_create_meta_box($post, $meta_boxes) {
    if (!is_array($meta_boxes))
        return false;
    if (isset($meta_boxes['description']) && $meta_boxes['description'] != '') {
        echo '<p>' . $meta_boxes['description'] . '</p>';
    }
    wp_nonce_field(basename(__FILE__), 'cs_meta_box_nonce');
    echo '<table class="form-table cs-metabox">';
    foreach ($meta_boxes['fields'] as $field) {
        $meta_box = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>
                <th>
                    <label for="' . $field['id'] . '">
                        <strong>' . $field['name'] . '</strong>
                        <span>' . $field['desc'] . '</span>
                    </label>
                </th>';
        switch ($field['type']) {
            case 'text':
                echo '<td><input type="text" name="cs_meta[' . $field['id'] . ']" id="' . $field['id'] . '" value="' . ($meta_box ? $meta_box : $field['std']) . '" size="30" /></td>';
                break;
            case 'textarea':
                echo '<td><textarea name="cs_meta[' . $field['id'] . ']" id="' . $field['id'] . '" rows="8" cols="70">' . ($meta_box ? $meta_box : $field['std']) . '</textarea></td>';
                break;
            case 'media_textarea':
                echo '<td>
                    <div style="display:none;" class="attr_placeholder" data-poster="" data-media-mp4="" data-media-ogv=""></div><textarea name="cs_meta[' . $field['id'] . ']" id="' . $field['id'] . '" rows="8" cols="5">' . ($meta_box ? $meta_box : $field['std']) . '</textarea>
                    </td>';
                break;
            case 'editor' :
                $settings = array(
                    'textarea_name' => 'cs_meta[' . $field['id'] . ']',
                    'editor_class' => '',
                    'wpautop' => true
                );
                wp_editor($meta_box, $field['id'], $settings);
                break;
            case 'file':
                echo '<td><input type="hidden" id="' . $field['id'] . '" name="cs_meta[' . $field['id'] . ']" value="' . ($meta_box ? $meta_box : $field['std']) . '" />';
                if(!empty($meta_box)){
                    echo '<img class="cs-screenshot" id="cs_screenshot_' . $field['id'] . '" src="' . ($meta_box ? $meta_box : $field['std']) . '" />';
                }
                if (($meta_box ? $meta_box : $field['std']) == '') {
                    $remove = ' style="display:none;"';
                    $upload = '';
                } else {
                    $remove = '';
                    $upload = ' style="display:none;"';
                }
                echo ' <a href="javascript:void(0);" class="cs-upload button-secondary"' . $upload . ' rel-id="' . $field['id'] . '">' . __('Upload', THEMENAME) . '</a>';
                echo ' <a href="javascript:void(0);" class="cs-upload-remove"' . $remove . ' rel-id="' . $field['id'] . '">' . __('Remove Upload', THEMENAME) . '</a></td>';
                break;
            case 'media':
                echo '<td><input type="text" readonly="readonly" id="' . $field['id'] . '" name="cs_meta[' . $field['id'] . ']" value="' . ($meta_box ? $meta_box : $field['std']) . '" />';
                if (($meta_box ? $meta_box : $field['std']) == '') {
                    $remove = ' style="display:none;"';
                    $upload = '';
                } else {
                    $remove = '';
                    $upload = ' style="display:none;"';
                }
                echo ' <a href="javascript:void(0);" class="cs-media-upload button-secondary"' . $upload . ' rel-id="' . $field['id'] . '">' . __('Add Media', THEMENAME) . '</a>';
                echo ' <a href="javascript:void(0);" class="cs-upload-media-remove"' . $remove . ' rel-id="' . $field['id'] . '">' . __('Remove Media', THEMENAME) . '</a></td>';
                break;
            case 'images':
                echo '<td><input type="button" class="button" name="' . $field['id'] . '" id="cs_images_upload" value="' . $field['std'] . '" /></td>';
                break;
            case 'select':
                echo '<td><select name="cs_meta[' . $field['id'] . ']" id="' . $field['id'] . '">';
                foreach ($field['std'] as $key => $option) {
                    echo '<option value="' . $key . '"';
                    if ($meta_box) {
                        if ($meta_box == $key)
                            echo ' selected="selected"';
                    } else {
                        if ($field['std'] == $key)
                            echo ' selected="selected"';
                    }
                    echo '>' . $option . '</option>';
                }
                echo '</select></td>';
                break;
            case 'multi-select':
                echo '<td><select multiple="multiple" name="cs_meta[' . $field['id'] . '][]" id="' . $field['id'] . '">';
                foreach ($field['std'] as $key => $option) {
                    echo '<option value="' . $key . '"';
                    if ($meta_box) {
                        echo (is_array($meta_box) && in_array($key, $meta_box)) ? ' selected="selected"' : '';
                        if ($meta_box == $key)
                            echo ' selected="selected"';
                    } else {
                        if ($field['std'] == $key)
                            echo ' selected="selected"';
                    }
                    echo '>' . $option . '</option>';
                }
                echo '</select></td>';
                break;
            case 'radio':
                echo '<td>';
                foreach ($field['options'] as $key => $option) {
                    echo '<label class="radio-label"><input type="radio" name="cs_meta[' . $field['id'] . ']" value="' . $key . '" class="radio"';
                    if ($meta_box) {
                        if ($meta_box == $key)
                            echo ' checked="checked"';
                    } else {
                        if ($field['std'] == $key)
                            echo ' checked="checked"';
                    }
                    echo ' /> ' . $option . '</label> ';
                }
                echo '</td>';
                break;
            case 'checkbox':
                echo '<td>';
                $val = '';
                if ($meta_box) {
                    if ($meta_box == 'on')
                        $val = ' checked="checked"';
                } else {
                    if ($field['std'] == 'on')
                        $val = ' checked="checked"';
                }
                echo '<input type="hidden" name="cs_meta[' . $field['id'] . ']" value="off" />
                    <input type="checkbox" id="' . $field['id'] . '" name="cs_meta[' . $field['id'] . ']" value="on"' . $val . ' /> ';
                echo '</td>';
                break;
        }
        echo '</tr>';
    }
    echo '</table>';
}

#-----------------------------------------------------------------#
# Save Meta Box
#-----------------------------------------------------------------#

function cs_save_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (!isset($_POST['cs_meta']) || !isset($_POST['cs_meta_box_nonce']) || !wp_verify_nonce($_POST['cs_meta_box_nonce'], basename(__FILE__)))
        return;
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return;
    }
    else {
        if (!current_user_can('edit_post', $post_id))
            return;
    }
    foreach ($_POST['cs_meta'] as $key => $val) {
        update_post_meta($post_id, $key, $val);
    }
}

add_action('save_post', 'cs_save_meta_box');
?>