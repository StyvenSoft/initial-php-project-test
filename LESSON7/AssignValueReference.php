<?php

function changeColor ($arr) 
{
  $arr["color"] = "red";    
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
changeColor ($object);
echo $object["color"]; // Prints: green

function reallyChangeColor (&$arr) 
{
  $arr["color"] = "red";    
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
reallyChangeColor ($object);
echo $object["color"]; // Prints: red


$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

// Write your code below:

function createMeme() {
    $meme = ["top_text" => "Much PHP", "bottom_text" => "Very programming. Wow.", "img", "description"];
    return $meme;
  }
  
  $php_doge = createMeme($doge_meme);
  
  function fixMeme(&$meme) {
    $meme = ["top_text" => "top_text", "bottom_text" => "bottom_text"];
    return $meme;
  }
  
  fixMeme($bad_meme);
  
  