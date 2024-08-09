<?php

function diagonalDiff(array $matrix): int
{
    $n = count($matrix);
    $ltor = 0;
    $rtol = 0;
    for ($i = 0; $i < $n; $i++) {
        $ltor += $matrix[$i][$i];
        $rtol += $matrix[$i][$n - $i - 1];
    }
    return $ltor - $rtol;
}

$matrix = [
    [1, 2, 0],
    [4, 5, 6],
    [7, 8, 9]
];
echo diagonalDiff($matrix);