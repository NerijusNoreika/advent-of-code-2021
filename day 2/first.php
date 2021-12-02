<?php

$data = file('./data.txt');

const UP        = 'up';
CONST DOWN      = 'down';
CONST FORWARD   = 'forward';

$depth = $distance = 0;

foreach($data as $line) {
    [$direction, $size] = explode(' ', $line);

    $direction = trim($direction);
    $size = (int)trim($size);

    switch ($direction) {
        case UP:
            $depth -= $size;
            break;
        case DOWN:
            $depth += $size;
            break;
        case FORWARD:
            $distance += $size;
            break;
        default:
            break;
    }
}

echo $depth * $distance;
