<?php
/*
Plugin Name: WP-Car Sidebar
Plugin URI: http://www.autokredit.de/
Description: WP-Car adds descriptions and photos from famous cars in the sidebar of your blog. A configurable widget.
Version: 1.0
Author: Kai
Author URI: http://www.autokredit.de/
*/

function wp_get_car($before_title="",$after_title="") {

	$wp_car_start = '
<style>
 #wp-car{ height:205px; }
 #wp_car_image_in{padding: 0px 0px 0px 0px; width: 100%; text-align: center;}
 #img_wp_car{ display: block; margin: 2px auto;
		width: 190px; height: 173px; 
		background: url(\''.get_option('home')  .'/wp-content/plugins/wp-car-sidebar/images/bg.png\');}
 #url_wp_car{width: 190px; margin: 1px 10px 1px 125px; display: block; text-align: left; height: 10px;}
 .wp_car_img{ width: 150px; height:136px; margin: 20px 12px; border: 0px;}
 #desc_wp_car{ margin: 0px; height: 26px; line-height: 12px;}
 #wp_car_kcal_txt{color:#282828;
font-size:40px;
font-weight:bold;
margin:-35px 20px 25px 0;
text-align:right;	}
#wp_car_kcal_txt_s{ font-size: 12px; }
</style>
		<div id="wp_car_image_in">
		<div id="img_wp_car">
	
			';
	
	$wp_car_center ='
		
		<div id="desc_wp_car">
		
		';
	
	$wp_car_end ="
		</div>
		</div>
		</div>
	";

$wp_car = array(
	1 => array( "img_name" => "bugatti_veyron.jpg",
				"tt100" => "2.5",  
				"hp" => "1,184",
				"name" => "Bugatti Veyron",  
				"url" => "http://en.wikipedia.org/wiki/Bugatti_Veyron",
				 ),
 
	2 => array( "img_name" => "ultima_gtr.jpg",
				"tt100" => "2.6",  
				"hp" => "720",
				"name" => "Ultima GTR",  
				"url" => "http://en.wikipedia.org/wiki/Ultima_GTR",
				),
	
	3 => array( "img_name" => "ssc-ultimate-aero.jpg",
				"tt100" => "2.78",  
				"hp" => "1,062",
				"name" => "SSC Ultimate Aero",  
				"url" => "http://en.wikipedia.org/wiki/SSC_Ultimate_Aero",
				),
	4 => array( "img_name" => "ascari_a10.jpg",
				"tt100" => "2.8",  
				"hp" => "625",
				"name" => "Ascari A10",  
				"url" => "http://en.wikipedia.org/wiki/Ascari_A10",
				),
	5 => array( "img_name" => "ariel-atom.jpg",
				"tt100" => "2.8",  
				"hp" => "300",
				"name" => "Ariel Atom",  
				"url" => "http://en.wikipedia.org/wiki/Ariel_Atom",
				),
	6 => array( "img_name" => "porsche-911-turbo-s.jpg",
				"tt100" => "2.9",  
				"hp" => "530",
				"name" => "Porsche 911 Turbo S",  
				"url" => "http://en.wikipedia.org/wiki/Porsche_911",
				),
				
	7 => array( "img_name" => "ferrari-458-italia.jpg",
				"tt100" => "3.1",  
				"hp" => "560",
				"name" => "Ferrari 458 Italia",  
				"url" => "http://en.wikipedia.org/wiki/Ferrari_458",
				),
	8 => array( "img_name" => "rossion-q1.jpg",
				"tt100" => "3.2",  
				"hp" => "450",
				"name" => "Rossion Q1",  
				"url" => "http://en.wikipedia.org/wiki/Rossion",
				),
	9 => array( "img_name" => "caterham_7.jpg",
				"tt100" => "3.1",  
				"hp" => "500",
				"name" => "Caterham Seven",  
				"url" => "http://en.wikipedia.org/wiki/Caterham_7",
				),
	10 => array( "img_name" => "enzo-ferrari.jpg",
				"tt100" => "3.14",  
				"hp" => "651",
				"name" => "Enzo Ferrari",  
				"url" => "http://en.wikipedia.org/wiki/Enzo_Ferrari_%28car%29",
				),
	11 => array( "img_name" => "koenigsegg-ccx.jpg",
				"tt100" => "3.2",  
				"hp" => "806",
				"name" => "Koenigsegg CCX",  
				"url" => "http://en.wikipedia.org/wiki/Koenigsegg_CCX",
				),
	12 => array( "img_name" => "noble-m400.jpg",
				"tt100" => "3.2",  
				"hp" => "425",
				"name" => "Noble M400",  
				"url" => "http://en.wikipedia.org/wiki/Noble_M400",
				),
	13 => array( "img_name" => "ford-rs200.jpg",
				"tt100" => "3.275",  
				"hp" => "450",
				"name" => "Ford RS200",  
				"url" => "http://en.wikipedia.org/wiki/Ford_RS200",
				),
	14 => array( "img_name" => "nissan_gtr.jpg",
				"tt100" => "3.3",  
				"hp" => "485",
				"name" => "Nissan GT-R",  
				"url" => "http://en.wikipedia.org/wiki/Nissan_GT-R",
				),
	15 => array( "img_name" => "chevrolet _corvette_zr1.jpg",
				"tt100" => "3.3",  
				"hp" => "638",
				"name" => "Corvette ZR1",  
				"url" => "http://en.wikipedia.org/wiki/Corvette_ZR1",
				),
	16 => array( "img_name" => "ford_gt.jpg",
				"tt100" => "3.3",  
				"hp" => "550",
				"name" => "Ford GT",  
				"url" => "http://en.wikipedia.org/wiki/Ford_GT",
				),
	17 => array( "img_name" => "lamborghini-murcielago-LP640.jpg",
				"tt100" => "3.3",  
				"hp" => "631",
				"name" => "Lamborghini Murciélago LP640",  
				"url" => "http://en.wikipedia.org/wiki/Lamborghini_Murci%C3%A9lago",
				),
	18 => array( "img_name" => "mercedes-benz_slr_mclaren.jpg",
				"tt100" => "3.6",  
				"hp" => "617",
				"name" => "Mercedes-Benz SLR McLaren",  
				"url" => "http://en.wikipedia.org/wiki/Mercedes-Benz_SLR_McLaren",
				),
				
	19 => array( "img_name" => "tesla_roadster.jpg",
				"tt100" => "4.0",  
				"hp" => "248",
				"name" => "Tesla Roadster",  
				"url" => "http://en.wikipedia.org/wiki/Tesla_Roadster",
				),
	20 => array( "img_name" => "mitsubishi-lancer-evolution-ix-mr-fq-360.jpg",
				"tt100" => "3.9",  
				"hp" => "286",
				"name" => "Lancer Evolution IX MR FQ360",  
				"url" => "http://en.wikipedia.org/wiki/Mitsubishi_Lancer_Evolution",
				),
);

	$min = 1 ; $max = count($wp_car);
	$output = $wp_car[rand(1,$max)];

	$output_fin = '<ul class="wp_car">' . $wp_car_start . '<a rel="nofallow" title="'.$output["name"].'" href="'. $output["url"] .'"><img class="wp_car_img" src="'. get_option('home')  .'/wp-content/plugins/wp-car-sidebar/images/' 
	. $output["img_name"]. '" alt="'.  $output["name"] .' - '. $output["hp"] .' brake horsepower "  title="'.  $output["name"] .' - '. $output["hp"] .' brake horsepower" ></a>'
	. '<div id="wp_car_kcal_txt">'. $output["hp"] .'<span id="wp_car_kcal_txt_s">bhp</span></div>'
	. $wp_car_center . $output["name"] .' - '. $output["hp"] .' brake horsepower' .', '. $output["tt100"] .' sec. from  0–100 km/h ' . $wp_car_end . '</ul>';
	
	return $output_fin;
}

function wp_car(){
	
	$output = wp_get_car() ;

	echo $output;
}



add_action('plugins_loaded', 'widget_sidebar_wp_car');
function widget_sidebar_wp_car() {
	function widget_wp_car($args) {
	    extract($args);
		
		echo $before_widget;
		
		$output = wp_get_car($before_title,$after_title);
		echo $output;
		echo $after_widget;
	}
	register_sidebar_widget('WP-Car Sidebar', 'widget_wp_car');
}



