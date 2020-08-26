<?php

$max = getrandmax(); 

echo $max;

echo rand(); // Prints a number between 0 and $max

echo rand(1, 2); // Prints either 1 or 2

echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)

echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)


echo getrandmax();
echo "\n";
echo rand();
echo "\n";
echo rand(1, 52);