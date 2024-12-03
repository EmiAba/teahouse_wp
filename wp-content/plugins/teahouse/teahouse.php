<?php
/**
 * Plugin Name: Teahouse
 * Version: 0.1
 */

 if ( !defined ( 'TEAHOUSE_PLUGIN_VERSION' ) ){
    define( 'TEAHOUSE_PLUGIN_VERSION', '0.1' );
 }

 if ( !defined ('TEAHOUSE_PLUGIN_ASSETS_URL' ) ){
    define( 'TEAHOUSE_PLUGIN_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets' );
 }

require 'includes/cpt-products.php';
require 'includes/cpt-testimonial.php';
require 'includes/func.php';