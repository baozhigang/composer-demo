<?php

$redis = new Redis();
$status = $redis->connect('127.0.0.1', 6379);
if (!$status) {
    throw new Exception("Redis 连接失败", 1);
}

$res = $redis->publish('chan-1', 'hello');
var_dump($res);
