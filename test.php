<?php

include 'vendor/autoload.php';

use PFinal\Ip2Region\Ip2Region;

$ip2region = new Ip2Region();

$ip = '202.96.128.86';

$info = $ip2region->btreeSearch($ip);

var_dump($info);

//array(2) { ["city_id"]=> int(2140) ["region"]=> string(40) "中国|华南|广东省|广州市|电信" }