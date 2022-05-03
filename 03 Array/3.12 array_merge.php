<?php
$fruits = array('apple', 'mango', 'orange', 'plum', 'dates', 'banana');

$random = array('a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 12 => 78, 'e' => 77);

$newFruits1 = array_slice($fruits, 0, 3);
$newFruits2 = array_slice($fruits, 3);

$newFruits = array_merge($newFruits1, $newFruits2);

print_r($newFruits1);
// Array
// (
//     [0] => apple
//     [1] => mango
//     [2] => orange
// )
print_r($newFruits2);

// Array
// (
//     [0] => plum
//     [1] => dates
//     [2] => banana
// )
print_r($newFruits);

// Array
// (
//     [0] => apple
//     [1] => mango
//     [2] => orange
//     [3] => plum
//     [4] => dates
//     [5] => banana
// )

$newFruitsPlus = $newFruits1 + $newFruits2;

print_r($newFruitsPlus);

// Array
// (
//     [0] => apple
//     [1] => mango
//     [2] => orange
// )

/**
 *  if $newFruits2 = array_slice($fruits, 3, null, true);
 * then key would be preserved
 */

// Array
// (
//     [0] => apple
//     [1] => mango
//     [2] => orange
//     [3] => plum
//     [4] => dates
//     [5] => banana
// )


// array_splice($random, 2, 2, array('j' => 40, 'k' => 50));

// print_r($random);

// Key not preserved
// Array
// (
//     [a] => 12
//     [b] => 45
//     [0] => 40
//     [1] => 50
//     [2] => 78
//     [e] => 77
// )

$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array('j' => 40, 'k' => 50);

print_r($r1 + $r2 + $r3);

// Array
// (
//     [a] => 12
//     [b] => 45
//     [12] => 78
//     [e] => 77
//     [j] => 40
//     [k] => 50
// )
