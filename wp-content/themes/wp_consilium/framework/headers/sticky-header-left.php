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
    $main_navigation = null;
    $sticky_navigation = null;
    if(!empty($menu_locations)){
        $main_navigation = $menu_locations['main_navigation'];
        $sticky_navigation = $menu_locations['sticky_navigation'];
    }
    /* show stiky */
    $show_sticky_header = $smof_data['header_sticky'];
    if(get_post_meta($c_pageID, 'cs_show_sticky_header', true) == 'show'){
        $show_sticky_header = '1';
    }
?>
<?php if ($show_sticky_header == '1'): ?>
    <header id="header-sticky" class="sticky-header sticky-header-left">
		<div class="cshero-logo logo-sticky logo-sticky-left">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo $smof_data['logo']; ?>" alt="<?php bloginfo('name'); ?>" class="sticky-logo" />
			</a>
		</div>
		<div class="sticky-menu cs_menu_position_<?php echo $smof_data["menu_position"]; ?>" id="sticky-menu">
			<nav id="sticky-nav-left" class="nav-holder cshero-menu-left main-menu-left cshero-mobile">
				<?php
				$custom_sticky_navigation = get_post_meta($c_pageID, 'cs_sticky_navigation', true);
                if (in_array($sticky_navigation, $menus_id) || in_array($custom_sticky_navigation, $menus_id)) {
				    echo '<ul class="cshero-dropdown sticky-nav">';
					wp_nav_menu(array('theme_location' => 'sticky_navigation','menu'=>$custom_sticky_navigation, 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
				    echo '</ul>';
                } elseif (in_array($main_navigation, $menus_id)){
                    echo '<ul class="cshero-dropdown sticky-nav">';
                    wp_nav_menu(array('theme_location' => 'main_navigation', 'depth' => 5, 'container' => false, 'menu_id' => 'nav', 'items_wrap' => '%3$s'));
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
    </header>
<?php endif; ?>