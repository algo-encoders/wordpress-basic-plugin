<?php

if(!defined('ABSPATH')) die;


if(!function_exists('pree')){
    function pree($d){
        echo "<pre>";
        print_r($d);
        echo "</pre>";
    }
}


if(!function_exists('clxp_register_fonts')){
    
        function clxp_register_fonts(){

            // Remove return if you want to add custom fonts just put fonts in upload folder and add style here
            return;
       
           ?>
           
           
            <style>
                
                
                @font-face {
                    font-family: 'Proxima Nova';
                    src: url('/wp-content/uploads/custom_fonts/ProximaNova-Bold.woff2') format('woff2'),
                        url('/wp-content/uploads/custom_fonts/ProximaNova-Bold.woff') format('woff');
                    font-weight: bold;
                    font-style: normal;
                    font-display: auto;
                }
               
                .proximan-nova{font-family: 'Proxima Nova' !important;}
                
            </style>
           
           
           <?php
        
        }
}

if(!function_exists('clxp_register_scripts')){
    
    function clxp_register_scripts() {
    
        global $clxp_url;
    
   	
    	wp_register_style( 'clxp_custom_style', "{$clxp_url}/assets/css/style.css", false );
    	wp_enqueue_style ( 'clxp_custom_style');
    	wp_enqueue_script( 'clxp_custom_script', "{$clxp_url}/assets/js/script.js", array(), time() );
    	
    	$local_array = [
    	        'ajaxurl' => admin_url( 'admin-ajax.php'),
    	    ];
    	
    	wp_localize_script('clxp_custom_script', 'clxp_obj', $local_array);
    
    
    }
    
}





