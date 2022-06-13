<?php

function custom_error_handler($severity, $msg, $file, $line)
{
    echo "Error [{$severity}]: {$msg} in {$file} on line Number {$line} \n";
}

// set_error_handler('custom_error_handler'); // register custom error handler

// trigger_error('this an trigger error'); // showing custom error

// echo $cat;

function division($divident, $divisor)
{
    if ($divisor == 0) {
        trigger_error("Divisor cannot be 0");
    } else {
        return $divident / $divisor;
    }
}


// echo division(8, 0);  // showing trigger error
