<?php
add_shortcode('cs-interactive-banner', 'cs_interactive_banner_render');
function cs_interactive_banner_render($atts, $content = null) {
    extract(shortcode_atts(array(
    'icon_title' => '',
    'style' => 'interactive-style-1',
    'interactive_animate_type' => 'none',
    'image' => '',
    'crop_image' => false,
    'width_image' => '',
    'height_image' => '',
    'title' => '',
    'heading_size' => 'h4',
    'link_show_more' => '',
    'show_more' => '',
    'custom_class' => '',
    'short_description' => '',
    'overlay' => '0.8',
    'overlay_hover' => '0.8',
    'full_description' => ''
            ), $atts));

    $crop_image=($crop_image=='false')?false:$crop_image;
    if($interactive_animate_type != 'none') {
        $animate_class = array();
        $animate_class[] = $interactive_animate_type;
        $animate_class[] = 'animate-element';
        $animate_class = esc_attr( implode( ' ', $animate_class ) );
    }else {
        $animate_class = '';
    }

    wp_register_script('animate-elements', get_template_directory_uri() . '/js/animate-elements.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('animate-elements');

    ob_start();

    switch ($style) {
        case 'interactive-style-4': 
        case 'interactive-style-5': 
        case 'interactive-style-6': ?>
            <?php
                $image_url = array();
                if (!empty($image)) {
                    $image_url = wp_get_attachment_image_src($image, 'full');
                }
                if($image_url[0]=='' && $image!=''){
                    $image_url[0] = $image;
                }
            ?>
            <div class="column_container">
               <div class="cs-interactive-banner wrapper <?php echo esc_attr($style); ?>">
                    <?php if (count($image_url) > 0) { ?>
                        <div class="cs-interactive-image">
                            <?php
                            if($crop_image == true || $crop_image == 1){
                                $image_resize = matthewruddy_image_resize( $image_url[0], $width_image, $height_image, true, false );
                                echo '<img alt="" src="'.$image_resize['url'].'" class="attach_img_cropped" />';
                            }
                            else{
                                ?><img alt=""  src="<?php echo esc_attr($image_url[0]); ?>"/><?php
                            }
                            ?>
                        </div>
                    <?php } ?>
                    <?php if((!empty($icon_title))||($title!='')||($short_description!='')):?>
                        <div class="cs-interactive-content-wrap" style="background: none repeat scroll 0 0 rgba(0, 0, 0, <?php echo $overlay;?>);">
                            <div class="cs-interactive-content-inner">
                                <?php if(!empty($icon_title)) { ?>
                                <div class="cs-interactive-icon">
                                    <i class="<?php echo esc_attr($icon_title . ' ' . $animate_class); ?>"></i>
                                </div>
                                <?php } ?>
                                <?php if($title!=''):?>
                                    <?php echo '<'.$heading_size.'  class="shortcode-title"><span>'.$title.'</span></'.$heading_size.'>';?>
                                <?php endif;?>
                                <?php if($short_description!=''):?>
                                    <div class="cs-interactive-short-description">
                                        <p><?php echo $short_description; ?></p>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if((!empty($icon_title))||($title!='')||($full_description!='')):?>
                        <div class="cs-interactive-content-hover-wrap" style="background: none repeat scroll 0 0 rgba(0, 0, 0, <?php echo $overlay_hover;?>);">   
                            <?php if($title!=''):?>
                                <?php echo '<'.$heading_size.'  class="shortcode-title"><span>'.$title.'</span></'.$heading_size.'>';?>
                            <?php endif;?>
                            <?php if(!empty($icon_title)) { ?>
                            <div class="cs-interactive-icon">
                                <i class="<?php echo esc_attr($icon_title . ' ' . $animate_class); ?>"></i>
                            </div>
                            <?php } ?>
                            <?php if($full_description!=''):?>
                                <div class="cs-interactive-short-description">
                                    <p><?php echo $full_description; ?></p>
                                </div>
                            <?php endif;?>
                            <?php if($show_more!=''):?>
                                <div class="cs-interactive-readmore">
                                    <a class="cs-interactive-readmore" href="<?php echo $link_show_more;?>"><?php echo $show_more;?></a>
                                </div>
                            <?php endif;?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <?php
            break;
        default: ?>
            <?php
                $image_url = array();
                if (!empty($image)) {
                    $image_url = wp_get_attachment_image_src($image, 'full');
                }
                if($image_url[0]=='' && $image!=''){
                    $image_url[0] = $image;
                }
            ?>
            <div class="column_container">
               <div class="cs-interactive-banner wrapper <?php echo esc_attr($style); ?>">
                    <?php if (count($image_url) > 0) { ?>
                        <div class="cs-interactive-image">
                            <?php
                            if($crop_image == true || $crop_image == 1){
                                $image_resize = matthewruddy_image_resize( $image_url[0], $width_image, $height_image, true, false );
                                echo '<img src="'.$image_resize['url'].'" class="attach_img_cropped" alt=""  />';
                            }
                            else{
                                ?><img src="<?php echo esc_attr($image_url[0]); ?>" alt="" /><?php
                            }
                            ?>
                        </div>
                    <?php } ?>
                    <?php if((!empty($icon_title))||($title!='')||($short_description!='')):?>
                        <div class="cs-interactive-content-wrap" style="background: none repeat scroll 0 0 rgba(0, 0, 0, <?php echo $overlay;?>);">
                            <div class="cs-interactive-content-inner">
                                <?php if(!empty($icon_title)) { ?>
                                <div class="cs-interactive-icon">
                                    <i class="<?php echo esc_attr($icon_title . ' ' . $animate_class); ?>"></i>
                                </div>
                                <?php } ?>
                                <?php if(($title!='')||($short_description!='')): ?>
                                <div class="cs-interactive-content">
                                    <?php if($title!=''):?>
                                        <?php echo '<'.$heading_size.'  class="shortcode-title"><span>'.$title.'</span></'.$heading_size.'>';?>
                                    <?php endif;?>
                                    <?php if($short_description!=''):?>
                                        <div class="cs-interactive-short-description">
                                            <p><?php echo $short_description; ?></p>
                                        </div>
                                    <?php endif;?>
                                
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if((!empty($icon_title))||($title!='')||($full_description!='')):?>
                        <div class="cs-interactive-content-hover-wrap" style="background: none repeat scroll 0 0 rgba(0, 0, 0, <?php echo $overlay_hover;?>);">                                                 
                            <div class="cs-interactive-content">
                                <?php if($title!=''):?>
                                    <?php echo '<'.$heading_size.'  class="shortcode-title"><span>'.$title.'</span></'.$heading_size.'>';?>
                                <?php endif;?>
                            </div>
                            <?php if(!empty($icon_title)) { ?>
                            <div class="cs-interactive-icon">
                                <i class="<?php echo esc_attr($icon_title . ' ' . $animate_class); ?>"></i>
                            </div>
                            <?php } ?>  
                            <?php if($full_description!=''):?>
                                <div class="cs-interactive-short-description">
                                    <p><?php echo $full_description; ?></p>
                                </div>
                            <?php endif;?>
                            <?php if($show_more!=''):?>
                                <div class="cs-interactive-readmore">
                                    <a class="cs-interactive-readmore btn btn-default btn-link " href="<?php echo $link_show_more;?>"><?php echo $show_more;?></a>
                                </div>
                            <?php endif;?>
                            
                            
                        </div>
                    <?php endif;?>
                </div>
            </div>
    <?php
    }
    return ob_get_clean();
}