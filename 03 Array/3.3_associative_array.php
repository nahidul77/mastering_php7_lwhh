<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$keys = array_keys($age);

for($i = 0; $i < count($age); $i++){

    echo $age[$keys[$i]]. "\n";
}

// 35
// 37
// 43

$values = array_values($age);

for($i = 0; $i < count($age); $i++){

    echo $values[$i]. "\n";
}

// 35
// 37
// 43

$array = array("blue", "red", "green", "blue", "blue");

/**
 * array_keys(array $array): array
 * array_keys(array $array, mixed $search_value, bool $strict = false): array
 * 
 * array_keys() returns the keys, numeric and string, from the array.
 * If a search_value is specified, then only the keys for that value are returned. 
 * Otherwise, all the keys from the array are returned.
 */

print_r(array_keys($array));

// Array
// (
//     [0] => 0
//     [1] => 1
//     [2] => 2
//     [3] => 3
//     [4] => 4
// )

print_r(array_keys($array, 'blue'));

// Array
// (
//     [0] => 0
//     [1] => 3
//     [2] => 4
// )


/**
 * array_values(array $array): array
 * 
 * array_values() returns all the values from the array and indexes the array numerically.
 */

$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

// Array
// (
//     [0] => XL
//     [1] => gold
// )