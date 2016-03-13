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
<div class="header header-v5">
    <header id="header-top" <?php echo $header_setings->top_padding; ?>>
        <div class="container">
            <div class="row">
                <div class="header-top clearfix">
                    <div class='header-top-1 <?php echo $smof_data['header_top_widgets_1']; ?>'>
                    <?php   if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Top Widget 1")):
                    endif;?>
                    </div>
                    <?php if ($smof_data['header_top_widgets_columns'] != '1') : ?>
                    <div class='header-top-2 <?php echo $smof_data['header_top_widgets_2']; ?>'>
                    <?php   if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Top Widget 2")):
                    endif;?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
	<header id="cshero-header" class="<?php if($header_setings->header_fixed == '1'){ echo ' transparentFixed';} ?>" <?php echo $header_setings->styles; ?>>
		 <div class="container">
			<div class="row ">
				<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="<?php echo esc_url(home_url()); ?>" style="margin:<?php echo esc_attr($smof_data['margin_logo']); ?>;">
						<img src="<?php echo esc_url($smof_data['logo']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>"  style="max-height: <?php echo esc_attr($smof_data["logo_width"]); ?>" class="normal-logo logo-v5"/>
					</a>
					<button type="button" class="btn btn-default btn-navbar navbar-toggle" data-toggle="collapse" data-target="#cshero-main-menu-mobile"><i class="fa fa-align-justify"></i></button>
				</div>

			</div>
			<div class="row">
				<div id="menu" class="cs_mega_menu main-menu col-xs-12 col-sm-12 col-md-12 col-lg-12 cs_menu_position_<?php echo $smof_data["menu_position"]; ?>">
					<div class="main-menu-content cshero-menu-dropdown clearfix nav-menu cshero-mobile">
						<?php
						$custom_main_navigation = get_post_meta($c_pageID, 'cs_main_navigation', true);
						if (in_array($main_navigation, $menus_id) || in_array($custom_main_navigation, $menus_id)) {
                            echo '<ul class="cshero-dropdown main-menu">';
                            wp_nav_menu(array('theme_location' => 'main_navigation','menu'=>$custom_main_navigation, 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s', 'walker'=>new HeroMenuWalker()));
                            if(is_active_sidebar('cshero-header-content-widget-1')){
                                ?>
                                <li class="menu-item menu-item-cart-search hidden-xs hidden-sm">
                                    <div class="header-cart-search">
                                        <?php   if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Content Widget 1")): endif;?>
                                    </div>
                                </li>
                                <?php
                            }
                            if(isset($smof_data['enable_hidden_sidebar']) && $smof_data['enable_hidden_sidebar'] && !isMobile()){
                                ?>
                                <li class="menu-item menu-item-open hidden-xs hidden-sm">
                                    <a href="#"><i class="fa fa-navicon cs_open"></i></a>
                                </li>
                                <?php
                            }
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
			</div>

		</div>
	</header>
	<header id="cshero-header-mobile"><div id="cshero-main-menu-mobile" class="collapse navbar-collapse cshero-mmenu"></div></header>
</div>
<?php get_template_part('framework/headers/sticky-header'); ?>