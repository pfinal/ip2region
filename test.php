<?php

include 'vendor/autoload.php';

use PFinal\Ip2Region\Ip2Region;

$ip2region = new Ip2Region();

$ip = '180.173.2.175';

$info = $ip2region->btreeSearch($ip);

var_dump($info);

//array(2) { ["city_id"]=> int(995) ["region"]=> string(40) "中国|华东|上海市|上海市|电信" }