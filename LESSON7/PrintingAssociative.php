<?php

$grades = [
    "Jane" => 98,
    "Lily" => 74,
    "Dan" => 88,
];

echo $grades; // Prints: Array

echo implode(", ", $grades); // Prints: 98, 74, 88 


$september_hits = ["The Sixth Sense" => 22896967,
  "Stigmata" => 18309666,
  "Blue Streak" => 19208806,
  "Double Jeopardy" => 23162542
];

echo implode(", ", $september_hits);

print_r($september_hits);