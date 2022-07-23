<?php
# its run everytime script end

ini_set('display_errors', 0);
ini_set('memory_limit', '1M');

register_shutdown_function('fatal_error_handler');

function fatal_error_handler()
{
    $error = error_get_last();

    if ($error) {
        echo 'Fatal Error Happened ';
    }
}

// no_function();  //showing the error message

// function recursion()
// {
//     recursion();
// }


echo str_repeat('*', 2 ** 2);
