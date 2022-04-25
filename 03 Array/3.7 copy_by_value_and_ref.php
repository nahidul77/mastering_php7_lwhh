<?php
// copy by value
// deep copy
$person = array('fname' => 'Hello', 'lname' => 'world');

$newperson = $person;

$person['lname'] = 'pluto';

print_r($person);

// Array
// (
//     [fname] => Hello
//     [lname] => pluto
// )

print_r($newperson);

// Array
// (
//     [fname] => Hello
//     [lname] => world
// )


/**
 * copy by reference
 * shallow copy
 */
$oldPerson = &$person;

$person['lname'] = 'Mars';

print_r($person);

// Array
// (
//     [fname] => Hello
//     [lname] => Mars
// )

print_r($oldPerson);

// Array
// (
//     [fname] => Hello
//     [lname] => Mars
// )

$name = "xyz";

function changeName($name)
{
    return $name = "Nahidul Islam";
}

echo "New Name:" . changeName($name) . ", old name: {$name}";
//New Name:Nahidul Islam, old name: xyz


function alterName(&$name)
{
    return $name = "Nahidul Islam";
}

echo "New Name:" . alterName($name) . ", old name: {$name}";
// New Name:Nahidul Islam, old name: Nahidul Islam