<?php

$string = <<<VAL
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700;900&display=swap">
<link rel="stylesheet" href="https://picjumbo.com/wp-content/themes/picjumbofree/js/fontawesome/css/fontawesome.min.css?v1" />
<link rel="stylesheet" href="https://picjumbo.com/wp-content/themes/picjumbofree/js/fontawesome/css/brands.min.css?v1" />
<link rel="stylesheet" href="https://picjumbo.com/wp-content/themes/picjumbofree/js/fontawesome/css/solid.min.css?v1" />
<script src="https://picjumbo.com/wp-content/themes/picjumbofree/js/jquery.min.js?v=1.12.4"></script>
<script src="https://picjumbo.com/wp-content/themes/picjumbofree/js/masonry.pkgd.min.js"></script>
VAL;

// get script url
preg_match_all('/src="(https?:\/\/[^"]+)"/', $string, $matches);

print_r($matches);

// Array
// (
//     [0] => Array
//         (
//             [0] => src="https://picjumbo.com/wp-content/themes/picjumbofree/js/jquery.min.js?v=1.12.4"
//             [1] => src="https://picjumbo.com/wp-content/themes/picjumbofree/js/masonry.pkgd.min.js"
//         )

//     [1] => Array
//         (
//             [0] => https://picjumbo.com/wp-content/themes/picjumbofree/js/jquery.min.js?v=1.12.4
//             [1] => https://picjumbo.com/wp-content/themes/picjumbofree/js/masonry.pkgd.min.js
//         )

// )