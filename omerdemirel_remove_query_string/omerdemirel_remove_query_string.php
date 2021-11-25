
<?php
/*
Plugin Name: OmerDemirel Query String'leri Kaldırma
Plugin URI:  https://omerdemirel.com.tr/query-string/
Description: Wordpress Query String'leri Kaldırma
Version:     1.0
Author:      Ömer Faruk Demirel
Author URI:  omerdemirel.com.tr
License:     GNU
License URI: https://www.gnu.org/licenses/gpl-3.0.tr.html
*/

function tn_remove_css_js_ver( $src ) { 
    if( strpos( $src, '?ver=' ) ) 
        $src = remove_query_arg( 'ver', $src ); 
        return $src; 
    } 
function tn_remove_css_js() { 
    if (!is_admin()) { 
        add_filter( 'style_loader_src', 'tn_remove_css_js_ver', 10, 2 ); 
        add_filter( 'script_loader_src', 'tn_remove_css_js_ver', 10, 2 ); 
    } 
} 
add_action('init', 'tn_remove_css_js');