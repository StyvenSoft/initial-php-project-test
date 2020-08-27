<?php

$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]
$popped = array_pop($my_array); 
// $popped is "tac"
// $my_array is now ["tic"]

$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe"); 
echo $num_added; // Prints: 4
echo implode(", ", $new_array); // Prints: eeny, meeny, miny, moe 


$stack = ["wild success", "failure", "struggle"];
// Write your code below:

