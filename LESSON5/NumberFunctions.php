<?php

echo abs(-10.99); // Prints: 10.99

echo abs(127); // Prints: 127

echo round(1.2); // Prints 1

echo round(1.5); //Prints 2

echo round(1298736.821763876); // Prints: 1298737

function calculateDistance($first, $second)
{
  return abs($first - $second);
}

function calculateTip($total)
{
  return round($total * 1.18);
}

//Tests:
echo calculateDistance(-1, 4); // Prints: 5
echo "\n";
echo calculateDistance(4, -1); // Prints: 5
echo "\n";
echo calculateDistance(3, 7); // Prints: 4
echo "\n";
echo calculateDistance(7, 3); // Prints: 4
echo "\n";
echo calculateTip(100); // Prints 118 
echo "\n";
echo calculateTip(35); // Prints 41
echo "\n";
echo calculateTip(88.77); //Prints 105
echo "\n";