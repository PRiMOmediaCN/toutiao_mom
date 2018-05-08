<?php include_once "ra_global.php";
$redis = new Redis();
$redis->connect('localhost', 6379) or die ("Could not connect");
$access_token = $redis->get('momtoken');
if (empty($access_token)){
    $url="https://aip.baidubce.com/oauth/2.0/token?grant_type=client_credentials&client_id=".$AIappkey."&client_secret=".$AIsecretkey;
    $access_token=ig2tools::http_request($url);
    $access_token=json_decode($access_token,true);
    $access_token=$access_token['access_token'];
    $redis->set('momtoken', $access_token);
    $redis->EXPIRE('momtoken', 2590000);
}