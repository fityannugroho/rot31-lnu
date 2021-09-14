<?php

use Fityan\Rot31Lnu\Algorithm;

require_once '../src/algorithm.php';


$rot31Lnu = new Algorithm();

$plaintext = 'Hello World!';
$ciphertext = $rot31Lnu->crypt($plaintext);
$decyptResult = $rot31Lnu->crypt($ciphertext);

echo 'Plaintext: ' . $plaintext . '<br>';
echo 'ciphertext: ' . $ciphertext . '<br>';
echo 'Decypt Result: ' . $decyptResult . '<br>';
