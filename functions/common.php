<?php 
define("ENVR",TRUE);
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
function fetchData($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
$result_ins = fetchData("https://api.instagram.com/v1/users/self/media/recent?access_token=1403537611.49e4c2e.049b51da3bfb4f42ab9301eab610b6d7&count=4");

$result_ins = json_decode($result_ins);
$current_url=get_current_path();
$site_url=get_server_url(ENVR);
?>