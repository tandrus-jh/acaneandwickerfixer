<?php global $smof_data,$post;
    $c_pageID = null;
    if($post){
        $c_pageID = $post->ID;
    }
?>
<style type="text/css">

    /* =========================================================
        Reset Body
    ========================================================= */
    body.csbody {
        color: <?php echo $smof_data['body_text_color']; ?>;
        font-size: <?php echo $smof_data['body_font_size']; ?>;
    }
    body.csbody #wrapper {
        background-color: <?php echo $smof_data['bg_color']; ?>;
    }
    <?php
    $body_padding = $smof_data['main_content_padding'];
    if(is_page() && get_post_meta($c_pageID, 'cs_body_padding', true)){
       $body_padding = get_post_meta($c_pageID, 'cs_body_padding', true);
    }
    if($body_padding): ?>
        .csbody:not(.home) #primary {
            padding: <?php echo $body_padding; ?>;
        }
    <?php endif; ?>
    <?php if($smof_data['main_content_margin']): ?>
        .csbody:not(.home) #primary {
            margin: <?php echo $smof_data['main_content_margin']; ?>;
        }
    <?php endif; ?>
    .csbody a {
        color: <?php echo $smof_data['link_color']; ?>;
    }
    .csbody a:hover, .csbody a:focus {
        color: <?php echo $smof_data['link_color_hover']; ?>;
    }
    .csbody a.read-more-link, .csbody th a {
        color: <?php echo $smof_data['link_color_hover']; ?>;
    }
    .csbody a.read-more-link:hover, .csbody th a:hover {
        color: <?php echo $smof_data['link_color']; ?> !important;
    }
    .color-primary {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    /* =========================================================
        End Reset Body
    ========================================================= */

    /* =========================================================
        Start Typo
    ========================================================= */
    body h1 {
       font-size: <?php echo $smof_data['heading_font_size_h1']; ?>;
       color: <?php echo $smof_data['h1_color']; ?>;
    }
    body h2 {
       font-size: <?php echo $smof_data['heading_font_size_h2']; ?>;
       color: <?php echo $smof_data['h2_color']; ?>;
    }
    body h3  {
        font-size: <?php echo $smof_data['heading_font_size_h3']; ?>;
        color: <?php echo $smof_data['h3_color']; ?>;
    }
    body h4 {
       font-size: <?php echo $smof_data['heading_font_size_h4']; ?>;
       color: <?php echo $smof_data['h4_color']; ?>;
    }
    body h5 {
       font-size: <?php echo $smof_data['heading_font_size_h5']; ?>;
       color: <?php echo $smof_data['h5_color']; ?>;
    }
    body h6 {
       font-size: <?php echo $smof_data['heading_font_size_h6']; ?>;
       color: <?php echo $smof_data['h6_color']; ?>;
    }
    .page-title{
        color: <?php echo $smof_data['page_title_color']; ?>;
        font-size: <?php echo $smof_data['title_bar_size']; ?>;
    }
    .sub_header_text {
        color: <?php echo $smof_data['page_title_color']; ?>;
    }
    .breadcrumbs, .breadcrumbs a {
        color: <?php echo $smof_data['breadcrumbs_text_color']; ?> !important;
    }
    .title-unblemished h3:before {
        background: <?php echo $smof_data['h3_color']; ?>;
    }
    /* =========================================================
        End Typo
    ========================================================= */
    /* =========================================================
        Start Header
    ========================================================= */
    /* Header Color Option */
    #header-top {
        background: <?php echo $smof_data['header_top_bg_color']; ?> !important;
    }
    #header-sticky {
        background-color: <?php echo HexToRGB($smof_data['header_sticky_bg_color'], $smof_data['header_sticky_opacity']/100); ?>;
    }
    .cs-sticky.fixed {
        .opacity: <?php echo $smof_data['header_sticky_opacity']/100; ?>;
    }
    .sticky-header.fixed .cshero-logo img {
        height: <?php echo $smof_data['header_sticky_logo_max_height']; ?>;
    }
    /*** Logo ***/
    .header-wrapper .logo a {
        padding: <?php echo $smof_data['padding_logo']; ?>;
    }
    #cshero-header .logo a img {
        max-height: <?php echo $smof_data['logo_width']; ?>;
    }
    .menu-item-cart-search .header-cart-search,
    .menu-pages .menu > ul > li > a,
    .header-cart-search a.cs_open {
        line-height: <?php echo $smof_data['nav_height']; ?>;
    }
    .menu-item-cart-search .header-cart-search .widget_searchform_content,
    .menu-item-cart-search .header-cart-search .shopping_cart_dropdown {
        top: <?php echo $smof_data['nav_height']; ?>;
    }
    #sticky-nav-wrap .menu-item-cart-search .header-cart-search .widget_searchform_content,
    #sticky-nav-wrap .menu-item-cart-search .header-cart-search .shopping_cart_dropdown {
        top: <?php echo $smof_data['header_sticky_height']; ?>;
    }
    /*** End logo ***/
    /*** Start Main Menu ***/
    <?php if(get_post_meta($c_pageID, 'cs_header_fixed_top', true) == "yes"):
        $menu_opacity = 0; $menu_bg_color = $smof_data['header_top_bg_color'];
        if(get_post_meta($c_pageID, 'cs_header_bg_opacity', true)){
            $menu_opacity = get_post_meta($c_pageID, 'cs_header_bg_opacity', true);
        }
        if(get_post_meta($c_pageID, 'cs_header_bg_color', true)){
            $menu_bg_color = get_post_meta($c_pageID, 'cs_header_bg_color', true);
        }
    ?>
    #cshero-header.transparentFixed{
        position: absolute;
        top: 0;
        width: 100%;
        background: <?php echo HexToRGB($menu_bg_color,$menu_opacity); ?> !important;
        border: none;
    }
    <?php endif; ?>
    .cshero-menu-dropdown > ul > li > a,
    .menu-pages .menu > ul > li > a {
        padding: <?php echo $smof_data['nav_padding']; ?> !important;
        font-size: <?php echo $smof_data['menu_fontsize_first_level']; ?>;
    }
    #wp-consilium .btn-navbar.navbar-toggle i:before,
    #wp-consilium-agency .btn-navbar.navbar-toggle i:before,
    .menu-item-cart-search .header-cart-search a.cs_open,
    .menu-item-cart-search .widget_cart_search_wrap .header a,
    .menu-mobile-cart-search .menu-item-open a {
        font-size: <?php echo $smof_data['menu_fontsize_first_level']; ?>;
    }
    .cshero-menu-dropdown > ul > li.nomega-menu-item ul,
    .sticky-menu .cshero-menu-dropdown > ul > li.nomega-menu-item ul,
    .cshero-menu-dropdown li.nomega-menu-item > ul ul,
    .cs_mega_menu .sticky-nav ul {
        width: <?php echo $smof_data['dropdown_menu_width']; ?>;
    }
    .main-menu-left ul ul li a{
        color: <?php echo $smof_data['menu_sub_color']; ?> !important;
    }
    .main-menu-left ul ul li a:hover{
        color: <?php echo $smof_data['menu_sub_hover_color']; ?> !important;
    }
    #wp-consilium-shop .main-menu-content > ul li > a{
        background: <?php echo $smof_data['menu_sub_bg_color']; ?>;
    }
    #wp-consilium-shop .main-menu-left > ul li:hover > a{
        background: <?php echo esc_attr($smof_data['sticky_menu_bg_hover_color']); ?>;
    }
    <?php if(is_rtl()){ ?>
        .cshero-menu-dropdown > ul ul{
            right: 0;
            left: auto;
        }
        .cshero-menu-dropdown li.nomega-menu-item ul ul ul {
            right: <?php echo $smof_data['dropdown_menu_width']; ?> !important;
        }
        .cshero-menu-dropdown li.nomega-menu-item ul ul ul.back {
            right: -<?php echo $smof_data['dropdown_menu_width']; ?> !important;
        }
    <?php } else {?>
        .cshero-menu-dropdown li.nomega-menu-item ul ul ul {
            left: <?php echo $smof_data['dropdown_menu_width']; ?> !important;
        }
        .cshero-menu-dropdown li.nomega-menu-item ul ul ul.back {
            left: -<?php echo $smof_data['dropdown_menu_width']; ?> !important;
        }
    <?php } ?>
    .cshero-menu-dropdown > ul > li.mega-menu-item > ul > li > ul > li ul {
      border-left: 3px solid <?php echo $smof_data['primary_color']; ?>;
    }
    <?php if($smof_data['menu_bg_color']): ?>
    .main-menu-content {
        background: <?php echo $smof_data['menu_bg_color']; ?> !important;
    }

    <?php endif; ?>
    <?php if($smof_data['menu_first_color']): ?>
    ul.main-menu > li > a, ul.sticky-nav > li > a,
    .menu-pages .menu > ul > li > a,
    .header-cart-search a.cs_open,
    .menu-item-cart-search .widget_cart_search_wrap a i,
    .menu-item-cart-search .widget_cart_search_wrap a .cart_total,
    #wp-consilium .btn-navbar.navbar-toggle i:before,
    #wp-consilium-agency .btn-navbar.navbar-toggle i:before,
    .menu-mobile-cart-search .menu-item-open a {
        color: <?php echo $smof_data['menu_first_color']; ?>;
    }
    <?php endif; ?>

    <?php
    $cs_header_fixed_menu_color = '#ffffff';
    $cs_header_fixed_menu_color_hover = '#ffffff';
    if(get_post_meta($c_pageID, 'cs_header_setting', true) == 'custom' && get_post_meta($c_pageID, 'cs_header_fixed_top', true) == '1'){
        $cs_header_fixed_menu_color = get_post_meta($c_pageID, 'cs_header_fixed_menu_color', true);
        $cs_header_fixed_menu_color_hover = get_post_meta($c_pageID, 'cs_header_fixed_menu_color_hover', true);
    } else {
        if($smof_data['header_fixed_top'] == '1'){
            $cs_header_fixed_menu_color = $smof_data['header_fixed_menu_color'];
            $cs_header_fixed_menu_color_hover = $smof_data['header_fixed_menu_color_hover'];
        }
    }
    ?>
    <?php if($cs_header_fixed_menu_color): ?>
    #cshero-header.transparentFixed .main-menu > li > a{
        color:<?php echo esc_attr($cs_header_fixed_menu_color); ?> !important;
    }
    <?php endif; ?>

    <?php if($cs_header_fixed_menu_color_hover): ?>
    #cshero-header.transparentFixed .main-menu > li > a:hover{
        color:<?php echo esc_attr($cs_header_fixed_menu_color_hover); ?> !important;
    }
    <?php endif; ?>
    <?php if($smof_data['menu_hover_first_color']): ?>
    .main-menu > li > a:hover,
    .menu-pages .menu > ul > li > a:hover,
    .menu-item-cart-search .header-cart-search a.cs_open:hover,
    .main-menu > li.current-menu-item > a,
    .main-menu > li.current-menu-parent > a,
    .main-menu > li.current_page_item > a,#sticky-nav-wrap ul.sticky-nav > li.current_page_item > a,
    .menu-item-cart-search .widget_cart_search_wrap a:hover i,
    .menu-item-cart-search .widget_cart_search_wrap a:hover .cart_total,
    #wp-consilium .btn-navbar.navbar-toggle:hover i:before,
    #wp-consilium-agency .btn-navbar.navbar-toggle:hover i:before,
    .menu-mobile-cart-search .menu-item-open:hover a {
        color: <?php echo $smof_data['menu_hover_first_color']; ?>;
    }
    <?php endif; ?>
    <?php if($smof_data['menu_sub_bg_color']): ?>
    .cshero-menu-dropdown > ul > li ul,
    .cshero-menu-dropdown > ul > li.mega-menu-item > ul {
        background-color: <?php echo $smof_data['menu_sub_bg_color']; ?>;
    }
    .cshero-menu-dropdown > ul > li > ul.mega-bg-image,
    .cshero-menu-dropdown > ul > li > ul.mega-bg-image ul {
        background-color: transparent;
    }
    <?php endif; ?>
    <?php if($smof_data['menu_bg_hover_color']): ?>
    .cshero-menu-dropdown > ul > li > ul li:hover,
    .cshero-menu-dropdown > ul > li.mega-menu-item > ul > li > ul > li ul {
        background-color: <?php echo $smof_data['menu_bg_hover_color']; ?>;
    }
    .cshero-menu-dropdown > ul > li > ul.mega-bg-image li:hover {
        /*background-color: transparent;*/
    }
    <?php endif; ?>
    <?php if($smof_data['menu_sub_color']): ?>
    .cshero-menu-dropdown ul ul li a {
        color: <?php echo $smof_data['menu_sub_color']; ?>;
        font-size: <?php echo $smof_data['menu_fontsize_sub_level']; ?>;
    }
    <?php endif; ?>
    <?php if($smof_data['menu_sub_sep_color']): ?>
    .cshero-menu-dropdown ul ul li {
        border-bottom: 1px solid <?php echo $smof_data['menu_sub_sep_color']; ?>;
    }
    .cshero-menu-dropdown li.nomega-menu-item ul li {
        border-bottom: none;
    }
    .cshero-menu-dropdown li.mega-menu-item ul li {
        /*border-bottom: 1px dashed <?php echo $smof_data['menu_sub_sep_color']; ?>;*/
        border-bottom: none;
    }
    <?php endif; ?>
    .cshero-menu-dropdown > ul > li.mega-menu-item > ul.colimdi > li > a {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    /*** End Main Menu ***/
    /*** Start Main Menu Sticky ***/
    .sticky-header-left .main-menu-left ul ul li a{
        color: <?php echo $smof_data['sticky_menu_sub_color']; ?> !important;
    }
    .sticky-header.fixed .cshero-menu-dropdown > ul > li > a,
    .sticky-header.fixed .menu-pages .menu > ul > li > a,
    .menu-item-cart-search .header-cart-search a.cs_open,
    .sticky-wrapper .menu-item-cart-search .header-cart-search {
        height: <?php echo $smof_data['header_sticky_height']; ?>;
        line-height: <?php echo $smof_data['header_sticky_height']; ?>;
    }
    #sticky-nav-wrap ul.sticky-nav > li.current-menu-item > a,
    #sticky-nav-wrap ul.sticky-nav > li.current_page_item > a,
    #sticky-nav-wrap ul.sticky-nav > li > a:hover {
        color: <?php echo $smof_data['sticky_menu_hover_first_color']; ?> !important;
    }
    #sticky-nav-wrap ul.sticky-nav > li > a {
        color: <?php echo $smof_data['sticky_menu_first_color']; ?> ;
    }
    .sticky-menu .cshero-menu-dropdown ul ul li:hover,
    .sticky-menu .cshero-menu-dropdown > ul > li.mega-menu-item > ul > li > ul > li ul {
        background-color: <?php echo $smof_data['sticky_menu_bg_hover_color']; ?> !important;
    }
    .sticky-menu .cshero-menu-dropdown li.nomega-menu-item ul li {
        border-bottom: none;
    }
    .sticky-menu .cshero-menu-dropdown ul ul li a {
        color: <?php echo $smof_data['sticky_menu_sub_color']; ?>;
    }
    /*** End Main Menu Sticky ***/
    /***** Mega Menu ****/
    .cs_mega_menu li.mega-menu-item > ul,
    .cs_mega_menu .sub-menu li:first-child,
    .cs_mega_menu .children li:first-child,
    .menu-item-cart-search .header-cart-search .shopping_cart_dropdown,
    .menu-item-cart-search .header-cart-search .widget_searchform_content,
    #wrapper .woocommerce .woocommerce-info, #wrapper .woocommerce-page .woocommerce-info {
        border-top: 3px solid <?php echo $smof_data['primary_color']; ?>;
    }
    .cs_mega_menu li.mega-menu-item > ul,
    .menu-item-cart-search .header-cart-search .shopping_cart_dropdown,
    .menu-item-cart-search .header-cart-search .widget_searchform_content {
        border-bottom: 9px solid <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium.meny-top .control .cs_close {
        border-bottom: 1px solid <?php echo $smof_data['primary_color']; ?>;
    }
    /* =========================================================
        End Header
    =========================================================*/

    /* =========================================================
        Start Primary
    =========================================================*/
    <?php if($smof_data['form_bg_color']): ?>
    .content-area form {
        background-color: <?php echo $smof_data['form_bg_color']; ?>;
    }
    <?php endif; ?>
    <?php if($smof_data['form_text_color']): ?>
    .content-area form {
        color: <?php echo $smof_data['form_text_color']; ?>;
    }
    <?php endif; ?>
    <?php if($smof_data['form_border_color']): ?>
    .content-area form {
        border-color: <?php echo $smof_data['form_border_color']; ?>;
    }
    <?php endif; ?>
    /* Content Area */
    .site-content {
        background: <?php echo $smof_data['content_bg_color']; ?> !important;
        padding: <?php echo $smof_data['main_content_padding']; ?> !important;
        margin: <?php echo $smof_data['main_content_margin']; ?> !important;
    }
    /* =========================================================
        End Primary
    =========================================================*/
    /* =========================================================
        Blog Post
    =========================================================*/
    .cs-blog-info li a {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    .cs-blog-title h3, .cs-blog-info li a:hover {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-blog .cs-blog-info li + li {
         border-left: 1px solid <?php echo $smof_data['secondary_color']; ?>;
    }
    .tag-sticky .cs-blog .cs-blog-header .cs-blog-thumbnail:before,
    .sticky .cs-blog .cs-blog-header .cs-blog-thumbnail:before {
        border-color: <?php echo $smof_data['primary_color']; ?> transparent transparent <?php echo $smof_data['primary_color']; ?>;
    }
    .rtl .tag-sticky .cs-blog .cs-blog-header .cs-blog-thumbnail:before,
    .rtl .sticky .cs-blog .cs-blog-header .cs-blog-thumbnail:before {
        border-color: <?php echo $smof_data['primary_color']; ?> <?php echo $smof_data['primary_color']; ?> transparent transparent;
    }
    .rtl .cs-blog .cs-blog-info li + li {
        border-left: none;
        border-right: 1px solid <?php echo $smof_data['secondary_color']; ?>;
    }
    #wp-consilium-corporate .cs-blog .cs-blog-title .cs-blog-corporate-title,
    #wp-consilium-corporate .cs-blog .cs-blog-title h3 {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    #wp-consilium-corporate .cs-blog .cs-blog-title .cs-blog-corporate-title:hover {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-corporate .cs-blog  .cs-blog-list-meta:before {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    /* =========================================================
        End Blog Post
    =========================================================*/
    /* =========================================================
        Start Title and Module
    =========================================================*/
    .title-preset2 h3 {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    .title-preset1 h3, .title-style-colorprimary-retro h3, .title-style-colorprimary-retro2 h3,
    .title-style-colorprimary-retro2 h3 + p,.tagline  {
        color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .title-style-colorwhite-retro h3 {
        -moz-text-shadow: 2px 2px 0px <?php echo $smof_data['primary_color']; ?>, 3px 4px 2px #000 !important;
        -ms-text-shadow: 2px 2px 0px <?php echo $smof_data['primary_color']; ?>, 3px 4px 2px #000 !important;
         -o-text-shadow: 2px 2px 0px <?php echo $smof_data['primary_color']; ?>, 3px 4px 2px #000 !important;
            text-shadow: 2px 2px 0px <?php echo $smof_data['primary_color']; ?>, 3px 4px 2px #000 !important;
    }
    /* =========================================================
        End Title Module
    =========================================================*/
    /* ==========================================================================
    Start Sidebar Styles
    ========================================================================== */
    .primary-sidebar h3.wg-title {
        color: <?php echo $smof_data['secondary_color']; ?> !important;
    }
    .primary-sidebar h3.wg-title span {
        -webkit-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
           -moz-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
                box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
    End Sidebar Styles
    ========================================================================== */

    /* =========================================================
        Start Page Inner Primary
    =========================================================*/
    article.team, .single-portfolio .cs-portfolio-meta, .cs-pricing .cs-pricing-item h3.cs-pricing-title{
        background: <?php echo $smof_data['secondary_color']; ?>;
    }

    /* =========================================================
        End Page Inner Primary
    =========================================================*/
    /**** RGBA ****/
    .cs-portfolio .cs-portfolio-item:hover .cs-portfolio-details,
    .cs-portfolio.cs-portfolio-style3 .cs-mainpage:hover:before {
        background: <?php echo HexToRGB($smof_data['primary_color'],0.8); ?>;
    }
    .cs-recent-post.style-3 .cs-recent-post-title a {
       background: <?php echo HexToRGB($smof_data['secondary_color'],0.6); ?>;
    }
    .wpb_row.vc_row-fluid.bg-overlay-preset:before {
        background: <?php echo HexToRGB($smof_data['link_color_hover'],0.9); ?>;
    }
    /**** End RGBA ****/
    /* =========================================================
        Start Button Style
    =========================================================*/
    .csbody  button, .csbody .button, .csbody .btn,
    .csbody input[type="submit"],
    .csbody #submit,
    .csbody .added_to_cart,
    a.comment-reply-link {
        <?php if($smof_data['button_gradient_top_color']): ?>
            background: <?php echo $smof_data['button_gradient_top_color']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_gradient_text_color']): ?>
            color: <?php echo $smof_data['button_gradient_text_color']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_color']): ?>
            border-color: <?php echo $smof_data['button_border_color']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_width']): ?>
            border-width: <?php echo $smof_data['button_border_width']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_style']): ?>
            border-style: <?php echo $smof_data['button_border_style']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_radius']): ?>
            border-radius: <?php echo $smof_data['button_border_radius']; ?>;
            -webkit-border-radius: <?php echo $smof_data['button_border_radius']; ?>;
            -moz-border-radius: <?php echo $smof_data['button_border_radius']; ?>;
            -ms-border-radius: <?php echo $smof_data['button_border_radius']; ?>;
            -o-border-radius: <?php echo $smof_data['button_border_radius']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_top'] == '0'): ?>
            border-top: none!important;
        <?php endif; ?>
        <?php if($smof_data['button_border_left'] == '0'): ?>
            border-left: none!important;
        <?php endif; ?>
        <?php if($smof_data['button_border_bottom'] == '0'): ?>
            border-bottom: none!important;
        <?php endif; ?>
        <?php if($smof_data['button_border_right'] == '0'): ?>
            border-right: none!important;
        <?php endif; ?>
        <?php if($smof_data['button_margin']): ?>
            margin: <?php echo $smof_data['button_margin']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_padding']): ?>
            padding: <?php echo $smof_data['button_padding']; ?>;
        <?php endif; ?>
    }
    .csbody .btn:hover,
    .csbody .btn:focus,
    .csbody .button:hover,
    .csbody button:hover,
    .csbody .button:focus,
    .csbody button:focus,
    .csbody input[type="submit"]:hover,
    .csbody input[type="submit"]:focus,
    .csbody #submit:hover,
    .csbody #submit:focus,
    .csbody .added_to_cart:hover,
    .csbody .added_to_cart:focus,
    a.comment-reply-link:hover,
    a.comment-reply-link:focus {
        <?php if($smof_data['button_gradient_top_color_hover']): ?>
            background: <?php echo $smof_data['button_gradient_top_color_hover']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_gradient_text_color_hover']): ?>
            color: <?php echo $smof_data['button_gradient_text_color_hover']; ?>;
        <?php endif; ?>
        <?php if($smof_data['button_border_color_hover']): ?>
            border-color: <?php echo $smof_data['button_border_color_hover']; ?>;
        <?php endif; ?>
    }
    .csbody .btn.btn-readmore {
        <?php if($smof_data['button_border_color']): ?>
            border-left: 3px solid <?php echo $smof_data['button_border_color']; ?> !important;
        <?php endif; ?>
        border-bottom: none;
    }
    .csbody .btn.btn-readmore:hover {
        background: <?php echo $smof_data['button_gradient_top_color']; ?>;
    }
    .csbody .btn.btn-default {
        border-color: <?php echo $smof_data['button_border_color']; ?>;
    }
    .csbody .btn.btn-default-alt {
        background: transparent;
        border: 2px solid <?php echo $smof_data['button_border_color']; ?> !important;
        color: <?php echo $smof_data['button_border_color']; ?>;
    }
    .csbody .btn.btn-default-alt:hover,
    .csbody .btn.btn-default-alt:focus {
        color: <?php echo $smof_data['button_border_color']; ?>;
        background: <?php echo HexToRGB($smof_data['button_gradient_top_color_hover'],0.3); ?>;
    }
    .csbody .btn.btn-primary {
        border-color: <?php echo $smof_data['button_primary_border_color']; ?>;
        background: <?php echo $smof_data['button_primary_background_color']; ?>;
        color: <?php echo $smof_data['button_primary_text_color']; ?>;
    }
    .csbody .btn.btn-primary:hover,
    .csbody .btn.btn-primary:focus {
        border-color: <?php echo $smof_data['button_primary_border_color_hover']; ?>;
        background: <?php echo $smof_data['button_primary_background_color_hover']; ?>;
        color: <?php echo $smof_data['button_primary_text_color_hover']; ?>;
    }
    .csbody .btn-primary-alt, .csbody input[type="submit"].btn-primary-alt {
        background: transparent;
        border: 2px solid <?php echo $smof_data['button_primary_border_color']; ?> !important;
        color: <?php echo $smof_data['button_primary_border_color']; ?>;
    }
    .csbody .btn-primary-alt:hover,
    .csbody .btn-primary-alt:focus,
    .csbody .btn-primary-alt-style2:hover,
    .csbody .btn-primary-alt-style2:focus {
        color: <?php echo $smof_data['button_primary_border_color']; ?>!important;
        background: <?php echo HexToRGB($smof_data['button_primary_background_color_hover'],0.3); ?>!important;
    }
    .csbody .btn.btn-trans:hover,
    .csbody .btn.btn-trans:focus {
        background: <?php echo HexToRGB($smof_data['button_gradient_top_color'],0.3); ?>;
    }
    .csbody .btn.btn-trans:hover,
    .csbody .btn.btn-trans:focus,
    .csbody .cs-latest-twitter .bx-controls-direction a:hover {
        background: <?php echo $smof_data['button_gradient_top_color']; ?>;
    }
    /* =========================================================
        End Button Style
    =========================================================*/
    /* =========================================================
        Start Short Code
    =========================================================*/
    /*** High light ***/
    .cs-highlight-style-1 {
         background: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-highlight-style-2 {
        background: <?php echo $smof_data['secondary_color']; ?>;
    }
    /**** Drop Caps ****/
    /*** Start Fancy Box  ****/
    .cs-fancy-box.wrapper .cs-fancy-box-title:hover i,
    .cs-fancy-box.wrapper .cs-fancy-box-icon:hover i {
        border-color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .cs-fancy-box.fancy-box-style-1 .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-2 .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-4 .cs-fancy-box-icon i,
    .cs-fancy-box.fancy-box-style-9 .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-5:hover .cs-fancy-box-title i {
        background: <?php echo $smof_data['secondary_color']; ?>;
    }
    .cs-fancy-box.fancy-box-style-1:hover .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-2:hover .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-4:hover .cs-fancy-box-icon i,
    .cs-fancy-box.fancy-box-style-9 .cs-fancy-box-title:hover i,
    .cs-fancy-box.fancy-box-style-5 .cs-fancy-box-title i  {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-fancy-box a.read-more-link, .cs-carousel-post-read-more a,
    .readmore.main-color {
        color: <?php echo $smof_data['secondary_color']; ?> !important;
    }
    .cs-fancy-box.fancy-box-style-1 .cs-title-main,
    .cs-fancy-box.fancy-box-style-10 .cs-fancy-box-title i,
    .cs-fancy-box.fancy-box-style-6 .cs-fancy-box-title i {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-fancy-box a.read-more-link.btn,
    .cs-fancy-box a.read-more-link.btn:hover {
        color: #fff !important;
        font-family: inherit;
    }
    .cs-fancy-box a.read-more-link:hover,
    .readmore.main-color:hover {
        color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .cs-fancy-box.fancy-box-style-7 .cs-fancy-box-image .cs-fancy-box-icon {
        border-top-color: <?php echo $smof_data['primary_color']; ?> !important;
        border-right-color: rgba(0,0,0,0);
        border-bottom-color: rgba(0,0,0,0);
        border-left-color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .cs-fancy-box.fancy-box-style-8:hover .cs-fancy-box-title i {
        color: <?php echo $smof_data['primary_color']; ?>;
        background: <?php echo HexToRGB($smof_data['primary_color'],0.2); ?> !important;
    }
    .cs-fancy-box.fancy-box-style-3 .cs-fancy-box-title i {
        border: 1px solid <?php echo $smof_data['primary_color']; ?>;
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    /*---- End Fancy Box ----*/
    /**** Short Code icon ****/
    .fontawesome-icon-list a:hover {
        background: <?php echo $smof_data['primary_color']; ?> !important;
        color: #fff !important;
    }
    .fontawesome-icon-list a:hover span {
        color: #fff;
    }
    .vc_pie_chart .vc_pie_wrapper canvas {
        border-color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .cs-pricing .cs-pricing-item.cs-pricing-feature .cs-pricing-container:after {
        border-top-color: <?php echo $smof_data['primary_color']; ?>;
        border-right-color: <?php echo $smof_data['primary_color']; ?>;
        border-bottom-color: transparent;
        border-left-color: transparent;
    }
    .icon-list li:before {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    /*** Shortcode Tabs ***/
    .wpb_tabs.style1 ul.wpb_tabs_nav li a{
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .wpb_tabs.style2 ul.wpb_tabs_nav li.ui-tabs-active,
    .wpb_tabs.style3 ul.wpb_tabs_nav li.ui-tabs-active,
    .wpb_tabs.style2 ul.wpb_tabs_nav li:hover,
    .wpb_tabs.style3 ul.wpb_tabs_nav li:hover   {
        background: <?php echo $smof_data['primary_color']; ?> !important;
    }
    .wpb_tabs.style3 ul.wpb_tabs_nav {
        border-right: 1px solid <?php echo $smof_data['primary_color']; ?>;
    }
    .rtl .wpb_tabs.style3 ul.wpb_tabs_nav {
        border-left: 1px solid <?php echo $smof_data['primary_color']; ?>;
        border-right: none !important;
    }
    .wpb_tabs.style2 ul.wpb_tabs_nav li a,
    .wpb_tabs.style3 ul.wpb_tabs_nav li a   {
        color: <?php echo $smof_data['body_text_color']; ?> !important;
    }
    .wpb_tabs .ui-tabs-panel {
        border-top: 1px solid <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
      Start Comment
    ========================================================================== */
    #comments .comment-list .comment-meta a,
    .cs-navigation .page-numbers {
        color: <?php echo $smof_data['body_text_color']; ?>;
    }
    .widget_categories ul li.cat-item a,
    .widget_archive ul li a,
    .widget_meta ul li a,
    .widget_calendar #wp-calendar tbody td a,
    .widget_pages ul li a,
    #wp-consilium ul.product-categories li a {
        color: <?php echo $smof_data['body_text_color']; ?>;
    }
    .widget_categories ul li.cat-item:hover a,
    .widget_archive ul li:hover,
    .widget_categories ul li:hover,
    .widget_archive ul li:hover a,
    .widget_meta ul li:hover a,
    .widget_pages ul li:hover,
    .widget_pages ul li:hover > a,
    .widget_archive ul li:hover a {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .widget_calendar #wp-calendar tbody td:hover {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    .widget_calendar #wp-calendar tbody td.pad {
        background: transparent;
    }
    /* ==========================================================================
      End Comment
    ========================================================================== */
    /* ==========================================================================
      Block Quotes
    ========================================================================== */
    .cs-quote-style-1:before, .cs-quote-style-3:before,
    .cs-quote-style-1:after, .cs-quote-style-3:after {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-quote-style-3, .cs-quote-style-2 {
        border-left: 10px solid <?php echo $smof_data['primary_color']; ?>;
    }
    .rtl .cs-quote-style-3, .rtl .cs-quote-style-2 {
        border-left: none;
        border-right: 10px solid <?php echo $smof_data['primary_color']; ?>;
    }
    /* =========================================================
        End Short Code
    =========================================================*/

    /*Start All Style Widget WP*/
    .tagcloud a:hover {
        background: <?php echo $smof_data['primary_color']; ?>;;
    }
    /*End All Style Widget WP*/

    .cs-blog-header h3.cs-blog-title a:hover, .cs-blog .cs-blog-info li,
    .cs-team-content .cs-team-social a:hover i, .connect-width li a:hover i,
    h3.comments-title, h3#reply-title, a.twitter_time, .cs-latest-twitter .cs-desc a,
    .title-preset2 h3.ww-title, .title-preset2 h3.cs-title {
        color: <?php echo $smof_data['link_color_hover']; ?> !important;
    }
    /* =========================================================
        Start Reset Input
    =========================================================*/
    input[type='text']:active,
    input[type='text']:focus,
    input[type="password"]:active,
    input[type="password"]:focus,
    input[type="datetime"]:active,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:active,
    input[type="datetime-local"]:focus,
    input[type="date"]:active,
    input[type="date"]:focus,
    input[type="month"]:active,
    input[type="month"]:focus,
    input[type="time"]:active,
    input[type="time"]:focus,
    input[type="week"]:active,
    input[type="week"]:focus,
    input[type="number"]:active,
    input[type="number"]:focus,
    input[type="email"]:active,
    input[type="email"]:focus,
    input[type="url"]:active,
    input[type="url"]:focus,
    input[type="search"]:active,
    input[type="search"]:focus,
    input[type="tel"]:active,
    input[type="tel"]:focus,
    input[type="color"]:active,
    input[type="color"]:focus,
    textarea:focus {
        border: 1px solid <?php echo $smof_data['link_color']; ?> !important;
    }
    .navbar-toggle, .cs-team .cs-team-featured-img:hover .circle-border {
        border: 1px solid <?php echo $smof_data['link_color_hover']; ?> !important;
    }
    .wpb_tabs li.ui-tabs-active a.ui-tabs-anchor {
        border: 1px solid <?php echo $smof_data['link_color']; ?> !important;
    }
    .radioType input[type="radio"]:checked + label:after,
    .checkType input[type="checkbox"]:checked + label:after,
    .tagcloud a:hover,
    .post .cs-post-meta, .post .cs-post-header .date-type .date-box,
    .cs-carousel-container .cs-carousel-header .cs-carousel-post-date,
    .cs-carousel-style-2 .cs-carousel-post-icon,
    .cs-carousel-style-2.cs-carousel-style-3 .cs-carousel-post-icon:before, .bg-preset,
    .cs-fancy-box.fancy-box-style-1:hover .cs-fancy-box-title i:after,
    .cs-fancy-box.fancy-box-style-10:hover .cs-fancy-box-title i:after,
    .wpb_accordion.style1 .wpb_accordion_section .wpb_accordion_header a,
    .cs-carousel .carousel-control, .box-2, #cs_portfolio_filters ul li:hover a,
    #cs_portfolio_filters ul li.active a, .gallery-filters a:hover, .gallery-filters a.active,
    ul.cs_list_circle li:before, ul.cs_list_circleNumber li:before,
    .cs-pricing .cs-pricing-item .cs-pricing-button:hover a,
    .tag-audio .mejs-controls .mejs-time-rail .mejs-time-current, ins,
    .tag-audio .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
    .cs-navigation .page-numbers:hover, .cs-navigation .page-numbers.current,
    #wp-consilium-unblemished .cs-team.cs-team-style-3 .cs-team-content .cs-team-social i:hover,
    #wp-consilium-retro .tagcloud a, .cs-portfolio.cs-portfolio-style2 .cs-portfolio-header:hover .cs-portfolio-meta,
    #wrapper .woocommerce .woocommerce-info:before, #wrapper .woocommerce-page .woocommerce-info:before,
    #wp-consilium.single-product .cs-shopcarousel-style-1-shop .cs-title:before,
    .cs-recent-post.style-3 .cs-title {
        background: <?php echo $smof_data['primary_color']; ?> !important;
    }

    .wpb_accordion.style3 .wpb_accordion_section .wpb_accordion_header a {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    .wpb_accordion.style2 .wpb_accordion_section .wpb_accordion_header a,
    .wpb_accordion.style5 .wpb_accordion_section .wpb_accordion_header a,
    .tag-audio .mejs-controls .mejs-time-rail .mejs-time-loaded,
    .tag-audio .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
        background: <?php echo $smof_data['secondary_color']; ?>;
    }
    .sh-list-comment .post-holder a:hover,
    .post .cs-post-header .cs-post-title a:hover,
    .cs-breadcrumbs ul.breadcrumbs li a:hover,
    .logo-text strong:nth-child(1),
    #cs_portfolio_filters ul li.active a,
    .cs-carousel-body .cs-carousel-post-title h2.entry-title a:hover,
    .cs-carousel-post .cs-nav a:hover i:before,
    .cs-carousel-events .cs-nav a:hover i:before,
    .cs-carousel-container .cs-carousel-details a i,
    #footer-bottom ul.menu li a:hover, #footer-bottom ul.obtheme_mega_menu li a:hover,
    .cs-social li a:hover i, ul.cs_list_number li:before,
    .team .cs-team-meta h3, .back-to-demo a:hover, .back-to-demo a:focus,
    .cs-portfolio-item .cs-portfolio-details .cs-portfolio-meta h3, .cs-portfolio-item .cs-portfolio-list-details li a:hover,
    .single-portfolio .cs-portfolio-item h5.title-pt, .cs-nav ul li:hover i,
    #wp-consilium-unblemished #cs_portfolio_filters ul li.active a,
    #wp-consilium-mainpage #cs_portfolio_filters ul li.active a,
    #wp-consilium-mainpage #cs_portfolio_filters ul li:hover a,
    .tools-menu i, .back-to-demo i, .tools-menu:hover, .back-to-demo:hover
    .header-v7 #header-top h3.wg-title,
    .wpb_accordion.style4 .wpb_accordion_section .ui-accordion-header-active a,
    .wpb_accordion.style4 .wpb_accordion_section .ui-accordion-header-active a:after,
    .wpb_accordion.style5 .wpb_accordion_section .ui-accordion-header-active a,
    .wpb_accordion.style5 .wpb_accordion_section .ui-accordion-header-active a:after  {
        color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    #wp-consilium-mainpage.single-portfolio .cs-portfolio-item .cs-portfolio-list-details li h5,
    #wp-consilium-agency.single-portfolio .cs-portfolio-item .cs-portfolio-list-details li h5,
    #wp-consilium-mainpage h1.entry-title,
    #wp-consilium-mainpage h3.ww-title,
    #wp-consilium-mainpage h3.wg-title,
    #wp-consilium-mainpage .cs-fancy-box .cs-fancy-box-title .ww-title,
    #wp-consilium-mainpage .cs-title,
    #wp-consilium.single-portfolio .cs-portfolio-item .cs-portfolio-list-details li h5,
    #wp-consilium h1.entry-title,
    #wp-consilium h3.ww-title,
    #wp-consilium h3.wg-title,
    #wp-consilium .cs-fancy-box .cs-fancy-box-title .ww-title,
    #wp-consilium .cs-title,
    .comment-body .fn, span.star, span.Selectoptions:after,
    .cs-blog-media .carousel-control.left:hover,
    .cs-blog-media .carousel-control.right:hover,
    .single-team .cs-item-team .cs-team-social li:hover a,
    blockquote > p:before, blockquote > p:after,
    .meny-top .meny-sidebar .cs_close:before,
    .meny-top .meny-sidebar .cs_close:hover:after,
    .cs-carousel-event-style1 .cs-event-meta .cs-event-time i {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .tag-audio .mejs-container .mejs-controls .mejs-time span,
    .cs-navigation .prev.page-numbers:before,
    .cs-navigation .next.page-numbers:after,
    .tweets-container ul li:before,
    #wp-consilium .cs-team .cs-title,
    #wp-consilium-mainpage .cs-team .cs-title,
    .cs-team.cs-team-style-1 .cs-team-title a,
    .wpb_accordion.style4 .wpb_accordion_section a:after {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    .cs-testimonial .cs-testimonial-header h3.cs-title {
        color: <?php echo $smof_data['secondary_color']; ?> !important;
    }
    /* =========================================================
        Start Reset Input
    =========================================================*/
    /* ==========================================================================
    Start carousel latest work style1
    ========================================================================== */
    .title-line .ww-title .line, .title-line .wg-title span,
    .cs-carousel-post h3.cs-title span.line,
    .cs-carousel-portfolio h3.cs-title span.line,
    #wp-consilium .cs-title .line,
    #wp-consilium-mainpage .cs-title .line,
    #wp-consilium-agency .cs-title .line,
    #wp-consilium-retro .cs-title .line,
    #wp-consilium-blog .cs-title .line,
    #wp-consilium-corporate .cs-title .line {
        -webkit-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
           -moz-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
            -ms-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
             -o-box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
                box-shadow: 0 1px 0 <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-retro .cs-carousel-portfolio h3.cs-title {
        border-bottom: 1px dashed <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-carousel-post .cs-carousel-header:hover:before,
    .cs-carousel-portfolio .cs-carousel-header:hover:before {
        background: <?php echo HexToRGB($smof_data['primary_color'],0.7); ?>;
    }
    .cs-carousel-post .cs-carousel-body h3.cs-carousel-title a,
    .cs-carousel-post.cs-carousel-post-default2 h3.cs-carousel-title a,
    .cs-carousel-post .cs-header .cs-title,
    .cs-carousel-portfolio .cs-carousel-body h3.cs-carousel-title a,
    .cs-carousel-portfolio.cs-carousel-post-default2 h3.cs-carousel-title a,
    .cs-carousel-portfolio .cs-header .cs-title, .search .page-header .page-title,
    .error404 .page-header .page-title {
        color: <?php echo $smof_data['secondary_color']; ?>;
    }
    .cs-carousel-post .cs-header .cs-title,
    .cs-carousel-portfolio .cs-header .cs-title,
    #wp-consilium.single-product .cs-shopcarousel-style-1-shop .cs-title {
        color: <?php echo $smof_data['secondary_color']; ?> !important;
    }
    .cs-carousel-post.cs-carousel-post-default2.cs-style-retro h3.cs-carousel-title a {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-agency .cs-carousel-portfolio-agency .cs-more-meta i,
    #wp-consilium ul.product-categories li a:hover {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
    End carousel latest work style1
    ========================================================================== */

    .checkType input[type="checkbox"]:checked + label:after {
        color: <?php echo $smof_data['primary_color']; ?> !important;
        background: none !important;
    }
    /* =========================================================
      Portfolio Details
    =========================================================*/
    .single-portfolio .cs-portfolio-item .cs-portfolio-details .cs-portfolio-meta ul.cs-social i:hover {
        color: <?php echo $smof_data['link_color_hover']; ?>;
    }

    /* =========================================================
        Start Footer
    =========================================================*/
    #cs-bottom-wrap {
        color: <?php echo $smof_data['bottom_1_text_color']; ?> !important;
    }
    #cs-bottom-wrap h3.wg-title {
        color: <?php echo $smof_data['bottom_1_headings_color']; ?> !important;
    }
    #cs-bottom-wrap a {
        color: <?php echo $smof_data['bottom_1_link_color']; ?> !important;
    }
    #cs-bottom-wrap a:hover {
        color: <?php echo $smof_data['bottom_1_link_hover_color']; ?> !important;
    }

    /* =========================================================
        Start Footer
    =========================================================*/
    #footer-top {
        background-color: <?php echo $smof_data['footer_top_bg_color']; ?> !important;
        color: <?php echo $smof_data['footer_text_color']; ?> !important;
    }
    #footer-top h3.wg-title {
        color: <?php echo $smof_data['footer_headings_color']; ?> !important;
    }
    #footer-top a {
        color: <?php echo $smof_data['footer_link_color']; ?> !important;
    }
    #footer-top a:hover {
        color: <?php echo $smof_data['footer_link_hover_color']; ?> !important;
    }

    #footer-bottom {
        background-color: <?php echo $smof_data['footer_bottom_bg_color']; ?> !important;
        color: <?php echo $smof_data['footer_bottom_text_color']; ?> !important;
    }
    #footer-bottom h3.wg-title {
        color: <?php echo $smof_data['footer_bottom_headings_color']; ?> !important;
    }
    #footer-bottom a {
        color: <?php echo $smof_data['footer_bottom_link_color']; ?> !important;
    }
    #footer-bottom a:hover {
        color: <?php echo $smof_data['footer_bottom_link_hover_color']; ?> !important;
    }

    <?php if($smof_data['footer_top_padding'] || $smof_data['footer_top_padding']) : ?>
    #footer-top {
        padding: <?php echo $smof_data['footer_top_padding']; ?> !important;
        margin: <?php echo $smof_data['footer_top_margin']; ?> !important;
    }
    <?php endif; ?>
    <?php if($smof_data['footer_bottom_padding'] || $smof_data['footer_bottom_margin']) : ?>
    #footer-bottom {
        padding: <?php echo $smof_data['footer_bottom_padding']; ?> !important;
        margin: <?php echo $smof_data['footer_bottom_margin']; ?> !important;
    }
    <?php endif; ?>
    /* =========================================================
        End Footer Top
    =========================================================*/
    /* ==========================================================================
       Hidden Menu Sidebar
    ========================================================================== */
    .meny-sidebar {
        width: <?php echo $smof_data['hidden_sidebar_width']; ?>;
    }
    .right_sidebar_opened .meny-sidebar {
        right: -<?php echo $smof_data['hidden_sidebar_width']; ?>;
    }
    .left_sidebar_opened .meny-sidebar {
        left: -<?php echo $smof_data['hidden_sidebar_width']; ?>;
    }
    .meny-sidebar ul li a:hover, .meny-sidebar ul li a:focus {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .meny-top .meny-sidebar {
        height: <?php echo $smof_data['hidden_sidebar_height']; ?> !important;
    }
    .meny-top.meny-active #wrapper {
    -webkit-transform: translateY(<?php echo $smof_data['hidden_sidebar_height']; ?>) rotateX(-15deg);
       -moz-transform: translateY(<?php echo $smof_data['hidden_sidebar_height']; ?>) rotateX(-15deg);
        -ms-transform: translateY(<?php echo $smof_data['hidden_sidebar_height']; ?>) rotateX(-15deg);
         -o-transform: translateY(<?php echo $smof_data['hidden_sidebar_height']; ?>) rotateX(-15deg);
            transform: translateY(<?php echo $smof_data['hidden_sidebar_height']; ?>) rotateX(-15deg);
    }
    body.left_sidebar_opened {
    -webkit-transform:translateX(<?php echo $smof_data['hidden_sidebar_width']; ?>);
       -moz-transform:translateX(<?php echo $smof_data['hidden_sidebar_width']; ?>);
        -ms-transform:translateX(<?php echo $smof_data['hidden_sidebar_width']; ?>);
         -o-transform:translateX(<?php echo $smof_data['hidden_sidebar_width']; ?>);
            transform:translateX(<?php echo $smof_data['hidden_sidebar_width']; ?>);
    }
    body.right_sidebar_opened {
        -webkit-transform:translateX(-<?php echo $smof_data['hidden_sidebar_width']; ?>);
           -moz-transform:translateX(-<?php echo $smof_data['hidden_sidebar_width']; ?>);
            -ms-transform:translateX(-<?php echo $smof_data['hidden_sidebar_width']; ?>);
             -o-transform:translateX(-<?php echo $smof_data['hidden_sidebar_width']; ?>);
                transform:translateX(-<?php echo $smof_data['hidden_sidebar_width']; ?>);
    }
    /* ==========================================================================
       End Hidden Menu Sidebar
    ========================================================================== */

    /* ==========================================================================
       Start Elements Typo
    ========================================================================== */
    .fontawesome-icon-list [class*="col-"]:hover,
    .fontawesome-icon-list [class^="col-"]:hover {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
       End Elements Typo
    ========================================================================== */

    /* ==========================================================================
      Consilium Shop
    ========================================================================== */
    /*---- Start Button Shop ----*/
    /*---- End Button Shop ----*/
    #wp-consilium-shop .sticky-header-left:before,
    #wp-consilium-shop .sticky-header-left:after{
        background: <?php echo $smof_data['header_sticky_bg_color']; ?>;
    }
    #wp-consilium-shop .header-left:before,
    #wp-consilium-shop .header-left:after{
        background: <?php echo $smof_data['header_bg_color']; ?>;
    }
    #wp-consilium-shop .cs-shopcarousel-style-1-shop .fa.fa-plus:hover{
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-shop #footer-top .cs_icons:hover{
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-shop .btn-white .btn:hover, #wp-consilium-shop .btn.btn-white:hover,
    #wp-consilium-shop .btn-white .btn:focus, #wp-consilium-shop .btn.btn-white:focus{
        background: <?php echo $smof_data['button_gradient_top_color_hover']; ?>!important;
        border-color: <?php echo $smof_data['button_border_color_hover']; ?>!important;
    }
    #wp-consilium-shop .btn.btn-primary-shop{
        background: <?php echo $smof_data['primary_color']; ?>!important;
        border-color: <?php echo $smof_data['primary_color']; ?>!important;
    }
    .csbody .cs-woocommerce-message, .csbody .cs-woocommerce-message a, .csbody .cs-woocommerce-info a, .csbody .cs-woocommerce-info:before{
        color: <?php echo $smof_data['primary_color']; ?>!important;
    }
    .csbody.woocommerce .cart-collaterals .cart_totals table .order-total .amount,
    .csbody.woocommerce-page .cart-collaterals .cart_totals table .order-total .amount {
        color: <?php echo $smof_data['primary_color']; ?>!important;
    }
    /* ==========================================================================
      End Consilium Shop
    ========================================================================== */
    /* ==========================================================================
      Start Consilium Retro
    ========================================================================== */
    .cs-blog-carousel-retro .cs-carousel-like, .cs-blog-carousel-retro .cs-carousel-date {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-retro .bg-rowStyle-retro,
    #wp-consilium-retro .bg-rowStyle-retro-bottom,
    #wp-consilium-retro .bg-rowStyle-retro-top,.bg-primary-color {
      background-color: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-retro .primary-sidebar [class*="widget_"],
    #wp-consilium-retro .primary-sidebar [class^="widget_"],
    #wp-consilium-retro .primary-sidebar .widget,
    #wp-consilium-retro #cs-breadcrumb-wrapper .cs-breadcrumbs,
    #wp-consilium-retro .cs-blog .cs-blog-info ul {
        border-bottom: 1px dashed <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-retro #comments {
        border-top: 1px dashed <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-retro #commentform input[type="text"],
    #wp-consilium-retro #commentform input[type="email"],
    #wp-consilium-retro #commentform input[type="password"],
    #wp-consilium-retro #commentform textarea,
    #wp-consilium-retro blockquote,
    #wp-consilium-retro #comments .comment-list li .comment-body {
        border: 1px dashed <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
      End Consilium Retro
    ========================================================================== */

    /* ==========================================================================
      Consilium Vintage
    ========================================================================== */
    .header-widget{
        background: <?php echo $smof_data['header_bg_color']; ?>;
    }
    /* ==========================================================================
      Consilium Corporate
    ========================================================================== */
    #wp-consilium-corporate .wpcf7-form input[type="text"],
    #wp-consilium-corporate .wpcf7-form input[type="email"],
    #wp-consilium-corporate .wpcf7-form textarea {
        border: 1px solid <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
      End Consilium Corporate
    ========================================================================== */
    /* ==========================================================================
      Start Consilium Unblemished
    ========================================================================== */
    #wp-consilium-unblemished .cs-nav ul li a {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    #wp-consilium-unblemished .cs-testimonial.cs-testimonial-style-4 .cs-testimonial-text:before,
    .button-down:hover:before {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
     /* ==========================================================================
      End Consilium Unblemished
    ========================================================================== */
    /* ==========================================================================
      Start Consilium University
    ========================================================================== */
    #wp-consilium-university .wpb_accordion_section .wpb_accordion_header a {
        color: <?php echo $smof_data['primary_color']; ?> !important;
    }
    #wp-consilium-university .cs-search-slider-wrap .cs-search-slider .searchform:before {
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-search-slider-wrap .cs-search-slider input[type="text"]:focus {
      border: 1px solid <?php echo $smof_data['primary_color']; ?> !important;
    }
    .cs-feature-icons ul li i {
        border: 3px solid <?php echo $smof_data['primary_color']; ?>;
        background: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-feature-icons ul li:hover i {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    .cs-feature-icons ul li a {
        color: <?php echo $smof_data['primary_color']; ?>;
    }
    /* ==========================================================================
      End Consilium University
    ========================================================================== */
    
</style>
<!--End Preset -->