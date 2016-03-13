<?php
//add extra fields to category edit form hook
add_action ( 'edit_category_form_fields', 'extra_category_fields',10,2);
//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
	?>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="category_layout"><?php _e('Category Blog Layout',THEMENAME); ?></label></th>
		<td>
			<select type="checkbox" name="Cat_meta[category_layout]" id="Cat_meta[category_layout]">
				<option value="default" <?php if(($cat_meta['category_layout'] ? $cat_meta['category_layout'] : '') == 'default'){ echo "selected"; } ?>><?php _e('Default',THEMENAME);?></option>
				<option value="full-fixed" <?php if(($cat_meta['category_layout'] ? $cat_meta['category_layout'] : '') == 'full-fixed'){ echo "selected"; } ?>><?php _e('Full Width',THEMENAME);?></option>
				<option value="left-fixed" <?php if(($cat_meta['category_layout'] ? $cat_meta['category_layout'] : '') == 'left-fixed'){ echo "selected"; } ?>><?php _e('Sidebar Left',THEMENAME);?></option>
				<option value="right-fixed" <?php if(($cat_meta['category_layout'] ? $cat_meta['category_layout'] : '') == 'right-fixed'){ echo "selected"; } ?>><?php _e('Sidebar Right',THEMENAME);?></option>
			</select>
			<br />
	        <span class="description"><?php _e('Select Layout for current Category',THEMENAME); ?></span>
	    </td>
	</tr>
<?php
}
// save extra category extra fields hook
add_action ( 'edited_category', 'save_extra_category_fileds',10,2);
   // save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}