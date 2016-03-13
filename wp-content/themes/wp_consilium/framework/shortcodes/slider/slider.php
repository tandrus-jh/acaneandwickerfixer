<?php
$cshero_slider = array();
$cshero_slider_slides=array();
if(!isset($_SESSION)){
	session_start();
}
function cshero_sliders($params, $content = null) {
    global $cshero_slider, $cshero_slider_counter;

    if (!count($cshero_slider)) {
        $cshero_slider = array('current_id'=>0);
    }
    if(!isset($_SESSION['cs_slider_css'])){
        $_SESSION['cs_slider_css']=array();
    }
    extract(shortcode_atts(array(
        'id' => count($cshero_slider),
        'class' => '',
        'interval'=>'',
        'controls'=>'',
        'bullets'=>'',
        'pause'=>'',
        'wrap'=>'',
        'captioncolor'=>'',
        'navcolor'=>''
    ), $params));
    $cshero_slider[$id] = array();
    $cshero_slider['current_id'] = count($cshero_slider)-1;
    $cshero_slider_slides[$cshero_slider['current_id']]=array();
    $bulllet_content='';

    $scontent = do_shortcode($content);
    if (count($cshero_slider[$id]['bullets'])) {
        $bulllet_content = isset($cshero_slider[$id]['bullets']) && is_array($cshero_slider[$id]['bullets']) ? implode('', $cshero_slider[$id]['bullets']) : '';
    }
    $output = '';
    if (trim($scontent) != '' || count($cshero_slider[$id]['details'])) {
        $scontent = isset($cshero_slider[$id]['details']) && is_array($cshero_slider[$id]['details']) ? implode('', $cshero_slider[$id]['details']) : '';

        $output.='<div id="oscitas-slider-' . $id . '" class="carousel cs-carousel slide '. esc_attr($class).'" data-ride="carousel" data-interval="'. esc_attr($interval).'" data-pause="'. esc_attr($pause).'" data-wrap="'. esc_attr($wrap).'">';
        if($bullets!=''){
            $output.=' <ol class="carousel-indicators">'.$bulllet_content.'</ol>';
        }

        $output .= ' <div class="carousel-inner" >' . $scontent;
        $output .= '</div>';

        if($controls!=''){
            $output.=' <a class="left carousel-control" href="#oscitas-slider-' . $id . '" data-slide="prev">
					    <span class="fa fa-angle-left"></span>
					  </a>
					  <a class="right carousel-control" href="#oscitas-slider-' . $id . '" data-slide="next">
					    <span class="fa  fa-angle-right"></span>
					  </a>';
					        }

					        $output .= '</div>';
					        $_SESSION['cs_slider_css'][$id]=$id;
					        $_SESSION['cs_slider_each_'.$id]="
					#oscitas-slider-{$id} a.carousel-control span{
					    color:{$navcolor};
					}
					#oscitas-slider-{$id} ol.carousel-indicators {
					    margin:0;
					}
					#oscitas-slider-{$id} ol.carousel-indicators li{
					    border-color:{$navcolor};
					    margin :1px;
					    float: left;
					}
					#oscitas-slider-{$id} ol.carousel-indicators li.active{
					    background-color:{$navcolor};
					}
					#oscitas-slider-{$id} .carousel-caption .cs-caption{
					    color:#FFFFFF;
					    color:{$captioncolor};
					    line-height:1.5;
					    margin:0;
					    padding:0;
					}
					#oscitas-slider-{$id} .carousel-inner > .item > img,  #oscitas-slider-{$id} .carousel-inner > .item > a > img{
					    width:100%;
					}
        ";

    }
    $cshero_slider['current_id'] -= 1;
    return $output;
}

add_shortcode('slider', 'cshero_sliders');

function cshero_slider($params, $content = null) {

    global $cshero_slider, $cshero_slider_slides;

    $index = $cshero_slider['current_id'];
    if(!isset($cshero_slider_slides[$index])){
        $cshero_slider_slides[$index]=array();
    }
    extract(shortcode_atts(array(
        'title' => '',
        'image'=>'',
        'caption'=>'',
        'active'=>'',
        'slideid'=>count($cshero_slider_slides[$index])
    ), $params));

    $const = get_defined_constants();
    if(!empty($image)){
        $cshero_slider[$index]['bullets'][]='<li data-target="#oscitas-slider-' . $index . '" data-slide-to="'.$slideid.'" class="'. esc_attr($active).'"></li>';
        $cshero_slider_slides[$index][$slideid]=array();
        $cshero_slider[$index]['details'][] = '
        <div class="item '. esc_attr($active).'">
      <img src="'. esc_url($image).'" >
      <div class="carousel-caption">
        <p class="cs-caption">'. esc_attr($caption).'</p>
      </div>
      </div>';
    }
}

add_shortcode('slide', 'cshero_slider');