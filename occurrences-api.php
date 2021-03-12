<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

foreach ($_POST as $name => $value) {
    $$name = htmlspecialchars($value);
}

if(isset($token) && strlen($token) > 0){
    $accessToken = $token;
} else {
    $accessToken = "5f8a9dfb8f20fee3752de75b76e7663a"; // token default da Contém
}

$client = new Client([
    "base_uri" => "https://entrepontos.eslcloud.com.br/",
]);

$headers = [
    "Authorization" => "Token $accessToken",
    "Accept" => "application/json",
];

$request = new Request(
    "GET",
    "api/customer/invoice_occurrences?$parametro=$valor",
    $headers
);

$testResponse = $client->request("GET", "/", ["http_errors" => false]);
if ($testResponse->getStatusCode() == 200) {
    try {
        $response = $client->send($request);
        header("Content-Type: application/json");
        print $response->getBody()->getContents();
    } catch (Exception $e) {
        header("Content-type: text/html; charset=UTF-8");
        echo "<pre>";
        echo $e->getMessage();
        echo "<br/>";
        echo $e->xdebug_message;
        echo "</pre>";
    }
}

return;
