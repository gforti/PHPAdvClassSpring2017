<?php


header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json; charset=utf8");

$status_codes = array(  
                    200 => 'OK',           
                    500 => 'Internal Server Error',
                );

$status = 200;

header("HTTP/1.1 " . $status . " " . $status_codes[$status]);

$message = 'hello';

$response = array(
    "status" => $status,
    "status_message" => $status_codes[$status],
    "message" => $message    
);

echo json_encode($response, JSON_PRETTY_PRINT);

?>
