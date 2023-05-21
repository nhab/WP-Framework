if(!function_exists('option_msg')){
  function option_msg($msg){
    $oldermsgs=get_option('site_msg');
    if($oldermsgs!=null)
      update_option('site_msg', $oldermsgs.$msg);
    ele
      add_option('site_msg', $msg);
  }
}

if(!function_exists('option_exists')){
  function option_exists( $option_name, $site_wide = false ) {
    global $wpdb; 
    return $wpdb->query( $wpdb->prepare( "SELECT * FROM ". ($site_wide ? $wpdb->base_prefix : $wpdb->prefix). "options WHERE option_name ='%s' LIMIT 1", $option_name ) );
  }
}
