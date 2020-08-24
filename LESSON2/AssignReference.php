<?php

$first_player_rank = "Beginner";
$second_player_rank =& $first_player_rank; 
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Prints: Intermediate

/* Imagine a lot of code here */  
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;


$order .= $very_bad_unclear_name;
    
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";