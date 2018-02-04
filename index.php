<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerald Derrick's Homepage</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-warning">
	<div class="container">
		<h1>Gerald (Jerry) Derrick</h1>
		<img class="mypic" src="images/self_photo_kind_of.jpg">
		<br><br>
		<h2>About Me</h2>
		<div class="aboutme">
			<p>
				My name is Gerald (Jerry) Derrick and I live in Louisiana with my wife and two children. I've lived all over the country to include my favorite state, Hawaii which is where the picture above is from (that's me in the middle). 				
			</p>
			<p>
				I have worked in computer science related fields for most of my adult life to include building data centers across the Pacific Rim (Australia, Japan, Korea and Sinapore), and performing cyber security related tasks for numerous companies. One of the "coolest" jobs I've held was as the Chief Engineer of a 200 person engineering program that developed automated cyber analytics solutions. Most recently, I'm the CTO of a small firm dedicated to helping companies address their cyber security concerns.
			</p>
		</div>
		<h2>One of my favorite quotes</h2>
		<div class="quotes">
			<?php
				// Read the file of quotes
				$quotes = file("data/quotes.csv");
			
				// Select a random number to select a single quote
				$randNumber = rand(1,sizeof($quotes))-1;
			
				// Break the quote into the quote and quotee
				$quoteParts = explode('|', $quotes[$randNumber]);
				
				// Display the quote
				echo "\"$quoteParts[0]\"";
				echo "<br><br>";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8208;&#8208;&#8208; $quoteParts[1]";
			?>
		</div>
	</div>
	
</body>
</html>