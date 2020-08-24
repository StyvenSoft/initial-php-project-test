<?php

function countdown() 
{
  echo "4, 3, 2, 1, ";
  return "blastoff!";
}

$return_value = countdown(); // Prints: 4, 3, 2, 1, 
echo $return_value; // Prints: blastoff!

function printStringReturnNumber()
{
  echo "eighteen";
  return 18;
}

$my_num = printStringReturnNumber();

echo $my_num;