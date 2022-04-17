<?php 

$x = 5;
$y = 5;

$result = $x <=> $y; //return 1,0,-1

if($result == 1){
    echo "{$x} is greater than {$y}";
}elseif($result == 0){
    echo "{$x} is equal to {$y}";
}elseif($result == -1){
    echo "{$x} is less than {$y}";
}