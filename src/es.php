<?php

namespace Baozhigang\ComposerDemo;

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$hosts = ['https://elastic:4NZqejYHoG4-8x*NNxH=@localhost:9200'];
$myCert = '/Users/baozhigang/work/es/http_ca.crt';

$cli = ClientBuilder::create()
    ->setHosts($hosts)
    ->setSSLVerification($myCert)
    ->build();

// $params = [
//     'index' => 'index_1',
//     'id' => 'id_1',
//     'body' => ['content' => 'abc']
// ];

$params = [
    'index' => 'index_1',
    'id' => 'id_1',
];

// TODO  id,index 以什么规则去设置

// $response = $cli->index($params);
$response = $cli->search();
// $response = $cli->get($params);

print_r($response);
