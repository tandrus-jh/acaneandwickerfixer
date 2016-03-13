<?php global $smof_data, $post;
$c_pageID = null;
if($post){
    $c_pageID = $post->ID;
}
?>
<style type="text/css">
    <?php if($smof_data['layout'] == 'Boxed'): ?>
    /* Background body */
    body.csbody #wrapper{
        <?php
             $arr = array(
                'color'=>get_post_meta($c_pageID, 'cs_bg_color', true),
                'color_default'=>$smof_data['bg_color'],
                'image'=>get_post_meta($c_pageID, 'cs_bg_image', true),
                'image_default'=>$smof_data['bg_image'],
                'repeat'=>get_post_meta($c_pageID, 'cs_bg_repeat', true),
                'position'=>"",
                'padding'=>'',
                'padding_default'=>'',
                'margin'=>'',
                'margin_default'=>'',
                'parallax'=>"",
                'parallax_default'=>"",
                'bgfull'=>get_post_meta($c_pageID, 'cs_bg_full', true),
                'bgfull_default'=>$smof_data['bg_full']
             );
             echo cshero_generetor_background($arr);
        ?>
        <?php if($smof_data['bg_pattern_option'] && $smof_data['bg_pattern'] && !(get_post_meta($c_pageID, 'pyre_page_bg_color', true) || get_post_meta($c_pageID, 'pyre_page_bg', true))): ?>
            background-image:url("<?php echo esc_url($smof_data['bg_pattern']); ?>");
            background-repeat:repeat;
        <?php endif; ?>
        font-size: <?php echo esc_attr($smof_data['body_font_size']); ?>;
    }
    #wrapper{
        background:#FFFFFF;
        margin: 0 auto;
        width: 1000px;
    }
    #wrapper .container {
        width: 100%;
    }
    <?php endif; ?>
    #header-sticky ul.navigation > li > a,.logo-sticky a {
        line-height: <?php echo esc_attr($smof_data["header_sticky_height"]); ?>;
    }
    /* Background Header */
    body #cshero-header {
    <?php
        $arr = array(
				'color'=>'',
                'color_default'=>'',
                'image'=>get_post_meta($c_pageID, 'cs_header_bg_image', true),
                'image_default'=>$smof_data['header_bg_image'],
                'repeat'=>get_post_meta($c_pageID, 'cs_header_bg_repeat', true),
                'position'=>"",
                'padding'=>'',
                'padding_default'=>'',
                'margin'=>'',
                'margin_default'=>'',
                'parallax'=>get_post_meta($c_pageID, 'cs_header_bg_parallax', true),
                'parallax_default'=>$smof_data['header_bg_parallax']
             );
        echo cshero_generetor_background($arr);
    ?>
    }
    /* mobile menu */
    @media (max-width: 992px) {
        .main-menu, .sticky-menu{
            display: none;
        }
        .header-wrapper .btn-nav-mobile-menu{
            display: block;
        }
    }
    /* Logo */
    .logo {
        text-align : <?php echo esc_attr($smof_data['logo_alignment']); ?>;
    }
    .normal_logo {
        margin:<?php echo esc_attr($smof_data['margin_logo']); ?>;
        padding:<?php echo esc_attr($smof_data['padding_logo']); ?>;
    }
    .logo-sticky {
        text-align : <?php echo esc_attr($smof_data['sticky_logo_alignment']); ?>;
        margin:<?php echo esc_attr($smof_data['sticky_margin_logo']); ?>;
    }
    .logo-sticky img {
        padding:<?php echo esc_attr($smof_data['sticky_padding_logo']); ?>;
    }
    /* Main menu */
    .cshero-menu-dropdown > ul > li > a {
        height: <?php echo esc_attr($smof_data['nav_height']); ?>;
        line-height: <?php echo esc_attr($smof_data['nav_height']); ?>;
    }
    .cshero-menu-dropdown > ul > li {
        padding-right: <?php echo esc_attr($smof_data['nav_padding']); ?>;
    }
    /* sticky header */
    .sticky-header{
        background: <?php echo HexToRGB($smof_data['header_sticky_bg_color'],$smof_data['header_sticky_opacity']/100); ?>;
    }
    .sticky-header .cshero-menu-dropdown > ul > li{
        padding-right: <?php echo esc_attr($smof_data['header_sticky_nav_padding']); ?>;
    }
    .sticky-header .cshero-logo > a,.sticky-header .cshero-menu-dropdown > ul > li > a {
        display: block;
        line-height: <?php echo esc_attr($smof_data['header_sticky_height']); ?>;
    }

    <?php if (!$smof_data['header_sticky_tablet']): ?>
        @media (max-width: 992px) and (min-width: 768px) {
            .sticky-wrapper{
                display: none;
            }
        }
    <?php endif; ?>
    <?php if (!$smof_data['header_sticky_mobile']): ?>
        @media (max-width: 767px) {
            .sticky-wrapper{
                display: none;
            }
        }
    <?php endif; ?>
    /* End sticky header */

    /* Bottom top background*/
    #cs-bottom-wrap{
    <?php
        $arr = array(
                'color'=>'',
                'color_default'=> $smof_data['bottom_1_top_bg_color'],
                'image'=>'',
                'image_default'=> $smof_data['bottom_1_bg_image'],
                'repeat'=> $smof_data['bottom_1_bg_repeat'],
                'position'=> $smof_data['bottom_1_bg_pos'],
                'padding'=>'',
                'padding_default'=> $smof_data['bottom_1_padding'],
                'margin'=>'',
                'margin_default'=> $smof_data['bottom_1_margin'],
                'parallax'=>'',
                'parallax_default'=> $smof_data['bottom_1_bg_parallax'],
                'bgfull'=>'',
                'bgfull_default'=> $smof_data['bottom_1_bg_full']
             );
        echo cshero_generetor_background($arr);
    ?>
    }
    /* Footer top background*/
    #footer-top{
    <?php
        $arr = array(
                'color'=>get_post_meta($c_pageID, 'cs_footer_top_bg_color', true),
                'color_default'=>$smof_data['footer_top_bg_color'],
                'image'=>get_post_meta($c_pageID, 'cs_footer_top_bg_image', true),
                'image_default'=>$smof_data['footer_top_bg_image'],
                'repeat'=>get_post_meta($c_pageID, 'footer_top_bg_repeat', true),
                'position'=>get_post_meta($c_pageID, 'footer_top_bg_pos', true),
                'padding'=>'',
                'padding_default'=>'',
                'margin'=>'',
                'margin_default'=>'',
                'parallax'=>get_post_meta($c_pageID, 'cs_footer_top_bg_parallax', true),
                'parallax_default'=>$smof_data['footer_top_bg_parallax'],
                'bgfull'=>get_post_meta($c_pageID, 'cs_footer_top_bg_full', true),
                'bgfull_default'=>$smof_data['footer_top_bg_full']
             );
        echo cshero_generetor_background($arr);
    ?>
    }
    /* Page title background */
    #cs-page-title-wrapper{
    <?php
        $arr = array(
                'color'=>get_post_meta($c_pageID, 'cs_page_title_background_color', true),
                'color_default'=>$smof_data['page_title_bg_color'],
                'image'=>get_post_meta($c_pageID, 'cs_page_title_bg', true),
                'image_default'=>$smof_data['page_title_bg'],
                'repeat'=>get_post_meta($c_pageID, 'cs_page_title_bg_color', true),
                'position'=>"",
                'padding'=>get_post_meta($c_pageID, 'cs_page_title_padding', true),
                'padding_default'=>$smof_data['page_title_padding'],
                'margin'=>'',
                'margin_default'=>'',
                'parallax'=>get_post_meta($c_pageID, 'cs_page_title_bg_parallax', true),
                'parallax_default'=>$smof_data['page_title_bg_parallax'],
                'bgfull'=>get_post_meta($c_pageID, 'cs_page_title_bg_full', true),
                'bgfull_default'=>$smof_data['page_title_bg_full']
             );
        echo cshero_generetor_background($arr);
    ?>
        border-color: <?php echo esc_attr($smof_data['page_title_border_color']); ?>;
    }
    <?php
    $post_id = is_object($post)?$post->ID:0;
    ?>
    .page-title-style .page-title {
        font-size: <?php echo esc_attr(get_post_meta($post_id, 'cs_page_title_custom_size', true)); ?> !important;
    }
    .cs-breadcrumbs,.cs-breadcrumbs a{
        color: <?php echo esc_attr($smof_data['breadcrumbs_text_color']); ?>;
    }
