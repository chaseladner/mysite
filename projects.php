<?php

include "header.php";

?>	


	<h3>Locations Script</h3>
	<p>This is a project still in development. The goal is to pull data from a JSON file for Google's Map API, parse the data and then put that data into a SQLlite database for later use. This is part of a larger project still in active development, so specifics have been changed. </p>
	<ul>
		<li>This script takes the Google JSON and parses it, putting into another JSON file with only the information I want. I made this script so I could mess around with the data without having to hit Google servers everytime I wanted to experiment. Also, it provides the benefit of having a light backup of only the data I find useful.</li>
		<li><a href="samplefiles/geoload.txt" target="_blank">->Geoload.py</a></li>
		<li>This script looks at the JSON file I have already parsed, and puts it in to the database. The benefit of this is I isolated any SQL commands that change the structure of the database. It also let me add new columns to my database depending on how I wanted to manipulate the data without having to repopulate the whole table.</li>
		<li><a href="samplefiles/geodump.txt" target="_blank">->Geodump.py</a></li>

	</ul>

	<h3>Web Scraper</h3>
	<p>This is a pretty simple Python web scraper I worked on to check in production websites for dead links. It is exceptionally easy to use, and exceptionally light. </p>
	<p><a href="samplefiles/web-scraper.txt" target="_blank">	->web-scraper.py</a><p>

	<h3>Numerology</h3>
	<p>A fun little script that adds together the numeric value of words based on the location of the letters of that word in the alphabet. A very early script for me, but it was enjoyable to make.</p>
	<p><a href="samplefiles/numerology.txt" target="_blank">->numerology.py</a><p>

	<h3>ChaseLadner.com</h3>
	<p>This website is built using Laravel (PHP framework), Bootstrap and Sass. </p>

<?php
include "footer.php";

?>