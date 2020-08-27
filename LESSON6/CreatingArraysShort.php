<?php

$number_array = [0, 1, 2];

$string_array = array("first element", "second element");
$str_arr_short = ["first element", "second element"];

$mixed_array = array(1, "chicken", 78.2, "bubbles are crazy!");
$mix_arr_short = [1, "chicken", 78.2, "bubbles are crazy!"];

$long_array = [
    1,
    2,
    3,
    4,
    5,
    6
  ];


$with_function = array("PHP", "popcorn", 555.55);

$with_short = ["PHP", "popcorn", 555.55];

echo implode($with_short);