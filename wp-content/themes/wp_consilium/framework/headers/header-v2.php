<?php global $smof_data, $header_setings, $post;
    $c_pageID = null;
    if($post){
        $c_pageID = $post->ID;
    }
    /* object menu */
    $menus = wp_get_nav_menus();
    /* array menu id */
    $menus_id = array();
    if(!empty($menus)){
        foreach ($menus as $menu){
            $menus_id[] = $menu->term_id;
        }
    }
    /* menu location */
    $menu_locations = get_nav_menu_locations();
    $main_navigation = null;
    if(!empty($menu_locations)){
        $main_navigation = $menu_locations['main_navigation'];
    }
?>
<div class="header header-v2">
    <header id="cshero-header" class="<?php if($header_setings->header_fixed == '1'){ echo ' transparentFixed';} ?>" <?php echo $header_setings->styles; ?>>
        <div class="header-left clearfix">
            <div class="header-left-inner clearfix">
                <div class="logo clearfix">
                    <a href="<?php echo esc_url(home_url()); ?>" style="margin:<?php echo esc_attr($smof_data['margin_logo']); ?>;">
                        <img src="<?php echo esc_url($smof_data['logo']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>"
                             style="width: <?php echo esc_attr($smof_data["logo_width"]); ?>" class="normal-logo logo-v2"/>
                    </a>
                </div>

                <?php if(getCSSite()=='-shop'): ?>
                    <div class="header-cart-search">
                        <?php	if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Content Widget 1")): endif;?>
                    </div>
                <?php endif; ?>

				<div id="menu" class="main-menu clearfix cs_menu_position_<?php echo $smof_data["menu_position"]; ?>">
					<div class="main-menu-content main-menu-left cshero-menu-left cshero-mobile clearfix">
				    <?php
                        $custom_main_navigation = get_post_meta($c_pageID, 'cs_main_navigation', true);
                        if (in_array($main_navigation, $menus_id) || in_array($custom_main_navigation, $menus_id)) {
                            echo '<ul class="cshero-dropdown main-menu">';
                            wp_nav_menu(array('theme_location' => 'main_navigation','menu'=>$custom_main_navigation, 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s', 'walker'=>new HeroMenuWalker()));
                            echo '</ul>';
                        } elseif (empty($menus_id)) {
                            echo '<div class="menu-pages">';
                            wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
                            echo '</div>';
                        } else {
                            echo '<ul class="cshero-dropdown main-menu">';
                            wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s', 'walker'=>new HeroMenuWalker()));
                            echo '</ul>';
                        }
                    ?>
					</div>
				</div>
                <?php if(getCSSite()=='-vintage'): ?>
                <div class="header-widget">
                    <div class="header-social">
                        <?php	if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Content Widget 1")): endif;?>
                    </div>
                    <div class="header-copyright">
                        <?php	if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Content Widget 2")): endif;?>
                    </div>
                </div>
                <?php endif; ?>
                <button type="button" class="btn btn-default btn-navbar navbar-toggle" data-toggle="collapse" data-target="#cshero-main-menu-mobile"><i class="fa fa-align-justify"></i></button>
                <div id="cshero-main-menu-mobile" class="collapse navbar-collapse cshero-mmenu"></div>
            </div>
        </div>
    </header>
</div>
<?php get_template_part('framework/headers/sticky-header-left'); ?>