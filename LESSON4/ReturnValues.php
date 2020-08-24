<?php

function one()
{
  return "one";
}

function two()
{
  return "two";
}

echo one() . " " . two(); // Prints: one two

function first()
{
  return "You did it!\n";
}

function second()
{
  return "You're amazing!\n";
}

function third()
{
  return "You're a coding hero!\n";
}

// Write your code below:
echo first(). ' '. second(). ' '. third();