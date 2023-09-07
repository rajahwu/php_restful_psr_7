<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

try {
    $response = $client->request(
        'GET',
        //* throw cleint exception
        // 'http://jsonplaceholder.typicode.com/posts/bar'
        //* throw server exception
        'https://httpbin.org/status/503'
    );

var_dump($response);
echo $response->getBody();
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n";
} catch (\GuzzleHttp\Exception\ServerException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n";
}