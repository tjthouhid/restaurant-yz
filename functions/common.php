<?php 
define("ENVR",false);
function get_current_path(){
 $complete_path = $_SERVER['SCRIPT_FILENAME'];
 $url_arry=array_reverse(explode("/", $complete_path)); 
 return $url_arry[0];
}
function get_server_url($dev=false){
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
   if($dev==true){
    $folder="restaurant-yz/";
   }else{
    $folder="";
   }
  $url = $protocol . $_SERVER['HTTP_HOST'] ."/".$folder;
  return $url; // Outputs: Full URL
}


$current_url=get_current_path();
$site_url=get_server_url(ENVR);
?>