<?php
function multiply($shit, $fuck) {
    return $shit * $fuck;
}


echo multiply (4, 4).'</br>';

function custom($one, $two) {
     return $one + $two + 5;
}

echo custom(3,6).'</br>';

function custom_3($man, $women) {
    $man_women = $man - $women;
    return multiply ($man_women, 2);
}

echo custom_3(6,2);
