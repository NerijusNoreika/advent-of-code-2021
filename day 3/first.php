<?php

$data = file('./data.txt', FILE_IGNORE_NEW_LINES);

$gamma   = '';
$epsilon = '';
$counter = [];




foreach ($data as $line) {
    foreach (str_split($line) as $index =>  $bit) {
        if (!array_key_exists($index, $counter)) {
            $counter[$index] = [];
        }
        if (!array_key_exists($bit, $counter[$index])) {
            $counter[$index][$bit] = 1;
        } else {
            $counter[$index][$bit]++;
        }
    }
}

foreach ($counter as $index) {
    $max = array_keys($index, max($index));
    $min = array_keys($index, min($index));

    $gamma .= $max[0];
    $epsilon .= $min[0];
}

echo bindec($gamma) * bindec($epsilon);
