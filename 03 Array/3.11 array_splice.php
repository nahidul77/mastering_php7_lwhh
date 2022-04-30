<?php

/**
 * array_splice — Remove a portion of the array and replace it with something else
 * 
 * array_splice(
 *    array &$array,
 *    int $offset,
 *    ?int $length = null,
 *    mixed $replacement = []
 * ): array
 * 
 */

$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_dump($input);

// array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(5) "green"
//   }

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);

// array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(6) "yellow"
//   }

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_dump($input);

// array(2) {
//     [0]=>
//     string(3) "red"
//     [1]=>
//     string(6) "orange"
//   }

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);


// array(5) {
// [0]=>
// string(3) "red"
// [1]=>
// string(5) "green"
// [2]=>
// string(4) "blue"
// [3]=>
// string(5) "black"
// [4]=>
// string(6) "maroon"
// }


/**
 * Equivalent statements to various array_splice() examples
 */

// append two elements to $input
array_push($input, $x, $y);
array_splice($input, count($input), 0, array($x, $y));

// remove the last element of $input
array_pop($input);
array_splice($input, -1);

// remove the first element of $input
array_shift($input);
array_splice($input, 0, 1);

// insert an element at the start of $input
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));

// replace the value in $input at index $x
$input[$x] = $y; // for arrays where key equals offset
array_splice($input, $x, 1, $y);
