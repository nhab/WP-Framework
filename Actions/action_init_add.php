<?php
/**
description: it adds an init action on top previousely added init actions, without overwriting them.
*/
function add_my_init_method($id, $method_name) {
   add_action('init', function() use ($id, $method_name) {
      call_user_func($method_name, $id);
   });
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
description: it adds an init action on top previousely added init actions, without overwriting them.   

Examples:

function crappy_method(){
	update_option('sitemsg',get_option('site_msg').'1');
}
function even_crappier_method(){
	update_option('sitemsg',get_option('site_msg').'2');
}

action_init_add('crappy_method' );
action_init_add( 'even_crappier_method' );

*////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function action_init_add($method_name) {
 	add_my_init_method($method_name,$method_name);
}
