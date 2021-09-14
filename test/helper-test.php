<?php

require_once '../src/helper.php';

$plaintext = 'Hello World!';
$chipertext = rot31lnu_crypt($plaintext);
$decyptResult = rot31lnu_crypt($chipertext);

echo 'Plaintext: ' . $plaintext . '<br>';
echo 'Chipertext: ' . $chipertext . '<br>';
echo 'Decypt Result: ' . $decyptResult . '<br>';
