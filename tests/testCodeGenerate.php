<?php require_once 'bootstrap.php';

$tf = new TOTP\TOTP('ntdxil');

while (1) {
    echo 'Code: ' . $tf->getCode() . "\r\n";
    sleep(3);
}
