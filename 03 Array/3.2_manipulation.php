<?php

$teachers = ["nahid", "tonoy", "sofiq"];

/**
 * array_pop(array &$array): mixed
 * array_pop() pops and returns the value of the last element of array, shortening the array by one element.
 */

 $teacher = array_pop($teachers);

 echo $teacher; //sofiq
 print_r($teachers);

//  Array
//  (
//      [0] => nahid
//      [1] => tonoy
//  )


$teachers = ["nahid", "tonoy", "sofiq"];

/**
 * array_shift(array &$array): mixed
 * array_shift() shifts the first value of the array off and returns it, shortening the array by one element and moving everything down. 
 * All numerical array keys will be modified to start counting from zero while literal keys won't be affected.
 */

$teacher = array_shift($teachers);

echo $teacher; //nahid
print_r($teachers);

//  Array
//  (
//      [0] => tonoy
//      [1] => sofiq
//  )


$teachers = ["nahid", "tonoy", "sofiq"];

/**
 * array_push(array &$array, mixed ...$values): int
 * array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
 * The length of array increases by the number of variables pushed. Has the same effect as: $array[] = $var;
 * Returns the new number of elements in the array.
 */

print_r(array_push($teachers, 'Minhaz')); //4
print_r(array_push($teachers, 'alom', 'rofiq')); //6

print_r($teachers);

// Array
// (
//     [0] => nahid
//     [1] => tonoy
//     [2] => sofiq
//     [3] => Minhaz
//     [4] => alom
//     [5] => rofiq
// )

$teachers = ["nahid", "tonoy", "sofiq"];

/**
 * array_unshift(array &$array, mixed ...$values): int
 * array_unshift() prepends passed elements to the front of the array.  
 * All numerical array keys will be modified to start counting from zero while literal keys won't be changed.
 * Returns the new number of elements in the array.
 */

print_r(array_unshift($teachers, 'Minhaz')); //4
print_r(array_unshift($teachers, 'alom', 'rofiq')); //6

print_r($teachers);

// Array
// (
//     [0] => alom
//     [1] => rofiq
//     [2] => Minhaz
//     [3] => nahid
//     [4] => tonoy
//     [5] => sofiq
// )