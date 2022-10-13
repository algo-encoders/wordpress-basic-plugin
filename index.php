<?php

/*
Plugin Name: Clean Expo Custom
*/

if(!defined('ABSPATH')) die;

global $clxp_dir, $clxp_url;


$clxp_dir = plugin_dir_path( __FILE__ );
$clxp_url = plugin_dir_url( __FILE__ );


include('inc/functions.php');

add_action('wp_head', 'clxp_register_fonts' , 0);
add_action('wp_enqueue_scripts', 'clxp_register_scripts');