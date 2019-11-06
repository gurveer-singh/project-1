
<html lang="en">
<head>
<! adding autorefresh feature in meta tag>
  <meta charset="UTF-8" http-equiv="refresh" content="10">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<! body have attribute which have php code to change background color >
<body style=<?php include 'functions.php'; $colorsname = array('red', 'brown', 'yellow', 'orange', '#36b55c');
  backgroundchange(getRandomQuote($colorsname));
  ?> >>
  <div class="container">
    <div id="quote-box">
	<?php


// down here is file quotes
	$quoteone = array("quote" => "So many books,so little time",
	"speaker" => "Frank Zappa",
  "citation" => "",
  "year" => "");
    
	$quotetwo = array("quote" => "Be yourself, everyone else is taken",
	"speaker" => "Oscar Wilde",
  "citation" => "",
  "year" => "");
                   
	$quotethree = array("quote" => "A room without book is like a bofy without a soul",
	"speaker" => "Marcus Tullius Cicero",
  "citation" => "",
  "year" => "");
	$quotefour = array("quote" => "You only live once, but if you do it right, once is enough",
	"speaker" => "Mae West",
  "citation" => "",
  "year" => "");
	$quotefive = array("quote" => "Be the change that you wish to see in the world",
	"speaker" => "Mahatma Gandhi",
  "citation" => "",
  "year" => "");
	// this follwing array will contain all 5 quotes
	$quotes = array($quoteone, $quotetwo,$quotethree, $quotefour, $quotefive);
	// calling printQuote function and getRandomQuote function as an argument
  printQuote(getRandomQuote($quotes));
	
	?>
      </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>