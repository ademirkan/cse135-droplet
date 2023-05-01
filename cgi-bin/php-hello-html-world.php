<?php
header('Cache-Control: no-cache');
header('Content-type: text/html');

echo "<html>";
echo "<head>";
echo "<title>Hello, PHP!</title>";
echo "</head>";
echo "<body>";

echo "<h1>Arif was here - Hello, PHP!</h1>";
echo "<p>This page was generated with the PHP programming language</p>";

$date = date('Y-m-d H:i:s');
echo "<p>Current Time: $date</p>";

$address = $_SERVER['REMOTE_ADDR'];
echo "<p>Your IP Address: $address</p>";

echo "</body>";
echo "</html>";
?>
