<?php
    $same_height=($same_height)?"true":"false";
    $onload = "if(".$same_height."){ sameHeight();}";
?>
<div id="cs_carousel_post<?php echo esc_attr($date); ?>" class="cs-carousel cs-carousel-post-shop cs-carousel-style-2-shop <?php echo esc_attr($cl_show).' '.esc_attr($el_class); ?> <?php echo $same_height?'sameheight':'';?>">
    <?php if ($title != "" || $description != "") { ?>
        <div class="cs-header">
            <?php if ($title != "") { ?>
                <<?php echo $heading_size; ?> class="cs-title" <?php echo $_title_color; ?>><?php echo esc_attr($title); ?></<?php echo $heading_size; ?>>
            <?php } ?>
            <?php if ($subtitle !=""){ ?>
                <<?php echo $subtitle_heading_size; ?> class="cs-subtitle fontlight"><?php echo esc_attr($subtitle); ?></<?php echo $subtitle_heading_size; ?>>
            <?php }?>
            <?php if ($description != "") { ?>
                <p class="cs-desc"><?php echo esc_attr($description); ?></p>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="cs-content center">
        <div class="cs-carousel-list">
            <div id="cs_carousel_post_<?php echo esc_attr($date); ?>" data-moveslides="1" data-auto="<?php echo esc_attr($auto_scroll); ?>" data-prevselector="#cs_carousel_post<?php echo esc_attr($date); ?> .prev" data-nextselector="#cs_carousel_post<?php echo esc_attr($date); ?> .next" data-onsliderload="<?php echo esc_attr($onload);?>" data-touchenabled="1" data-controls="true" data-pager="false" data-pause="4000" data-infiniteloop="true" data-adaptiveheight="true" data-speed="500" data-autohover="true" data-slidemargin="<?php echo esc_attr($margin_item); ?>" data-maxslides="4" data-minslides="1" data-slidewidth="<?php echo esc_attr($width_item);?>" data-slideselector="" data-easing="swing" data-usecss="" data-resize="1" class="slider jm-bxslider">
                <?php
                $counter =0;
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    $counter++;
                    if($rows == 1){
                        echo '<div class="cs-carousel-item-wrap">';
                    }else{
                        if($counter % $rows == 1){
                            echo '<div class="cs-carousel-item-wrap">';
                        }
                    }
                    ?>
                    <div class="cs-carousel-item" <?php if(!$counter % $rows == 0) echo 'style="margin-bottom:'.esc_attr($margin_item).'px;"'; ?>>
                        <article id="post-<?php echo the_ID() ?>" <?php  post_class(); ?>>
                            <div class="cs-carousel-container">

                                <figure class="effect-layla-shop">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        if($crop_image == true || $crop_image == 1){
                                            $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);
                                            $image_resize = matthewruddy_image_resize( $attachment_image[0], $width_image, $height_image, true, false );
                                            echo '<img alt="" class="attachment-featuredImageCropped" src="'. esc_attr($image_resize['url']) .'" />';
                                        }else{
                                            echo get_the_post_thumbnail($post->ID);
                                        }
                                    }
                                    ?>
                                    <figcaption>
                                        <?php if($read_more): ?>
                                            <div class="cs-carousel-read-more">
                                                <div class="read-more-inner">
                                                    <div class="read-more-inner-2">
                                                        <div class="read-more-inner-3">
                                                            <a href="<?php the_permalink(); ?>"><?php echo esc_attr($read_more); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </figcaption>
                                </figure>

                                <div class="cs-carousel-body">
                                    <div class="cs-carousel-inner">
                                        <div class="cs-carousel-post-meta">
                                            <?php if ($show_title == "true" || $show_title == '1') { ?>
                                                <div class="cs-carousel-post-title">
                                                    <h3 class="entry-title"><?php the_title(); ?></h3>
                                                </div>
                                            <?php } ?>
                                            <div class="cs-carousel-post-intro-text">
                                                <?php echo esc_attr(get_post_meta($post->ID, 'cs_blog_intro_text', true)); ?>
                                            </div>
                                            <?php if ($show_description== true || $show_description == 1 || $read_more != '') { ?>
                                                <div class="cs-carousel-post-description">
                                                    <?php
                                                    if($show_description== true || $show_description == 1){
                                                        if ($excerpt_length != -1) {
                                                            ?>
                                                            <p><?php echo cshero_content_max_charlength(get_the_excerpt(), $excerpt_length); ?></p>
                                                        <?php } else { ?>
                                                            <p><?php the_content(); ?></p>
                                                        <?php }
                                                    }
                                                    ?>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </article>
                    </div>
                    <?php
                    if($rows == 1){
                        echo '</div>';
                    }else{
                        if($counter % $rows == 0){
                            echo '</div>';
                        }
                    }
                endwhile;
                wp_reset_query();
                ?>
            </div>
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