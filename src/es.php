<?php

namespace Baozhigang\ComposerDemo;

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$hosts = [
    'http://elastic:-ytQ=gCj0+HPvIfNdEFL@10.1.1.64:9200/',
    // '10.1.1.64:9200',
];

$cli = ClientBuilder::create()
    ->setHosts($hosts)
    ->build();

$params = [
    'index' => '.ds-logs-my_app-default-2022.03.08-000001',
    'id'    => '9GhOaX8B-034dwU1qNiC'
];

$response = $cli->get($params);
print_r($response);



