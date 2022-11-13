<?php
/**
 * It is used to replace the ternary operation in conjunction with isset() function. 
 * The Null coalescing operator returns its first operand if it exists and is not NULL;
 * otherwise it returns its second operand.
 
 */

$default_lat = 10.5;

$user_lat = 12.5;

// $lat = isset($user_lat) ? $user_lat : $default_lat ;

$lat = $user_lat ?? $default_lat ;

echo $lat ;
