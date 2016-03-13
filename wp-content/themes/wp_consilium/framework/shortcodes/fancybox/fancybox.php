<?php
add_shortcode('cs-fancy-box', 'cs_fancy_box_render');
function cs_fancy_box_render($atts, $content = null) {
    extract(shortcode_atts(array(
    'icon_title' => '',
    'icon_size' =>'',
    'icon_color'=>'',
    'icon_width'=>'',
    'icon_heigth'=>'',
    'icon_style' => 'fancy-box-style-1',
    'icon_animate_type' => 'none',
    'border_color'=>'',
    'border_width'=>'',
    'border_style'=>'',
    'show_icon_link' => false,
    'uppercase' => false,
    'image' => '',
    'title' => '',
    'title_color'=>'',
    'title_margin'=>'',
    'heading_size' => 'h4',
    'link_show_more' => '',
    'content_color'=>'',
    'read_more' => '',
    'read_btn' =>'',
    'read_more_margin'=>'',
    'custom_class' => ''
            ), $atts));
    if(!$uppercase){
        $custom_class.=' title-upper';
    }
    if(class_exists('WPBakeryVisualComposerAbstract')){
        $content = wpb_js_remove_wpautop($content);
    }

    if ($link_show_more == '') {
        $link_show_more = '#';
    }

    if($icon_animate_type != 'none') {
        $animate_class = array();
        $animate_class[] = $icon_animate_type;
        $animate_class[] = 'animate-element';
        $animate_class = esc_attr( implode( ' ', $animate_class ) );
    }else {
        $animate_class = '';
    }

    wp_register_script('animate-elements', get_template_directory_uri() . '/js/animate-elements.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('animate-elements');

    $style = '';
    $style .='style="';
        if($icon_size){
            $style .= 'font-size:'.esc_attr($icon_size).';';
        }
        if($icon_color){
            $style .= 'color:'.esc_attr($icon_color).';';
        }
        if($icon_width){
            $style .= 'width:'.esc_attr($icon_width).';';
        }
        if($icon_heigth){
            $style .= 'height:'.esc_attr($icon_heigth).';';
            $style .= 'line-height:'.esc_attr($icon_heigth).';';
        }
        if($border_style){
            $style .= 'border-style:'.esc_attr($border_style).';';
        }
        if($border_width){
            $style .= 'border-width:'.esc_attr($border_width).';';
        }
        if($border_color){
            $style .= 'border-color:'.esc_attr($border_color).';';
        }
    $style .='"';

    ob_start();

    switch ($icon_style) {
        case 'fancy-box-style-4': ?>
            <?php
                $image_url = array();
                if (!empty($image)) {
                    $image_url = wp_get_attachment_image_src($image, 'medium');
                }
            ?>
            <div class="column_container">
               <div class="cs-fancy-box wrapper <?php echo esc_attr($custom_class); ?> <?php echo esc_attr($icon_style); ?> table">
                    <div class="cs-fancy-box-icon table-cell">
                        <?php if(!empty($icon_title)) { ?>
                            <span>
                                <?php if($show_icon_link){?>
                                    <a title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                <?php } ?>
                                <i class="fa <?php echo esc_attr($icon_title . ' ' . $animate_class); ?>" <?php echo $style; ?>></i>
                                <?php if($show_icon_link){?>
                                    </a>
                                <?php } ?>
                            </span>
                       <?php } ?>
                    </div>
                    <div class="cs-fancy-box-content table-cell">
                        <<?php echo $heading_size; ?> class="cs-title-main" style="color:<?php echo esc_attr($title_color); ?>;margin: <?php echo esc_attr($title_margin); ?>;"><?php echo $title; ?></<?php echo $heading_size; ?>>
                        <div style="color:<?php echo esc_attr($content_color); ?>;">
                            <?php echo $content; ?>
                        </div>
                        <?php
                        if ($read_more != '') { ?>
                            <div class="cs-read-more" style="margin: <?php echo esc_attr($read_more_margin); ?>;">
                                <a class="read-more-link<?php if($read_btn){ echo ' btn btn-primary';} ?>" title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                    <?php echo $read_more; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            break;
        case 'fancy-box-style-13':
            $image_url = array();
            if (!empty($image)) {
                $image_url = wp_get_attachment_image_src($image, 'medium');
            }
            if($image_url[0]=='' && $image!=''){
                $image_url[0] = $image;
            }
            ?>
            <div class="column_container">
                <div class="cs-fancy-box wrapper <?php echo esc_attr($custom_class); ?> <?php echo esc_attr($icon_style); ?>">
                    <?php if (count($image_url) > 0) { ?>
                        <div class="cs-fancy-box-image">
                            <span class="cs-fancy-box-icon">
                                <?php if($show_icon_link){?>
                                    <a title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                <?php } ?>
                                <i class="fa <?php echo esc_attr($icon_title . ' ' . $animate_class); ?>" <?php echo $style; ?>></i>
                                <?php if($show_icon_link){?>
                                    </a>
                                <?php } ?>
                            </span>
                            <img src="<?php echo esc_attr($image_url[0]); ?>"/>
                        </div>
                    <?php } ?>
                    <div class="cs-fancy-box-title">
                       <<?php echo $heading_size; ?> class="cs-title-main" style="color:<?php echo esc_attr($title_color); ?>;margin: <?php echo esc_attr($title_margin); ?>;"><?php echo $title; ?></<?php echo $heading_size; ?>>
                    </div>
                    <div class="cs-fancy-box-content">
                        <div style="color:<?php echo esc_attr($content_color); ?>;">
                            <?php echo $content; ?>
                        </div>
                        <?php if ($read_more != '') { ?>
                            <div class="cs-read-more" style="margin: <?php echo esc_attr($read_more_margin); ?>;">
                                <a class="read-more-link<?php if($read_btn){ echo ' btn btn-primary';} ?>" title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                    <?php echo $read_more; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
           </div>
            <?php
            break;
            case 'fancy-box-style-7':
            $image_url = array();
            if (!empty($image)) {
                $image_url = wp_get_attachment_image_src($image, 'medium');
            }
            if($image_url[0]=='' && $image!=''){
                $image_url[0] = $image;
            }
            ?>
            <div class="column_container">
                <div class="cs-fancy-box wrapper <?php echo esc_attr($custom_class); ?> <?php echo esc_attr($icon_style); ?>">
                    <?php if (count($image_url) > 0) { ?>
                        <div class="cs-fancy-box-image">
                            <img src="<?php echo esc_attr($image_url[0]); ?>" alt="<?php echo $title; ?>" />
                        </div>
                    <?php } ?>
                    <div class="cs-fancy-box-title">
                       <<?php echo $heading_size; ?> class="cs-title-main" style="color:<?php echo esc_attr($title_color); ?>;margin: <?php echo esc_attr($title_margin); ?>;"><?php echo $title; ?></<?php echo $heading_size; ?>>
                    </div>
                    <div class="cs-fancy-box-content">
                        <div style="color:<?php echo esc_attr($content_color); ?>;">
                            <?php echo $content; ?>
                        </div>
                        <?php if ($read_more != '') { ?>
                            <div class="cs-read-more" style="margin: <?php echo esc_attr($read_more_margin); ?>;">
                                <a class="read-more-link<?php if($read_btn){ echo ' btn btn-primary';} ?>" title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                    <?php echo $read_more; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
           </div>
            <?php
            break;
        default: ?>
            <div class="column_container">
               <div class="cs-fancy-box wrapper <?php echo esc_attr($custom_class); ?> <?php echo esc_attr($icon_style); ?>">
                   <div class="cs-fancy-box-title">
                       <<?php echo $heading_size ?>>
                           <?php if(!empty($icon_title)) { ?>
                                <?php if($show_icon_link){?>
                                    <a title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                <?php } ?>
                                <i class="fa <?php echo esc_attr($icon_title . ' ' . $animate_class); ?>" <?php echo $style; ?>></i>
                                <?php if($show_icon_link){?>
                                    </a>
                                <?php } ?>
                            <?php } ?>
                           <span class="cs-title-main" style="color:<?php echo esc_attr($title_color); ?>;margin: <?php echo esc_attr($title_margin); ?>;"><?php echo $title; ?></span>
                       </<?php echo $heading_size; ?>>
                   </div>
                   <div class="cs-fancy-box-content">
                        <div style="color:<?php echo esc_attr($content_color); ?>;">
                            <?php echo $content; ?>
                        </div>
                        <?php
                        if ($read_more != '') { ?>
                            <div class="cs-read-more" style="margin: <?php echo esc_attr($read_more_margin); ?>;">
                                <a class="read-more-link<?php if($read_btn){ echo ' btn btn-primary';} ?>" title="<?php echo esc_attr($read_more); ?>" href="<?php echo esc_url($link_show_more); ?>">
                                    <?php echo $read_more; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    <?php
    }
    return ob_get_clean();
}