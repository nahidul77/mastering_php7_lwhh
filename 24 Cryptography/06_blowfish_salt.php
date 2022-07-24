<?php

$message = "This is a secret message";

$blowfish_salt = "$2y$10$" . bin2hex(random_bytes(11));

echo crypt($message, $blowfish_salt); //$2y$10$f9107209d7c947ca350f3uLgGqOtR4dHx1sL50lxQTT0Qzd1TrkGi
