<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>I Have This Sorted</title>
	<link rel="stylesheet" href="list.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text|Open+Sans+Condensed:300" rel="stylesheet">

</head>
<body>
	<h1>Superhero Registration</h1>
<?php // Script 7.7 - list.php

// Address error management, if you want.
$words = $_POST['words'];
if (str_word_count($words) < 4) {
	echo "Please enter five words";
	print "<br><br><a href='list.html'>Back</a>";
}

else {
// Turn the incoming string into an array:
$words_array = explode(', ' , $_POST['words']);
$words_reverse= explode(', ', $_POST['words']);

// Sort the array:
sort($words_array);
rsort($words_reverse);

// Turn the array back into a string:
$string_words = implode(', ', $words_array);
$string_reverse = implode(', ',$words_reverse);

// Print the results:
print "Your words: <br>$words<br><br>";
print "An alphabetically sorted version of your desired superpowers:<br> $string_words <br><br>";
print "A reverse alphabetically sorted version of your desired superpowers:<br>$string_reverse";
print "<br><br><a href='list.html'>Back</a>";
};



?>
</body>
</html>