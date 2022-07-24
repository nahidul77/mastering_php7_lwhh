<?php

$secretPassword = "WOW";

$message  = "This is changed secret message";

$hash = hash_hmac('sha512', $message, $secretPassword);

echo $hash; //d1f1406f53a935e2412a796f2b640682808bbdb11d4d556dfcf75a0376e3108287ec2418d4f2e483f3aa45e8395777c9aad3634ff57a99626fca6b010da12877

// print_r(hash_hmac_algos());
