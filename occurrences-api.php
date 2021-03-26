<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

foreach ($_POST as $name => $value) {
    $$name = htmlspecialchars($value);
}

if (isset($token) && strlen($token) > 0) {
    $accessToken = $token;
} else {
    $accessToken = "neWzBjexSxtsieQ1mv_esjPzG7s1mLCYTz_exX4cJ8AxA3it3YL2Vg"; // token entrepontos
}

$client = new Client([
    "base_uri" => "https://entrepontos.eslcloud.com.br/",
]);

$headers = [
    "Authorization" => "Token $accessToken",
    "Accept" => "application/json",
];

if (isset($parametro)) {
    $request = new Request(
        "GET",
        "api/invoice_occurrences?$parametro=$valor",
        $headers
    );
} else {
    $request = new Request(
        "GET",
        "api/invoice_occurrences",
        $headers
    );
}

$testResponse = $client->request("GET", "/", ["http_errors" => false]);
if ($testResponse->getStatusCode() == 200) {
    try {
        $response = $client->send($request);
        $return = $response->getBody()->getContents();
    } catch (Exception $e) {
        header("Content-type: text/html; charset=UTF-8");
        echo "<pre>";
        echo $e->getMessage();
        echo "<br/>";
        echo $e->xdebug_message;
        echo "</pre>";
        die();
    }
}

if (isset($tipo) && $tipo == 'json') {
    header("Content-type: application/json; charset=UTF-8");
    print $return;
} else {
    session_start();
    $_SESSION["occurrences_data"] = $return;
    header("Location: occurrences-template.php");
    die();
}

return;

/**
 * JSON data to html table
 * @param object $data
 */
function jsonToTable($data)
{
    $table = '
    <table class="json-table" width="100%" border="1">
    ';
    foreach ($data as $key => $value) {
        $table .= '
        <tr valign="top">
        ';
        if (!is_numeric($key)) {
            $table .= '
            <td>
                <strong>' . $key . ':</strong>
            </td>
            <td>
            ';
        } else {
            $table .= '
            <td colspan="2">
            ';
        }
        if (is_object($value) || is_array($value)) {
            $table .= jsonToTable($value);
        } else {
            $table .= $value;
        }
        $table .= '
            </td>
        </tr>
        ';
    }
    $table .= '
    </table>
    ';
    return $table;
}
