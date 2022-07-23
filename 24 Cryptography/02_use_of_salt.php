<?php

$salt = "This1sS@lt";

$password = 'secret';

$hash = md5($password . $salt);

// echo $hash; // 8d502ffe22fece8dd65766fc0ab16e2b

$userInput = "secret";

if (md5($userInput . $salt == "8d502ffe22fece8dd65766fc0ab16e2b")) {
    echo "Password correct";
} else {
    echo "Password Incorrect";
}
