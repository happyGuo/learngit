<?php
$mem = new Memcache();
$mem->connect('192.168.0.230',11211);
if(!$mem) die('connect faild');
$arr = ['name' => 'zhangsan', 'age' => 24];
$mem->set('test',$arr,0,30);
print_r($mem->getStats());