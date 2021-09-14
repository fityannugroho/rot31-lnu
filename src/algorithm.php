<?php

namespace Fityan\Rot31Lnu;


class Algorithm
{
    /**
     * The key
     *
     * @var array
     */
    private $key;


    public function __construct()
    {
        $this->key = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));
    }


    /**
     * Encrypt the plain text, or decrypt the chiper text.
     *
     * @param string $text The plain text, or the chiper text.
     *
     * @return string
     */
    public function crypt(string $text)
    {
        $chipertext = [];
        foreach (str_split($text) as $p) {
            $index = array_search($p, $this->key);

            // if the character is unlisted in the key
            if ($index === false) {
                array_push($chipertext, $p);
            } else {
                // get the paired key
                $keysize = count($this->key);
                $moving = $index + $keysize / 2;

                if ($moving >= $keysize) {
                    $moving -= $keysize;
                }

                $pairedKey = $this->key[$moving];

                // push the paired key to chiper
                array_push($chipertext, $pairedKey);
            }
        }

        return implode('', $chipertext);
    }
}
