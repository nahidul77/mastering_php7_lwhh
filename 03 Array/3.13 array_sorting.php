<?php
$fruits = array('a' => 'apple', 'mango', 'orange', 'plum', 'dates', 'banana');

// sort($fruits);

// print_r($fruits);

// Key doesn't preserved
// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => dates
//     [3] => mango
//     [4] => orange
//     [5] => plum
// )

asort($fruits);

print_r($fruits);

// Array
// (
//     [a] => apple
//     [4] => banana
//     [3] => dates
//     [0] => mango
//     [1] => orange
//     [2] => plum
// )

$numbers = array(10, 1, 9, 2, 8, 3, 7, 4, 6, 5);

// sort($numbers);

// print_r($numbers);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
//     [5] => 6
//     [6] => 7
//     [7] => 8
//     [8] => 9
//     [9] => 10
//)

arsort($numbers);

print_r($numbers);

// Reserve Sort.
// Array
// (
//     [0] => 10
//     [2] => 9
//     [4] => 8
//     [6] => 7
//     [8] => 6
//     [9] => 5
//     [7] => 4
//     [5] => 3
//     [3] => 2
//     [1] => 1
// )