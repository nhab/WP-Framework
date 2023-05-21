<?php

if (!function_exists('option_exists')){
	function option_exists( $option_name, $site_wide = false ) {
      global $wpdb; 
	    $prefix= ($site_wide ? $wpdb->base_prefix : $wpdb->prefix);
			$query_rest="options WHERE option_name ='%s' LIMIT 1" ;
			$r= $wpdb->query( $wpdb->prepare( "SELECT * FROM ".$prefix.$query_rest, $option_name));
		
			
			return $r;
  }
}

if (!function_exists('option_msg')){
	function option_msg($msg){
		//$msg=$msg.get_option('site_msg');
		update_option('site_msg', get_option('site_msg'));
	}
}
