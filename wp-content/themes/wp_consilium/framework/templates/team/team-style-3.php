<?php
    global $team_options;
    extract($team_options);
?>
<?php if ($title != "" || $description != "") { ?>
    <div class="cs-header">
        <?php if ($title != "") { ?>
        <h3 class="cs-title"><span class="line"><?php echo $title; ?></span></h3>
        <?php } ?>
        <?php if ($description != "") { ?>
            <p class="cs-decs"><?php echo $description; ?></p>
        <?php } ?>
    </div>
<?php } ?>               
<div class="cs-content <?php echo $date;?>">
    <div class="cs-carousel-list">
        <div id="cs_carousel_team_<?php echo esc_attr($date); ?>" data-moveslides="1" data-auto="<?php echo esc_attr($auto_scroll); ?>" data-prevselector="#cs_team<?php echo esc_attr($date); ?> .prev" data-nextselector="#cs_team<?php echo $date; ?> .next" data-touchenabled="1" data-controls="true" data-pager="false" data-pause="4000" data-auto="false" data-infiniteloop="true" data-adaptiveheight="true" data-speed="<?php echo esc_attr($speed); ?>" data-autohover="true" data-slidemargin="<?php echo esc_attr($margin_item); ?>" data-maxslides="6" data-slidewidth="<?php echo esc_attr($width_item);?>" data-slideselector="" data-easing="swing" data-usecss="" data-resize="1" class="slider jm-bxslider">
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
               <article id="post-<?php the_ID(); ?>" <?php  post_class(); ?>>
                   <div class="cs-carousel-container">
                        <?php
                        if (has_post_thumbnail()){
                            $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false);;
                            if($crop_image == true || $crop_image == 1){
                                $image_resize = matthewruddy_image_resize( $attachment_image[0], $width_image, $height_image, true, false );
                                echo '<div class="cs-team-featured-img"><img class="attachment-featuredImageCropped" src="'. esc_attr($image_resize['url']) .'" /><span class="circle-border"></span></div>';
                            }else{
                               echo '<div class="cs-team-featured-img"><img src="'. esc_attr($attachment_image[0]) .'" /><span class="circle-border"></span></div>';
                            }
                        }
                        ?>
                        <?php if ($show_title == true || $show_title == 1 || $show_category == true || $show_category == 1) { ?>
                                <div class="cs-team-content">
                                    <?php if ($show_title == true || $show_title == 1) { ?>
                                        <<?php echo $heading_size;?> class="cs-team-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel=""><?php the_title() ?></a></<?php echo $heading_size;?>>
                                    <?php } ?>
                                    <?php if ($show_category == true || $show_category == 1) { ?>
                                        <div class="cs-team-category"><?php echo strip_tags (get_the_term_list($post->ID, 'team_category', '', ', ', '')); ?></div>
                                    <?php } ?>
                                    <?php
                                        $custom = get_post_custom($post->ID);
                                        $team_position = isset($custom['team_position'][0]) ? $custom['team_position'][0] : '';
                                    ?>
                                    <?php if ($team_position) { ?>
                                        <div class="cs-team-position"><?php echo strip_tags ($team_position); ?></div>
                                    <?php } ?>
                                    <?php if ($show_description == true || $show_description == 1) { ?>
                                        <div class="cs-team-description"><?php echo substr(get_the_content($read_more), 0, $excerpt_length); ?></div>
                                    <?php } ?>
                                    <?php if ($show_socials == true || $show_socials == 1) {
                                        $team_email = isset($custom['team_email'][0]) ? $custom['team_email'][0] : '';
                                        $team_facebook = isset($custom['team_facebook'][0]) ? $custom['team_facebook'][0] : '';
                                        $team_twitter = isset($custom['team_twitter'][0]) ? $custom['team_twitter'][0] : '';
                                        $team_google_plus = isset($custom['team_google_plus'][0]) ? $custom['team_google_plus'][0] : '';
                                        $team_dribbble = isset($custom['team_dribbble'][0]) ? $custom['team_dribbble'][0] : '';
                                        $team_youtube = isset($custom['team_youtube'][0]) ? $custom['team_youtube'][0] : '';
                                        $team_rss = isset($custom['team_rss'][0]) ? $custom['team_rss'][0] : '';
                                        $team_flickr = isset($custom['team_flickr'][0]) ? $custom['team_flickr'][0] : '';
                                        $team_linkedin = isset($custom['team_linkedin'][0]) ? $custom['team_linkedin'][0] : '';
                                        $team_vimeo = isset($custom['team_vimeo'][0]) ? $custom['team_vimeo'][0] : '';
                                        $team_tumblr = isset($custom['team_tumblr'][0]) ? $custom['team_tumblr'][0] : '';
                                        $team_pinterest = isset($custom['team_pinterest'][0]) ? $custom['team_pinterest'][0] : '';
                                        $team_sky = isset($custom['team_sky'][0]) ? $custom['team_sky'][0] : '';
                                        $team_github = isset($custom['team_github'][0]) ? $custom['team_github'][0] : '';
                                        $team_instagram = isset($custom['team_instagram'][0]) ? $custom['team_instagram'][0] : '';

                                        $links = array();
                                        $links[] = ($team_email!='')?'<a class="team-email" href="mailto:'.$team_email.'" target="_blank" title="Email"><i class="fa fa-envelope-o"></i></a>':'';
                                        $links[] = ($team_facebook!='')?'<a class="team-facebook" href="'.$team_facebook.'" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>':'';
                                        $links[] = ($team_twitter!='')?'<a class="team-twitter" href="'.$team_twitter.'" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>':'';
                                        $links[] = ($team_google_plus!='')?'<a class="team-google_plus" href="'.$team_google_plus.'" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>':'';
                                        $links[] = ($team_dribbble!='')?'<a class="team-dribbble" href="'.$team_dribbble.'" target="_blank" title="Dribble"><i class="fa fa-dribbble"></i></a>':'';
                                        $links[] = ($team_email!='')?'<a class="team-youtube" href="'.$team_youtube.'" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>':'';
                                        $links[] = ($team_rss!='')?'<a class="team-rss" href="'.$team_rss.'" target="_blank" title="Rss"><i class="fa fa-rss"></i></a>':'';
                                        $links[] = ($team_flickr!='')?'<a class="team-flickr" href="'.$team_flickr.'" target="_blank" title="Flickr"><i class="fa fa-flickr"></i></a>':'';
                                        $links[] = ($team_linkedin!='')?'<a class="team-linkedin" href="'.$team_linkedin.'" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>':'';
                                        $links[] = ($team_vimeo!='')?'<a class="team-vimeo" href="'.$team_vimeo.'" target="_blank" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>':'';
                                        $links[] = ($team_tumblr!='')?'<a class="team-tumblr" href="'.$team_tumblr.'" target="_blank" title="Tumblr"><i class="fa fa-tumblr"></i></a>':'';
                                        $links[] = ($team_pinterest!='')?'<a class="team-pinterest" href="'.$team_pinterest.'" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>':'';
                                        $links[] = ($team_sky!='')?'<a class="team-skype" href="'.$team_sky.'" target="_blank" title="Skype"><i class="fa fa-skype"></i></a>':'';
                                        $links[] = ($team_github!='')?'<a class="team-github" href="'.$team_github.'" target="_blank" title="Github"><i class="fa fa-github"></i></a>':'';
                                        $links[] = ($team_instagram!='')?'<a class="team-instagram" href="'.$team_instagram.'" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>':'';

                                        if (!empty($links)) {
                                            $social_title = get_post_meta( $post->ID, '_cshero_team_social', true );
                                            if(!empty($social_title)){
                                                echo '<h3 class="cs-content-header">'.$social_title.'</h3>';
                                            }
                                            echo '<div class="cs-team-social">' . implode('', $links) . '</div>';
                                        }

                                     } ?>

                                </div>
                            <?php } ?>
                    </div>
               </article>
            </div>
            <?php 
            if($rows == 1){
                echo '</div>';
            }else{
                if(($counter % $rows == 0)||($counter==$wp_query->post_count)){
                    echo '</div>';
                }
            }
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
    <?php if($show_nav == true || $show_nav == 1){ ?>
    <div class="cs-nav cs-nav">
        <ul>
            <li class="prev"></li>
            <li class="next"></li>
        </ul>
    </div>
    <?php } ?>
</div>