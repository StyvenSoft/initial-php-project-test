<?php
namespace Coding;

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

//Write your code below:

echo gettype($first); // Prints: string

echo gettype($second);

var_dump($first); 

var_dump($second); 

$name = "Aisle Nevertell";
$age = 1000000;

echo gettype($name); // Prints: string

echo gettype($age); // Prints: integer

var_dump($name); // Prints: string(15) "Aisle Nevertell"

var_dump($age); // Prints: int(1000000)