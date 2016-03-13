<?php global $smof_data, $woocommerce, $main_menu, $post;
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
    $left_navigation = null;
    $right_navigation = null;
    if(!empty($menu_locations)){
        $left_navigation = $menu_locations['left_navigation'];
        $right_navigation = $menu_locations['right_navigation'];
    }
    /* show stiky */
    $show_sticky_header = $smof_data['header_sticky'];
    if(get_post_meta($c_pageID, 'cs_show_sticky_header', true) == 'show'){
        $show_sticky_header = '1';
    }
?>
<?php if ($show_sticky_header == '1'): ?>
    <header id="header-sticky" class="sticky-header">
        <div class="container">
            <div class="row">
                <div class="cshero-logo logo-sticky col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-center">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo $smof_data['logo']; ?>" alt="<?php bloginfo('name'); ?>" class="sticky-logo" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sticky-menu main-menu-left col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <nav id="sticky-nav-wrap" class="cs_mega_menu nav-holder cshero-menu-dropdown cshero-mobile">
                        <?php
                        $custom_left_navigation = get_post_meta($c_pageID, 'cs_left_navigation', true);
						if (in_array($left_navigation, $menus_id) || in_array($custom_left_navigation, $menus_id)) {
                             echo '<ul class="cshero-dropdown sticky-nav">';
                             wp_nav_menu(array('theme_location' => 'left_navigation','menu'=>$custom_left_navigation, 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
                             echo '</ul>';
                        } elseif (empty($menus_id)) {
						     echo '<div class="menu-pages">';
							 wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
							 echo '</div>';
						} else {
						     echo '<ul class="cshero-dropdown sticky-nav">';
						     wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s', 'walker'=>new HeroMenuWalker()));
						     echo '</ul>';
						}?>
                    </nav>
                </div>
                <div class="sticky-menu main-menu-right col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <nav id="sticky-nav-wrap" class="cs_mega_menu nav-holder cshero-menu-dropdown cshero-mobile">
                        <?php
                        $custom_right_navigation = get_post_meta($c_pageID, 'cs_right_navigation', true);
						if (in_array($right_navigation, $menus_id) || in_array($custom_right_navigation, $menus_id)) {
                             echo '<ul class="cshero-dropdown sticky-nav">';
                             wp_nav_menu(array('theme_location' => 'right_navigation','menu'=>$custom_right_navigation, 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
                             echo '</ul>';
                        } elseif (empty($menus_id)) {
						     echo '<div class="menu-pages">';
							 wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
							 echo '</div>';
						} else {
						     echo '<ul class="cshero-dropdown sticky-nav">';
						     wp_nav_menu(array('depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s', 'walker'=>new HeroMenuWalker()));
						     echo '</ul>';
						}
                        ?>
                    </nav>
                </div>
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#cshero-sticky-menu-mobile"><i class="fa fa-align-justify"></i></button>
                <div id="cshero-sticky-menu-mobile" class="collapse navbar-collapse cshero-mmenu"></div>
            </div>
        </div>
    </header>
<?php endif; ?>