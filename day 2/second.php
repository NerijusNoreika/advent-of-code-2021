<?php

$data = file('./data.txt');

const UP = 'up';
CONST DOWN = 'down';
CONST FORWARD = 'forward';

$depth       = 0;
$distance    = 0;
$aim         = 0;

foreach($data as $line) {
    [$direction, $size] = explode(' ', $line);

    $direction = trim($direction);
    $size = (int)trim($size);
    
    switch ($direction) {
        case UP:
            $aim -= $size;
            break;
        case DOWN:
            $aim += $size;
            break;
        case FORWARD:
            $distance += $size;
            $depth += $aim * $size;
            break;
        default:
            break;
    }
}

echo $depth * $distance;
