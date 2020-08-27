<?php
$string_array = ["first element", "second element", "third element"];

$string_array[0] = "NEW! different first element";

echo $string_array[0]; // Prints: NEW! different first element"


$change_me = [3, 6, 9];
// Write your code below:


$change_me[] = "element";

$change_me[] = 77;

$change_me[1] = "tadpole";

print_r($change_me);