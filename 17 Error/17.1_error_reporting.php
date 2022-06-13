<?php
# php --ini (check php ini files)

# php ini > display_errors = off

# ini_set("display_errors", 0);

// error_reporting(0); // Display error off
// error_reporting(E_ALL); // Show all error
// error_reporting(E_WARNING); // Show warning error
// error_reporting(E_NOTICE); // Show notice error
error_reporting(E_NOTICE | E_WARNING); // Show warning and notice error
echo $book;
