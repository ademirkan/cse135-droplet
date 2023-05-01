<?php
header("Cache-Control: no-cache");
header("Content-type: text/html");

// Print HTML file top
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <hr>
HTML;

// HTTP Protocol, HTTP Method, and the Query String are all available in the $_SERVER array
echo "<p><b>HTTP Protocol:</b> " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
echo "<p><b>HTTP Method:</b> " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p><b>Query String:</b> " . $_SERVER['QUERY_STRING'] . "</p>";

// Read the Message Body from 'php://input'
$message_body = file_get_contents('php://input');

echo "<p><b>Message Body:</b> " . htmlspecialchars($message_body) . "</p>";

// Print the HTML file bottom
echo "</body></html>";
