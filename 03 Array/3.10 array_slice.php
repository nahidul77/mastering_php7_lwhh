<?php

/**
 * array_slice(
 *   array $array,
 *   int $offset,
 *   ?int $length = null,
 *   bool $preserve_keys = false
 *   ): array
 * 
 * array_slice() returns the sequence of elements from the array array as specified by the offset and length parameters.
 * 
 */


$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
print_r(array_slice($input, -4, -1));

// Array
// (
//     [0] => b
//     [1] => c
//     [2] => d
// )

print_r(array_slice($input, 2, -1));

// Array
// (
//     [0] => c
//     [1] => d
// )

print_r(array_slice($input, 2, -1, true));

// Array
// (
//     [2] => c
//     [3] => d
// )

$random = array('a' => 12, 'b' => 45, 'c' => 20, 12 => 18, 'd' => 32);

print_r(array_slice($random, 1, null, true));

// Array
// (
//     [b] => 45
//     [c] => 20
//     [12] => 18
//     [d] => 32
// )
