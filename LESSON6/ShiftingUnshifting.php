<?php

$adjectives = ["bad", "good", "great", "fantastic"];
$removed = array_shift($adjectives); 
echo $removed; //Prints: bad
echo implode(", ", $adjectives); // Prints: good, great, fantastic 


$foods = ["pizza", "crackers", "apples", "carrots"];
$arr_len = array_unshift($foods, "pasta", "meatballs", "lettuce"); 
echo $arr_len; //Prints: 7
echo implode(", ", $foods); 
// Prints: pasta, meatballs, lettuce, pizza, crackers, apples, carrots


$record_holders = [];
// Write your code below:

array_unshift($record_holders, "Tim Montgomery", 
"Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders) . "\n\n";