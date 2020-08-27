<?php

$my_array = array(0, 1, 2);

$string_array = array("first element", "second element");

$mixed_array = array(1, "chicken", 78.2, "bubbles are crazy!");

echo count($my_array); // Prints: 3
echo count($string_array); // Prints: 2
echo count($mixed_array); // Prints: 4

$first_array = array("chicken", 78.2, "bubbles are crazy!", 45, "Test");

echo count($first_array);