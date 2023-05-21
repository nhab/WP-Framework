<?php
/**
plugin name: add_init_action
description: it adds an init action on top previousely added init actions, without overwriting them.
*/

function add_my_init_method($id, $method_name) {
   add_action('init', function() use ($id, $method_name) {
      call_user_func($method_name, $id);
   });
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*

Summary: it adds an init action on top previousely added init actions, without overwriting them.   

Examples:

function crappy_method(){
	update_option('sitemsg',get_option('site_msg').'c');
}
function even_crappier_method(){
	update_option('sitemsg',get_option('site_msg').'C');
}

add_init_method('crappy_method' );
add_init_method( 'even_crappier_method' );

*////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function add_init_action($method_name) {
 add_my_init_method($method_name,$method_name);
}
