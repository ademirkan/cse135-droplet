<?php
// Set headers to disable caching and specify content type as JSON
header("Cache-Control: no-cache");
header("Content-type: application/json");

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Get the client's IP address
$address = $_SERVER['REMOTE_ADDR'];

// Create an associative array with the required data
$message = array(
    'title' => 'Hello, PHP!',
    'heading' => 'Hello, PHP!',
    'message' => 'This page was generated with the PHP programming language',
    'time' => $date,
    'IP' => $address
);

// Encode the array as a JSON string
$json = json_encode($message);

// Output the JSON string
echo $json;
?>
