<?php
foreach (glob("".get_template_directory()."/framework/includes/vc_extra_shortcodes/*.php") as $filename)
{
	include $filename;
}

vc_remove_element ( "vc_cta_button2" );
vc_remove_element ( "vc_button2" );
// intergrate VC
add_action ( 'init', 'cs_integrateWithVC' );
function cs_integrateWithVC() {
	$vc_is_wp_version_3_6_more = version_compare ( preg_replace ( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo ( 'version' ) ), '3.6' ) >= 0;
	/*
	 * Tabs ----------------------------------------------------------
	 */
	$tab_id_1 = time () . '-1-' . rand ( 0, 100 );
	$tab_id_2 = time () . '-2-' . rand ( 0, 100 );
	vc_map ( array (
			"name" => __ ( 'Tabs', 'js_composer' ),
			'base' => 'vc_tabs',
			'show_settings_on_create' => false,
			'is_container' => true,
			'icon' => 'icon-wpb-ui-tab-content',
			'category' => __ ( 'Content', 'js_composer' ),
			'description' => __ ( 'Tabbed content', 'js_composer' ),
			'params' => array (
					array (
							'type' => 'textfield',
							'heading' => __ ( 'Widget title', 'js_composer' ),
							'param_name' => 'title',
							'description' => __ ( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'js_composer' )
					),
					array (
							'type' => 'dropdown',
							'heading' => __ ( 'Auto rotate tabs', 'js_composer' ),
							'param_name' => 'interval',
							'value' => array (
									__ ( 'Disable', 'js_composer' ) => 0,
									3,
									5,
									10,
									15
							),
							'std' => 0,
							'description' => __ ( 'Auto rotate tabs each X seconds.', 'js_composer' )
					),
					array (
							'type' => 'textfield',
							'heading' => __ ( 'Extra class name', 'js_composer' ),
							'param_name' => 'el_class',
							'description' => __ ( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
					),
					array (
							'type' => 'dropdown',
							'param_name' => 'style',
							'heading' => __ ( 'Style', 'js_composer' ),
							'value' => array (
									"Style 1" => "style1",
									"Style 2" => "style2",
									"Style 3" => "style3"
							),
							'std' => 'style1',
							'description' => __ ( '', 'js_composer' )
					)
			),
			'custom_markup' => '
	<div class="wpb_tabs_holder wpb_holder vc_container_for_children">
	<ul class="tabs_controls">
	</ul>
	%content%
	</div>',
			'default_content' => '
	[vc_tab title="' . __ ( 'Tab 1', 'js_composer' ) . '" tab_id="' . $tab_id_1 . '"][/vc_tab]
	[vc_tab title="' . __ ( 'Tab 2', 'js_composer' ) . '" tab_id="' . $tab_id_2 . '"][/vc_tab]
	',
			'js_view' => $vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35'
	) );
	/*
	 * Call to Action Button ----------------------------------------------------------
	 */
	$target_arr = array (
			__ ( 'Same window', 'js_composer' ) => '_self',
			__ ( 'New window', 'js_composer' ) => "_blank"
	);
	$button_type = array (
			__ ( 'Button Default', 'js_composer' ) => 'btn-default',
			__ ( 'Button Primary', 'js_composer' ) => 'btn-primary',
			__ ( 'Button Primary Alt White', 'js_composer' ) => 'btn btn-primary-alt btn-white'
	);
	$size_arr = array (
			__ ( 'Regular size', 'js_composer' ) => '',
			__ ( 'Large', 'js_composer' ) => 'btn-large',
			__ ( 'Small', 'js_composer' ) => 'btn-small',
			__ ( 'Mini', 'js_composer' ) => "btn-mini"
	);
	$add_css_animation = array (
			'type' => 'dropdown',
			'heading' => __ ( 'CSS Animation', 'js_composer' ),
			'param_name' => 'css_animation',
			'admin_label' => true,
			'value' => array (
					__ ( 'No', 'js_composer' ) => '',
					__ ( 'Top to bottom', 'js_composer' ) => 'top-to-bottom',
					__ ( 'Bottom to top', 'js_composer' ) => 'bottom-to-top',
					__ ( 'Left to right', 'js_composer' ) => 'left-to-right',
					__ ( 'Right to left', 'js_composer' ) => 'right-to-left',
					__ ( 'Appear from center', 'js_composer' ) => "appear"
			),
			'description' => __ ( 'Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'js_composer' )
	);
	vc_map ( array (
			'name' => __ ( 'Call to Action Button', 'js_composer' ),
			'base' => 'vc_cta_button',
			'icon' => 'icon-wpb-call-to-action',
			'category' => __ ( 'Content', 'js_composer' ),
			'description' => __ ( 'Catch visitors attention with CTA block', 'js_composer' ),
			'params' => array (
					array (
							'type' => 'textarea',
							'admin_label' => true,
							'heading' => __ ( 'Text', 'js_composer' ),
							'param_name' => 'call_text',
							'value' => __ ( 'Click edit button to change this text.', 'js_composer' ),
							'description' => __ ( 'Enter your content.', 'js_composer' )
					),
					array (
							'type' => 'textfield',
							'heading' => __ ( 'Text on the button', 'js_composer' ),
							'param_name' => 'title',
							'value' => __ ( 'Text on the button', 'js_composer' ),
							'description' => __ ( 'Text on the button.', 'js_composer' )
					),
					array (
							'type' => 'textfield',
							'heading' => __ ( 'URL (Link)', 'js_composer' ),
							'param_name' => 'href',
							'description' => __ ( 'Button link.', 'js_composer' )
					),
					array (
							'type' => 'dropdown',
							'heading' => __ ( 'Target', 'js_composer' ),
							'param_name' => 'target',
							'value' => $target_arr,
							'dependency' => array (
									'element' => 'href',
									'not_empty' => true
							)
					),
					array (
							'type' => 'dropdown',
							'heading' => __ ( 'Button Type ', 'js_composer' ),
							'param_name' => 'button_type',
							'value' => $button_type,
							'description' => __ ( 'Button Type.', 'js_composer' ),
							'param_holder_class' => 'vc-button-type-dropdown'
					),
					array (
							'type' => 'dropdown',
							'heading' => __ ( 'Size', 'js_composer' ),
							'param_name' => 'size',
							'value' => $size_arr,
							'description' => __ ( 'Button size.', 'js_composer' )
					),
					array (
							'type' => 'dropdown',
							'heading' => __ ( 'Button position', 'js_composer' ),
							'param_name' => 'position',
							'value' => array (
									__ ( 'Align right', 'js_composer' ) => 'cs_align_right',
									__ ( 'Align left', 'js_composer' ) => 'cs_align_left'
							),
							'description' => __ ( 'Select button alignment.', 'js_composer' )
					),
					$add_css_animation,
					array (
							'type' => 'textfield',
							'heading' => __ ( 'Extra class name', 'js_composer' ),
							'param_name' => 'el_class',
							'description' => __ ( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
					)
			),
			'js_view' => 'VcCallToActionView'
	) );
}