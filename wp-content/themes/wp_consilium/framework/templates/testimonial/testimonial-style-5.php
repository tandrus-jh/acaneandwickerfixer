<?php
    global $testimonial_options;
    extract($testimonial_options);
?>
<?php if ($title != "" || $description != "") { ?>
    <div class="cs-header cs-testimonial-header title-<?php echo $layout;?>">
        <?php if ($title != "") { ?>
            <h3 class="cs-title"><?php echo $title; ?></h3>
        <?php } ?>
        <?php if ($description != "") { ?>
            <p class="cs-testimonial-desc"><?php echo $description; ?></p>
        <?php } ?>
    </div>
<?php } ?>
<div class="cs-testimonial-wrapper <?php echo $layout;?>">            
    <div class="cs-carousel-list cs-testimonial-content-main">
        <div id="cs_testimonial_<?php echo $date; ?>" data-moveslides="1" data-auto="<?php echo esc_attr($auto_scroll); ?>" data-prevselector="#cs_testimonial<?php echo esc_attr($date); ?> .prev" data-nextselector="#cs_testimonial<?php echo $date; ?> .next" data-touchenabled="1" data-controls="true" data-pager="false" data-pause="4000" data-infiniteloop="true" data-adaptiveheight="true" data-speed="<?php echo esc_attr($speed); ?>" data-autohover="true" data-slidemargin="<?php echo esc_attr($margin_item); ?>" data-maxslides="6" data-slidewidth="<?php echo esc_attr($width_item);?>" data-slideselector="" data-easing="swing" data-usecss="" data-resize="1" class="slider jm-bxslider">
            <?php
            $counter =0;
            while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <div id="post-<?php the_ID() ?>">
                    <?php if ($show_title == true || $show_title == 1 || $show_category == true || $show_category == 1) { ?>
                        <div class="cs-testimonial-content">
                            <?php if ($show_title == true || $show_title == 1) { ?>
                                <h3 class="cs-testimonial-title"><?php the_title() ?></h3>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if ($show_title == true || $show_title == 1 || $show_category == true || $show_category == 1) { ?>
                        <div class="cs-testimonial-description style-5">
                            <?php if ($show_description == true || $show_description == 1) { ?>
                                <div class="cs-testimonial-text"><?php echo substr(get_the_content($read_more), 0, $excerpt_length); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php
                    if (has_post_thumbnail()){
                        $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                        if($crop_image == true || $crop_image == 1){                                            
                            $image_resize = matthewruddy_image_resize( $attachment_image[0], $width_image, $height_image, true, false );
                            echo '<div class="cs-testimonial-featured-img style-5"><img class="attachment-featuredImageCropped" src="'. esc_attr($image_resize['url']) .'" alt="" /><span class="circle-border"></span></div>';
                        }else{
                           echo '<div class="cs-testimonial-featured-img style-5"><img src="'. esc_attr($attachment_image[0]) .'" alt="" /><span class="circle-border"></span></div>';
                        } 
                    }
                    ?>
                </div>
                <?php
            ?>                            
            <?php 
            endwhile;
            wp_reset_query();
            ?> 
        </div>
        <?php if($show_nav == true || $show_nav == 1){ ?>
            <div class="cs-nav">
                <ul>
                    <li class="prev"></li>
                    <li class="next"></li>
                </ul>
            </div>
            <?php } ?>
    </div>
</div>