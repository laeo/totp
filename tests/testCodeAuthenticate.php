<?php require_once 'bootstrap.php';

$tf = new TOTP\TOTP('ntdxil');

echo 'TOTP Code: ';

$i = fread(STDIN, 1024);

$i = trim($i);

echo 'Received Code: ' . $i;

echo "\r\n" . 'Authenticated: ' . ($tf->auth($i) ? 'SUCCESS' : 'FAILED') . "\r\n";
