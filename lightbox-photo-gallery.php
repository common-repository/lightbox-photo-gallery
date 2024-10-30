<?php 
/*
Plugin Name: Lightbox Photo Gallery
Plugin URI: http://smartcatdesign.net/lightbox-photo-gallery/
Description: Quickest and Easiest way to create an appealing photo gallery. Just add the shortcode [ll-gallery]
Author: smartcat
Version: 1.0
Author URI: http://smartcatdesign.net
contact: info@smartcatdesign.net
*/


 
include("libs/class.plugin.php");

$ll_plugindir = str_replace('\\','/',dirname(__FILE__));
$ll_plugin = new ll_plugin(end(explode('/',$ll_plugindir)));
define('ll__DIR',$ll__plugindir); 

function ll_header(){

    $wssopt = get_option('ll_opt');
	if(false != $wssopt){
		extract($wssopt);
	}
    
	if(!$disable){
           
        ?>
    <style type="text/css">
    /********* common css for all box********/
	
	.ll-wrapper{
		background: <?php echo $background_color ?> !important;
	}
	
    </style>
	<div id="ll-dim"></div>	
    <div id="ll-lightbox">
		<div class="ll-theimage"></div>
		<div class="ll-close"></div>
	</div>
    <?php      
    }

}
function ll_sliders(){
    $wssopt = get_option('ll_opt');
	if(false != $wssopt){
		extract($wssopt);
	}
	if(!$disable){             
		if(empty($spos))$spos= 50;
		if(empty($icon_box_width))$icon_box_width= 100;
		if(empty($icon_box_height))$icon_box_height= 100;
		if($position=='')$pos="left";else $pos=$position;
		include("tpls/".$pos.".php");
    }   
}
 
function ll_menu(){
    add_menu_page("Lightbox Photo Gallery","Lightbox Photo Gallery","administrator",'ll_panel','ll_settings');
            
}
function ll_settings(){
    include("tpls/settings.php");
}
function ll_save_settings(){
    update_option('ll_opt',$_POST['ll__opt']);
    die('Options Updated');
}


function ll_scripts(){
    global $ll_plugin;
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-form');
    $ll_plugin->load_scripts(); 
    $ll_plugin->load_styles(); 
}
 
 
 if(is_admin()){
     add_action("admin_menu","ll_menu");
 }
 
 function lightbox_gallery($atts){
    extract( shortcode_atts( array(
	), $atts ) );
	
	$wssopt = get_option('ll_opt');
	if(false != $wssopt){
		extract($wssopt);
	}
	$output = "<div class='ll-wrapper'>"
				. "<div class='ll-img1 ll-img'>
					<img src= '" . $image1_url . "' />
					<div class='ll-overlay'></div>
				   </div>
				 ";
	$output .= "<div class='ll-img2 mid ll-img'>
					<img src= '" . $image2_url . "' />
				   </div>
				 ";
	$output .= "<div class='ll-img3 ll-img'>
					<img src= '" . $image3_url . "' />
				   </div>
				 ";
	$output .= "<div class='ll-img4 ll-img'>
					<img src= '" . $image4_url . "' />
				   </div>
				 ";
	$output .= "<div class='ll-img5 mid ll-img'>
					<img src= '" . $image5_url . "' />
				   </div>
				 ";
	$output .= "<div class='ll-img6 ll-img'>
					<img src= '" . $image6_url . "' />
				   </div></div>
				 ";
	return $output; 
 }

$ll_plugin->load_modules(); 

add_action('wp_enqueue_scripts','ll_scripts');
add_action('admin_enqueue_scripts','ll_scripts');
add_action('wp_head','ll_header');
add_action('wp_footer','ll_sliders');
add_action('wp_ajax_ll_save_settings','ll_save_settings');
add_shortcode( 'll-gallery', 'lightbox_gallery' );
 