<?php

define('a', 12, true);
define('b', 10, true);
define('c', 9, true);

if (a > b) {
    if (a > c) {
        echo "a is big";
    } else {
        echo "c is big";
    }
} else if (b > c) {
    echo " b is big";
} else
    echo " c is big";