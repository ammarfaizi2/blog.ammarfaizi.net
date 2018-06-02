<?php
/**
* Plugin Name: LH Multisite CORS
* Plugin URI: https://lhero.org/plugins/lh-multisite-cors/
* Version: 1.02
* Author: Peter Shaw
* Author URI: https://shawfactor.com
* Description: Sets the CORS allow headers for requests between sites within your multisite network
* License: GPL2
*/



/**
* LH Multisite CORS Class
*/

if (!class_exists('LH_multisite_cors_plugin')) {

class LH_multisite_cors_plugin {

private function check_blog($blog){

global $wpdb;

$domain = $wpdb->get_results( "SELECT domain FROM ".$wpdb->blogs." where domain ='".$blog."' and spam = '0' LIMIT 1");

if (isset($domain[0]->domain)){

return true;

} else {

return false;


}

}

private function check_mapped_domain($mapped){

global $wpdb;

$domain = $wpdb->get_results( "SELECT a.domain FROM ".$wpdb->dmtable." a, ".$wpdb->blogs." b where a.blog_id = b.blog_id and a.domain = '".$mapped."'");

if (isset($domain[0]->domain)){

return true;

} else {

return false;


}

}

public function add_header() {

  if (isset($_SERVER['HTTP_REFERER'])){

	$referrer = $_SERVER['HTTP_REFERER'];
	

$bits = parse_url($referrer);

	if (isset($bits['host'])){ $referrer_domain = $bits['host']; }
	if (isset($bits['scheme'])){ $referrer_scheme = $bits['scheme']; }
 
  }


  if (isset($referrer_domain) and isset($referrer_scheme)){

if (isset($_SERVER['HTTP_ORIGIN'])){
  
$origin = $_SERVER['HTTP_ORIGIN'];

}

$pieces = parse_url(site_url());

$site_domain = $pieces['host'];
$site_scheme = $pieces['scheme'];

if ($referrer_scheme != $site_scheme){

//The protocols don't match
return;

} elseif ($site_domain == $referrer_domain){

//the referrer is part of the same domain


} elseif ($this->check_blog($referrer_domain)){

//It is is part of the multisite
header("Access-Control-Allow-Origin:".$referrer_scheme."://".$referrer_domain); 
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS,PUT,DELETE');


} elseif ($this->check_mapped_domain($referrer_domain)){

//It is a mapped domain
header("Access-Control-Allow-Origin:".$referrer_scheme."://".$referrer_domain); 
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS,PUT,DELETE');

} else {

//No match
return;


}
  }

}

public function __construct() {

add_action( 'wp_loaded', array($this,"add_header"));

}

}

$lh_multisite_cors_instance = new LH_multisite_cors_plugin();

}


?>