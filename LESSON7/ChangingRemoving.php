<?php

$new_arr = ["first" => "I am first!", "second" => "I am second!"]; 

$new_arr["third"] = "I am third!";

echo $new_arr["third"]; // Prints: I am third!

$new_arr["third"] = "I am the *NEW* third!";

echo $new_arr["third"]; // Prints: I am the *NEW* third!


$nums = ["one" => 1,"two"=> 2];

echo implode(", ", $nums); // Prints: 1, 2

unset($nums["one"]);

echo implode(", ", $nums); // Prints: 2


$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings", 
    "wiper fluid" => "full", 
    "headlights" => "bright"
  ];
  print_r($my_car);
  
  // Write your code below:

$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";

unset($my_car["filth"]);

print_r($my_car);