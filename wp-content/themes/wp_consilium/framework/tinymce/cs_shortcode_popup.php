<?php
// Access WordPress
$absolute_path = __FILE__;
$path_to_file = explode('wp-content', $absolute_path);
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );
require_once( 'cs_shortcode_list.php');
require_once('cs_shortcode_option.php');

$shortcode_option = null;
$shortcode_html = null;
$shortcode_html = '
    <div id="cs_shortcode">
        <div class="cs-shortcode-content">
            <div class="label"><strong>Shortcodes</strong></div>
            <div class="content">
                <select id="cs_shortcodes_chooser" data-placeholder="' . __("Choose a shortcode", THEMENAME) . '" >
                    <option></option>';

foreach ($cs_shortcodes as $shortcode => $options) {
    $shortcode_html .= '<option value="' . esc_attr($shortcode) . '">' . $options['title'] . '</option>';

    $shortcode_option .= '<div class="shortcode-options" id="options-' . esc_attr($shortcode) . '" data-name="' . esc_attr($shortcode) . '">';

    if (!empty($options['fields'])) {
        foreach ($options['fields'] as $title => $input_attr) {
            $shortcode_option .= cs_shortcode_option_render($title, $input_attr);
        }
    }
    if (!empty($options['content']) && $options['content']) {
        $shortcode_option .= "<div class='option-content'>";
        $shortcode_option .= '
		<div class="label"><label for="shortcode-option-content"><strong>Content</strong></label></div>
		<div class="content"><textarea rows="10" id="shortcode-option-content"></textarea></div>';
        $shortcode_option .= '</div>';
    }
    $shortcode_option .= '</div>';
}

$shortcode_html .= '</select></div><div class="hr"></div></div></div>';
?>

<!--style-->
<l<?php echo 'i' ?>nk rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/framework/tinymce/css/chosen.css" />
<l<?php echo 'i' ?>nk rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/framework/tinymce/css/shortcode.css" />

<!--scripts-->
<sc<?php echo 'rip';?>t src="<?php echo get_template_directory_uri(); ?>/framework/tinymce/js/chosen.jquery.min.js"></script>
<sc<?php echo 'rip';?>t src="<?php echo get_template_directory_uri(); ?>/framework/tinymce/js/popup.js"></script>

<div style="display: block; height: 500px;">
	<?php echo $shortcode_html; ?>
	<?php echo $shortcode_option; ?>
	<div style="clear: both;"></div>
	<div>
		<a class="btn" id="cshero_shortcode_add_btn"><?php echo __('Add Shortcode', THEMENAME); ?></a>
	</div>
</div>