<?php

function longestWord(string $str): string
{
    $words = explode(" ", $str);
    $longest = "";
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest . " : " . strlen($longest) . " karakter";
}

$input = "Saya sangat senang mengerjakan soal algoritma";
echo longestWord($input);