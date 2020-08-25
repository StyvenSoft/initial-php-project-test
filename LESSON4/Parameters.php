<?php

function sayCustomHello($name)
{
echo "Hello, $name!";
};

sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!

sayCustomHello("Codecademy learner"); // Prints: Hello, Codecademy Learner!


function increaseEnthusiasm($str)
{
  return $str . "!";
}

function repeatThreeTimes($str)
{
  return $str . $str. $str;
}

echo increaseEnthusiasm("Oh, hello");

echo repeatThreeTimes("All work and no play makes Jack a dull boy.");

echo increaseEnthusiasm(repeatThreeTimes("new"));