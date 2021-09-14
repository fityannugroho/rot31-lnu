<?php

require_once '../src/helper.php';

$plaintext = 'Hello World!';
$ciphertext = rot31lnu_crypt($plaintext);
$decyptResult = rot31lnu_crypt($ciphertext);

echo 'Plaintext: ' . $plaintext . '<br>';
echo 'ciphertext: ' . $ciphertext . '<br>';
echo 'Decypt Result: ' . $decyptResult . '<br>';
