<?php

/*
 * At the simplest level, you are setting the headers to send JSON
 * then populating the response with data. Then echo out the array
 * to a json.  Any application that access this page will be able to
 * get the JSON and process the data how they like.
 */
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
