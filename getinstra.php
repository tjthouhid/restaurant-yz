<?php
  function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
  //$result = fetchData("https://api.instagram.com/v1/users/ID-GOES-HERE/media/recent/?access_token=TOKEN-GOES-HERE");
  //https://api.instagram.com/oauth/authorize/?client_id=49e4c2e4e35042dd832bdf68705afd15&redirect_uri=http://localhost/retaurant-yz/getinstra.php&response_type=token&scope=basic+public_content+follower_list+comments+relationships+likes
  //token == 1403537611.49e4c2e.049b51da3bfb4f42ab9301eab610b6d7
  $result = fetchData("https://api.instagram.com/v1/users/tjthouhid/media/recent/?1403537611.49e4c2e.049b51da3bfb4f42ab9301eab610b6d7");
  //https://api.instagram.com/v1/users/self/media/recent?access_token=1403537611.49e4c2e.049b51da3bfb4f42ab9301eab610b6d7&count=3
  $result = json_decode($result);
  foreach ($result->data as $post) {
    // Do something with this data.
  }
?>