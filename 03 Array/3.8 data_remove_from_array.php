<?php

$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => 15,
    'class' => 8,
    'section' => 'B',
);

print_r($student);

// Array
// (
//     [fname] => Jamal
//     [lname] => Ahmed
//     [age] => 15
//     [class] => 8
//     [section] => B
// )

unset($student['class']);
unset($student['section']);

print_r($student);

// Array
// (
//     [fname] => Jamal
//     [lname] => Ahmed
//     [age] => 15
// )