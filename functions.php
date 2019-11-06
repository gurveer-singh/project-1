<?php


// this function accepts array having quotes and return a random quote from array
function getRandomQuote($quo) {
  $randomnumber = rand(0,4);
	return $quo[$randomnumber];
}

// this function accepts returned data from getRandomQuote function and echo it in orgnisead way
function printQuote($data)
{

echo '<p class="quote">' . $data["quote"] . '</p>';
echo '<p class="source">' . $data["speaker"];

if  (!empty($que["citation"]))  {

echo '<span class="citation">' . $data["citation"] . '</span>'; 
  }

if (!empty($que["year"])) {
 echo '<span class="year">' . $data["year"] . '</span>';
}
echo '</p>';

}
//funtion to change background-color 
function backgroundchange($colors) {
 echo 'background-color:' . $colors . ';' ; 
}