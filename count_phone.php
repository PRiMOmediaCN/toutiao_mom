<?php
$redis=new Redis();
$redis->connect('localhost', 6379) or die ("Could not connect");
$count = $redis->get('phone_count');
if (empty($count)){
    $count=0;
    $redis->set('phone_count', $count);
}
if(!empty($_POST['call'])){
    $count++;
    $redis->set('phone_count', $count);
}
echo $count;