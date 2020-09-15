<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.
  \nBut I have promises to keep,\nAnd ${distance_unit} to go before I ${verb},\nAnd ${distance_unit} 
  to go before I ${verb}.\n";
  return $story;
}

echo generateStory("dog", "eat", "purple", "42");
echo generateStory("car", "cook", "vermilion", "7");
echo generateStory("empty void", "speak", "beige", "2");