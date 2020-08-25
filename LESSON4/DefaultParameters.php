<?php

function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};

greetFriend("Marvin"); // Prints: Hello, Marvin!

greetFriend(); // Prints: Hello, old chum!

/**
 * Write a function calculateTip() which takes a number representing the total cost of a
 *  meal as its first argument. It should also take a second, optional argument—an integer 
 * representing the percent tip desired (eg. 25 will indicate a 25% tip should be calculated). 
 * If no second argument is passed in, the function should default to a 20% tip. 
 * The function should return the new total—the previous total plus the calculated tip.
 * 
 */

function calculateTip($totalCost, $porcentTip = 20)
{
  return $totalCost * (1 + ($porcentTip / 100));
}

echo calculateTip(100, 25);
echo "\n". calculateTip(100);
echo "\n". calculateTip(65, 15);