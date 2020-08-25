<?php

function calculateDaysLeft($feed_quantity, $number, $rate)
{
  $result = $feed_quantity / ($number * $rate);
  return $result;
}
echo calculateDaysLeft(300, 2, 30);


$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);

