<?php
    $same_height=($same_height)?"true":"false";
    $onload = "if(".$same_height."){ sameHeight();}";
?>
<div id="cs_carousel_post<?php echo esc_attr($date); ?>" class="cs-carousel-event cs-carousel-event-style1 <?php echo esc_attr($cl_show).' '.esc_attr($el_class); ?> <?php echo $same_height?'sameheight':'';?>">
        <div class="cs-header">
            <?php if ($title != "" || $description != "") { ?>
                <?php if ($title != "") { ?>
                    <<?php echo $heading_size; ?> class="cs-title" <?php echo $_title_color; ?>><span class="line"><?php echo esc_attr($title); ?></span></<?php echo $heading_size; ?>>
                <?php } ?>
                <?php if ($subtitle !=""){ ?>
                    <<?php echo $subtitle_heading_size; ?> class="cs-subtitle"><?php echo esc_attr($subtitle); ?></<?php echo $subtitle_heading_size; ?>>
                <?php }?>
                <?php if ($description != "") { ?>
                    <p class="cs-desc"><?php echo esc_attr($description); ?></p>
                <?php } ?>
            <?php } ?>
            <?php if($show_nav == true || $show_nav == 1){ ?>
                <div class="cs-nav">
                    <ul>
                        <li class="prev"></li>
                        <li class="next"></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
        <div class="cs-content">
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
                                    <div class="cs-carousel-header">
                                       <?php if ($show_date == true || $show_date == '1') { ?>
                                            <div class="cs-event-date">
                                            	<?php $event_start = strtotime($post->event_start_date); ?>
                                                <span class="cs-day"><?php echo date('d',$event_start); ?></span>
                                                <span class="cs-month"><?php echo date('M',$event_start); ?></span>
                                            </div>
                                        <?php } ?>
                                        <div class="cs-event-meta">
                                            <?php if ($show_title == true || $show_title == '1') { ?>
                                                <div class="cs-event-title">
                                                    <h3 class="cs-carousel-title"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" rel=""><?php the_title(); ?></a></h3>
                                                </div>
                                            <?php } ?>
                                            <?php if($post->event_all_day == 1): ?>
                                                <div class="cs-event-time">
                                                    <span><i class="ion-ios7-clock-outline"></i><?php _e('Full Time', THEMENAME); ?></span>
                                                </div>
                                            <?php else :?>
                                                <div class="cs-event-time">
                                                    <span><i class="ion-ios7-clock-outline"></i><?php _e('Part-Time', THEMENAME); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="cs-carousel-body">
                                        <div class="cs-carousel-inner">
                                            <?php if ($show_description== true || $show_description == 1 || $read_more != '') { ?>
                                            <div class="cs-carousel-post-description">
                                                <?php
                                                if($show_description== true || $show_description == 1){
                                                    if ($excerpt_length != -1) {
                                                ?>
                                                    <p><?php echo cshero_content_max_charlength(strip_tags($post->post_content), $excerpt_length); ?></p>
                                                <?php } else { ?>
                                                    <p><?php echo strip_tags($post->post_content) ; ?></p>
                                                <?php }
                                                }
                                                ?>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if($read_more): ?>
                                        <div class="cs-carousel-footer">
                                            <div class="cs-carousel-post-read-more">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-event"><?php echo esc_attr($read_more); ?><i class="fa fa-arrow-circle-o-right"></i>
</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
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
        </div>
    </div>