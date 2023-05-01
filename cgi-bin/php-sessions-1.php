<?php
session_start();

// Store data in the session
$name = isset($_SESSION['username']) ? $_SESSION['username'] : (isset($_POST['username']) ? $_POST['username'] : null);
if ($name !== null) {
    $_SESSION['username'] = $name;
}

// Print the HTML
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>PHP Sessions</title>';
echo '</head>';
echo '<body>';

echo '<h1>PHP Sessions Page 1</h1>';

if ($name) {
    echo "<p><b>Name:</b> $name";
} else {
    echo '<p><b>Name:</b> You do not have a name set</p>';
}
echo '<br/><br/>';
echo '<a href="/cgi-bin/php-sessions-2.php">Session Page 2</a><br/>';
echo '<a href="/php-cgiform.html">PHP CGI Form</a><br />';
echo '<form style="margin-top:30px" action="/cgi-bin/php-destroy-session.php" method="get">';
echo '<button type="submit">Destroy Session</button>';
echo '</form>';

echo '</body>';
echo '</html>';
?>
