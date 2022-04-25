<?php

use function PHPSTORM_META\map;

$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => 15,
    'class' => 8,
    'section' => 'B',
);

echo $student['fname'] . " " . $student['lname'] . "\n";
printf("%s %s \n", $student['fname'], $student['lname']);


$serialized = serialize($student);
echo $serialized . PHP_EOL;

$newStudent = unserialize($serialized);
print_r($newStudent);

$jsondata = json_encode($student);
echo $jsondata . PHP_EOL;

// $student2 = json_decode($jsondata); // return stdClass object
$student2 = json_decode($jsondata, true); // return array
print_r($student2);
