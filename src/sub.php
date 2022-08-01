<?php

ini_set('default_socket_timeout', -1);

$redis = new Redis();
$status = $redis->connect('127.0.0.1', 6379);
if (!$status) {
    throw new Exception("Redis 连接失败", 1);
}

function callb($redis, $chan, $msg) {
    if ($chan == 'chan-1') {
        file_put_contents('a.txt', $msg);
    }
}

$res = $redis->subscribe(['chan-1'], 'callb');

//
// var_dump($res);
