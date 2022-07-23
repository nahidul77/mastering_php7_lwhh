<?php

$password = 'secret';

$hash = md5($password);


$userInput = md5("secret");

if (hash_equals($hash, $userInput)) {
    echo "Password correct";
} else {
    echo "Password Incorrect";
}
