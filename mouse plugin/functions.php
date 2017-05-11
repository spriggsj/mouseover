<?php




// this is the styles for the plugin
function myplugin_styles()
{
    wp_enqueue_style('mystyles', plugin_dir_url(__FILE__) . '../css/style.css', [], '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'myplugin_styles');

//this is the javascripts file for the plugin

// function myplugin_scripts(){
//
//
//
//
//   wp_register_script( 'my_js', plugin_dir_url(__FILE__) . '../js/myjs.js', array('jquery'), '', true);
//   wp_enqueue_script( 'my_js');
//
// }
// add_action( 'wp_enqueue_scripts', 'myplugin_scripts' );
//



//
