<?php

function reverseString(string $str): string
{
    function reverseAlphabet(array $matches): string
    {
        return strrev($matches[0]);
    }

    $pattern = '/[a-z]+/i';
    $result = preg_replace_callback($pattern, 'reverseAlphabet', $str);
    return $result;
}

$input = "NEGIE1...NEGIE2";
echo reverseString($input);
