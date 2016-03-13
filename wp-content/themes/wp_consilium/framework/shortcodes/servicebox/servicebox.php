<?php

/* * *********************************************************
 * Servicebox
 * ********************************************************* */
$_cshero_servicebox=array();
$_SESSION['cs_servicebox_css']=array();
function cshero_servicebox($params, $content = null) {
    global $_cshero_servicebox;
    extract(shortcode_atts(array(
        'id' => count($_cshero_servicebox),
        'icon' => '',
        'type'=>'icon',
        'icontype'=>'glyphicon',
        'icon_size'=>40,
        'iconbg_size'=>100,
        'iconbg_radius'=>50,
        'margin_bottom'=>30,
        'margin_top'=>30,
        'iconbgcolor'=>'#FFFFFF',
        'iconcolor'=>'#777777',
        'headingtype' => 'h3',
        'heading' => '',
        'class' => '',
        'readmore'=>'',
        'readmore_link'=>'',
        'readmore_text'=>'',
        'readmore_type'=>'',
        'readmorestyle'=>'default',
        'readmore_bgcolor'=>'',
        'readmore_fgcolor'=>''
    ), $params));
    $out = '';$style='';
    $_cshero_servicebox[$id]=array();

    $out.='<div id="cs_servicebox_'.$id.'" class="cs_servicebox '.$class.'">';

    if($icon!=''){
        $out.= '<span class="'.$icontype.' ' . $icon . ' icon_bg iconcircle"></span>';
    }

    if($heading!=''){
        $out.='<'.$headingtype.'>'.$heading.'</'.$headingtype.'>';
    }
    $out.='<div class="cs_servicebox_content">';
    $out.=do_shortcode($content);
    $out.='</div>';
    if($readmore=='true'){
        if($readmore_type!=''){
            $btnclass=' btn '.$readmore_type;
        } else{
            $btnclass=' cs_servicebox_readmore';
        }
        $out.='<a href="'.$readmore_link.'" class="cs_servicebox_readmore_css'.$btnclass.'">'.$readmore_text.'</a>';
    }
    $out.='</div>';

    if($readmore=='true' && $readmorestyle=='custom' ){
        $style.='
	#cs_servicebox_'.$id.' .cs_servicebox_readmore_css{
	color:'.$readmore_fgcolor.';
	background-color:'.$readmore_bgcolor.';
	}';
    }
    $lineheight=intval($iconbg_size)-10;
    $style.='
	#cs_servicebox_'.$id.' .iconcircle{

	}
	#cs_servicebox_'.$id.' span.iconcircle {
	    color:'.$iconcolor.';
	    font-size:'.$icon_size.'px;
	    line-height:'.$lineheight.'px;
	   background-color:'.$iconbgcolor.';
	    height:'.$iconbg_size.'px;
	    width:'.$iconbg_size.'px;
	    margin-top:'.$margin_top.'px;
	    margin-bottom:'.$margin_bottom.'px;
	    border-radius:'.$iconbg_radius.'%;
        -moz-border-radius: '.$iconbg_radius.'%;
	    -webkit-border-radius: '.$iconbg_radius.'%;
	    -ms-border-radius: '.$iconbg_radius.'%;
        -o-border-radius: '.$iconbg_radius.'%;
    ;
	}';
    $_SESSION['cs_servicebox_css'][]= 'cs_servicebox_css_id_'.$id;
    $_SESSION['cs_servicebox_css_id_'.$id]=$style;
    wp_enqueue_style('cstyle', get_template_directory_uri() . "/framework/shortcodes/servicebox/cstyle.php");
    return $out;
}

add_shortcode('servicebox', 'cshero_servicebox');