</style>
<style type="text/css">
	/* body font */
    <?php if ($smof_data['body_font_options'] != ''): ?>
        <?php
    if ($smof_data['body_font_options'] == 'Google Font' && $smof_data['google_body_font_family'] != '' && $smof_data['body_font_family_selector'] != '') {
        $font_body = '' . esc_attr($smof_data['google_body_font_family']) . ' !important';
         ?>
        <?php echo $smof_data['body_font_family_selector']; ?>{font-family:<?php echo $font_body; ?>;}
        <?php
    }
    if ($smof_data['body_font_options'] == 'Standard Font' && $smof_data['standard_body_font_family'] != '' && $smof_data['body_font_family_selector'] != '') {
        $font_body = '' . esc_attr($smof_data['standard_body_font_family']) . ' !important';
        ?>
        <?php echo $smof_data['body_font_family_selector']; ?>{font-family:<?php echo $font_body; ?>;}
        <?php
    }
    if ($smof_data['body_font_options'] == 'Custom Font' && $smof_data['custom_body_font_family'] != '' && $smof_data['body_font_family_selector'] != '') {
        $font_body = esc_attr($smof_data['custom_body_font_family']) . ' !important' ;
        ?>
        @font-face {
            font-family: '<?php echo esc_attr($smof_data['custom_body_font_family']);?>';
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_body_font_family']);?>.eot');
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_body_font_family']);?>.eot?#iefix') format('embedded-opentype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_body_font_family']);?>.woff') format('woff'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_body_font_family']);?>.ttf') format('truetype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_body_font_family']);?>.svg#<?php echo esc_attr($smof_data['custom_body_font_family']);?>') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        <?php echo $smof_data['body_font_family_selector']; ?>{font-family:<?php echo $font_body; ?>;}
        <?php
    }
    ?>
    <?php endif; ?>
    /* header font */
    <?php if ($smof_data['header_font_options'] != ''): ?>
        <?php
            if ($smof_data['header_font_options'] == 'Google Font' && $smof_data['google_header_font_family'] != '' && $smof_data['header_font_family_selector'] != '') {
                $font_header = '' . esc_attr($smof_data['google_header_font_family']) . ' !important';
                ?>
        <?php echo $smof_data['header_font_family_selector']; ?>{font-family:<?php echo $font_header; ?>;}
        <?php
    }
    if ($smof_data['header_font_options'] == 'Standard Font' && $smof_data['standard_header_font_family'] != '' && $smof_data['header_font_family_selector'] != '') {
        $font_header = '' . esc_attr($smof_data['standard_header_font_family']) . ' !important';
        ?>
        <?php echo $smof_data['header_font_family_selector']; ?>{font-family:<?php echo $font_header; ?>;}
        <?php
    }
    if ($smof_data['header_font_options'] == 'Custom Font' && $smof_data['custom_header_font_family'] != '' && $smof_data['header_font_family_selector'] != '') {
        $font_header = esc_attr($smof_data['custom_header_font_family']) . ' !important';
        ?>
        @font-face {
            font-family: '<?php echo $smof_data['custom_header_font_family']?>';
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_header_font_family']);?>.eot');
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_header_font_family']);?>.eot?#iefix') format('embedded-opentype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_header_font_family']);?>.woff') format('woff'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_header_font_family']);?>.ttf') format('truetype'),
            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data['custom_header_font_family']);?>.svg#<?php echo esc_attr($smof_data['custom_header_font_family']);?>') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        <?php echo $smof_data['header_font_family_selector']; ?>{font-family:<?php echo $font_header; ?>;}
        <?php
    }
    ?>
    <?php endif; ?>
    /* other font */
    <?php for ($i = 0 ; $i <= 10 ; $i++): ?>
    	/* other font <?php echo $i; ?> */
	    <?php if ($smof_data["other_font_options_$i"] != ''): ?>
	        <?php
	            if ($smof_data["other_font_options_$i"] == 'Google Font' && $smof_data["google_other_font_family_$i"] != '' && $smof_data["other_font_family_selector_$i"] != '') {
	                $font_header = '' . esc_attr($smof_data["google_other_font_family_$i"]) . ' !important';
	                ?>
	        <?php echo $smof_data["other_font_family_selector_$i"]; ?>{font-family:<?php echo $font_header; ?>;}
	        <?php
	    }
	    if ($smof_data["other_font_options_$i"] == 'Standard Font' && $smof_data["standard_other_font_family_$i"] != '' && $smof_data["other_font_family_selector_$i"] != '') {
	        $font_header = '' . esc_attr($smof_data["standard_other_font_family_$i"]) . ' !important';
	        ?>
	        <?php echo $smof_data["other_font_family_selector_$i"]; ?>{font-family:<?php echo $font_header; ?>;}
	        <?php
	    }
	    if ($smof_data["other_font_options_$i"] == 'Custom Font' && $smof_data["custom_other_font_family_$i"] != '' && $smof_data["other_font_family_selector_$i"] != '') {
	        $font_header = esc_attr($smof_data["custom_other_font_family_$i"]). ' !important';
	        ?>
	        @font-face {
	            font-family: '<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>';
	            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>.eot');
	            src: url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>.eot?#iefix') format('embedded-opentype'),
	            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>.woff') format('woff'),
	            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>.ttf') format('truetype'),
	            url('<?php echo get_template_directory_uri(); ?>/fonts/<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>.svg#<?php echo esc_attr($smof_data["custom_other_font_family_$i"]);?>') format('svg');
	            font-weight: normal;
	            font-style: normal;
	        }
	        <?php echo $smof_data["other_font_family_selector_$i"]; ?>{font-family:<?php echo $font_header; ?>;}
	        <?php
	    }
	    ?>
	    <?php endif; ?>
    <?php endfor; ?>

    /* sticky header left */
    .sticky-header-left{
        background: <?php echo esc_attr($smof_data['header_sticky_bg_color']); ?>;
    }
    .sticky-header-left:before, .sticky-header-left:after{
        border-bottom: 122px solid <?php echo esc_attr($smof_data['header_sticky_bg_color']); ?>;
    }
    .sticky-header-left .sticky-menu ul ul{
        background: <?php echo esc_attr($smof_data['sticky_menu_sub_bg_color']); ?>;
    }

    /* mobile menu */
    .cshero-mmenu.navbar-collapse{
        background: <?php echo esc_attr($smof_data['mobile_menu_bg_color']); ?>;
    }
    .cshero-mmenu ul li a{
        color: <?php echo esc_attr($smof_data['mobile_menu_first_color']); ?>;
    }
    .cshero-mmenu ul li a:hover, .cshero-mmenu ul li.current-menu-item a{
        color: <?php echo esc_attr($smof_data['mobile_menu_hover_first_color']); ?>;
    }
    .cshero-mmenu ul ul li a{
        color: <?php echo esc_attr($smof_data['mobile_menu_sub_color']); ?>;
    }
    .cshero-mmenu ul ul li a:hover, .cshero-mmenu ul ul li.current-menu-item a{
        color: <?php echo esc_attr($smof_data['mobile_menu_sub_hover_color']); ?>;
    }
    <?php if($smof_data['mobile_menu_sub_sep_color']):?>
    .cshero-mmenu ul li{
        border-bottom: 1px solid <?php echo esc_attr($smof_data['mobile_menu_sub_sep_color']); ?>;
    }
    .cshero-mmenu ul.sub-menu li:first-child{
        border-top: 1px solid <?php echo esc_attr($smof_data['mobile_menu_sub_sep_color']); ?>;
    }
    <?php endif; ?>

    h1{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h1']); ?>;
    }
    h2{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h2']); ?>;
    }
    h3{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h3']); ?>;
    }
    h4{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h4']); ?>;
    }
    h5{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h5']); ?>;
    }
    h6{
        font-size: <?php echo esc_attr($smof_data['heading_font_size_h6']); ?>;
    }
</style>
