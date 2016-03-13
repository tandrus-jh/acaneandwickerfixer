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
<div id="cshero-header" class="meny-arrow">
	<?php
	if ( !is_front_page() ) {
		echo "<span class='back-to-demo hidden-sm hidden-xs'><i class='ion-monitor'></i><a href='".home_url()."'>BACK TO MAIN PAGE</a></span>";
	}
	?>
	<span class="tools-menu cs_open hidden-sm hidden-xs"><i class="fa fa-bars"></i> ELEMENTS &amp; TOOLS MENU</span>
	<header class="<?php if($header_setings->header_fixed == '1'){ echo ' transparentFixed';} ?>  hidden-md hidden-lg" <?php echo $header_setings->styles; ?>>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo esc_url(home_url()); ?>" style="margin:<?php echo esc_attr($smof_data['margin_logo']); ?>;">
                        <img src="<?php echo esc_url($smof_data['logo']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>"
                             style="height: <?php echo esc_attr($smof_data["logo_width"]); ?>" class="normal-logo logo-v1"/>
                    </a>
                </div>
				<div id="menu" class="cs_mega_menu main-menu col-xs-8 col-sm-8 col-md-8 col-lg-8 cs_menu_position_<?php echo $smof_data["menu_position"]; ?>">
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
                            if(isset($smof_data['enable_hidden_sidebar']) && $smof_data['enable_hidden_sidebar']){
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
                <button type="button" class="btn btn-default btn-navbar navbar-toggle" data-toggle="collapse" data-target="#cshero-main-menu-mobile"><i class="fa fa-align-justify"></i></button>
                <div id="cshero-main-menu-mobile" class="collapse navbar-collapse cshero-mmenu"></div>
            </div>
        </div>
    </header>
</div>
<?php
	echo get_template_part('framework/headers/sticky-header');
?>