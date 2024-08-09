<?php

function countOccurences(array $input, array $query): array
{
    $output = [];
    foreach ($query as $q) {
        $count = 0;
        foreach ($input as $i) {
            if ($i === $q) {
                $count++;
            }
        }
        $output[] = $count;
    }
    return $output;
}

//function countOccurences(array $input, array $query): array
//{
//    $output = [];
//    $count = array_count_values($input);
//    foreach ($query as $value) {
//        if (array_key_exists($value, $count)) {
//            $output[] = $count[$value];
//        } else {
//            $output[] = 0;
//        }
//    }
//    return $output;
//}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];
print_r(countOccurences($input, $query));