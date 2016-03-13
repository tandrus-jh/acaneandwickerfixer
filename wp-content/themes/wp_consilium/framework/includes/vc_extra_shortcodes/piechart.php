<?php
vc_map ( array (
		"name" => "Pie Chart",
		"base" => "cs-piechart",
		"icon" => "cs_icon_for_vc",
		"category" => __ ( 'CS Hero', THEMENAME ),
		"description" => __ ("Pie, Doughnut Charts, Area Chart, Line Chart, Bar Chart...",THEMENAME),
		"params" => array (
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Title", THEMENAME ),
						"param_name" => "title",
						"description" => ""
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Title Tag', THEMENAME ),
						"param_name" => "title_tag",
						"value" => array (
								"H1" => "h1",
								"H2" => "h2",
								"H3" => "h3",
								"H4" => "h4",
								"H5" => "h5",
								"H6" => "h6"
						),
						"description" => ""
				),
				array (
						"type" => "colorpicker",
						"heading" => __ ( 'Title Color', THEMENAME ),
						"param_name" => "title_color",
						"description" => ''
				),
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Description", THEMENAME ),
						"param_name" => "description",
						"description" => ""
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Type', THEMENAME ),
						"param_name" => "type",
						"value" => array (
								"Doughnut" => "doughnut",
								"Pie" => "pie",
								"Area Chart" => "polararea",
								"Line Chart" => "linechart",
								"Bar Chart" => "barchart",
								"Radar Chart" => "radarchart"
						),
						"description" => ""
				),
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Inner Cutout", THEMENAME ),
						"param_name" => "inner_cutout",
						"value" => 0,
						"description" => __ ( "Number 0->99 - The percentage of the chart that we cut out of the middle (This is 0 for Pie charts)", THEMENAME )
				),
				array (
						"type" => "dropdown",
						"heading" => __ ( 'Style', THEMENAME ),
						"param_name" => "style",
						"value" => array (
								"Style 1" => "1",
								"Style 2" => "2",
								"Style 3" => "3",
								"Style 4" => "4",
								"Style 5" => "5",
								"Style 6" => "6"
						),
						"description" => ""
				),
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Width", THEMENAME ),
						"param_name" => "width",
						"value"=>"auto",
						"description" => ""
				),
				array (
						"type" => "textfield",
						"class" => "",
						"heading" => __ ( "Height", THEMENAME ),
						"param_name" => "height",
						"value"=>"auto",
						"description" => ""
				),
				array (
						"type" => "textarea",
						"class" => "",
						"heading" => __ ( "Values for (Doughnut, Pie, Area Chart)", THEMENAME ),
						"param_name" => "values",
						"value" => "",
						"description" => "{'value':300,'color':'#F7464A','highlight':'#FF5A5E','label':'Red'},{'value':50,'color':'#46BFBD','highlight':'#5AD3D1','label':'Green'},{'value':100,'color':'#FDB45C','highlight':'#FFC870','label':'Yellow'}"
				),
				array (
				    "type" => "textarea_raw_html",
				    "class" => "",
				    "heading" => __ ( "Values for (Line Chart, Bar Chart, Radar Chart)", THEMENAME ),
				    "param_name" => "values2",
				    "value" => '',
				    "description" => '{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"My First dataset","fillColor":"rgba(220,220,220,0.2)","strokeColor":"rgba(220,220,220,1)","pointColor":"rgba(220,220,220,1)","pointStrokeColor":"#fff","pointHighlightFill":"#fff","pointHighlightStroke":"rgba(220,220,220,1)","data":[65,59,80,81,56,55,40]},{"label":"My Second dataset","fillColor":"rgba(151,187,205,0.2)","strokeColor":"rgba(151,187,205,1)","pointColor":"rgba(151,187,205,1)","pointStrokeColor":"#fff","pointHighlightFill":"#fff","pointHighlightStroke":"rgba(151,187,205,1)","data":[28,48,40,19,86,27,90]}]}'
				)
		)
) );