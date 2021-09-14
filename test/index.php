<?php

use Fityan\Rot31Lnu\Algorithm;

require_once '../src/algorithm.php';


$rotLnu = new Algorithm();

$plaintext = 'Hello World!';
$chipertext = $rotLnu->crypt($plaintext);
$decyptResult = $rotLnu->crypt($chipertext);

echo 'Plaintext: ' . $plaintext . '<br>';
echo 'Chipertext: ' . $chipertext . '<br>';
echo 'Decypt Result: ' . $decyptResult . '<br>';
