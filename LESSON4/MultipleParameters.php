<?php

function divide($num_one, $num_two)
{
  return $num_one / $num_two;
};

echo divide(12, 3); // Prints: 4

echo "\n". divide(3, 12); // Prints: 0.25

function calculateArea($height, $width) {
  return $height * $width;
}

function calculateVolume($height, $width, $depth) {
  return $height * $width * $depth;
}
echo "\n". calculateArea(5, 10); // Prints: 50
echo "\n". calculateVolume(6, 4, 3);