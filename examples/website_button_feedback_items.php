<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Usabilla\API\Client\UsabillaClient;

if ($argc !== 3) {
    die('Usage: ' . basename(__FILE__) . ' [access-key] [secret-key]' . PHP_EOL);
}

$client = new UsabillaClient($argv[1], $argv[2]);
$iterator = $client->getIterator('GetWebsiteFeedbackItems');
foreach ($iterator as $item) {
    print_r($item);
}