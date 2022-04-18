<?php

/**
 * explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
 * Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.
 */

$pizza  = "piece1, piece2, piece3, piece4, piece5, piece6";
$pieces = explode(", ", $pizza);

print_r($pieces);

// Array
// (
//     [0] => piece1
//     [1] => piece2
//     [2] => piece3
//     [3] => piece4
//     [4] => piece5
//     [5] => piece6
// )

$pizza = join(", ", $pieces);
echo $pizza; //piece1, piece2, piece3, piece4, piece5, piece6


$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str, 3));

// Array
// (
//     [0] => one
//     [1] => two
//     [2] => three|four
// )


$str = 'one|two|three|four';

// negative limit
print_r(explode('|', $str, -2));

// Array
// (
//     [0] => one
//     [1] => two
// )