<?php
    // Log incoming requests to a log file
    $log_file = "/var/www/arifdemirkan.com/public_html/github_requests.log";
    file_put_contents($log_file, date('Y-m-d H:i:s') . " - Request received\n", FILE_APPEND);

    // The rest of the deploy.php code
    $output = shell_exec('cd /var/www/arifdemirkan.com/public_html && git pull 2>&1');
    file_put_contents($log_file, date('Y-m-d H:i:s') . " - Git pull output: " . $output . "\n", FILE_APPEND);
    echo "<pre>$output</pre>";
?>
