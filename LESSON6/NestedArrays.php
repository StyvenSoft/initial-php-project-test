<?php

$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2


$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
  
// Write your code below:

$layer_one = $treasure_hunt[3];

$layer_two = $layer_one[4];

$layer_three = $layer_two[2];

$treasure = $layer_three[0];

echo $treasure;