<?php

$name = ""; // isset($name) = true , empty($name) = true
$name = null; // isset($name) = false, empty($name) = true
$name = 0; // isset($name) = true , empty($name) = true

if (isset($name)) {
    echo "Name is Set";
} else {
    echo "not set";
}

if (empty($name)) {
    echo "Name is empty";
} else {
    echo "not empty";
}

//best way

if (isset($name) && is_numeric($name) || $name != '') {
    echo "name is set and  its not empty";
}
