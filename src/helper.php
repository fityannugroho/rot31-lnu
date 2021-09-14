<?php

use Fityan\Rot31Lnu\Algorithm;

require_once 'algorithm.php';


if (!function_exists('rot31lnu_crypt')) {
    /**
     * Global function to provide encryption or decryption with ROT31-LNU.
     *
     * @param string $text The plain text, or the chiper text.
     *
     * @return string
     */

    function rot31lnu_crypt(string $text)
    {
        $rotlnu = new Algorithm();
        return $rotlnu->crypt($text);
    }
}
