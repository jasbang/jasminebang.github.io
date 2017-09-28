<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Cost Calculator</title>
	<link href="registration.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Princess+Sofia|Open+Sans+Condensed:300" rel="stylesheet">


</head>
<body><div id="container"><div id="calculator">
<?php // Script 4.2 - handle_calc.php
/* This script takes values from calculator.html and performs 
total cost and monthly payment calculations. */

// Get the values from the $_POST array:
$residency = $_POST['residency'];
$units = $_POST['units'];
$health = $_POST['health'];
$csc = $_POST['csc'];
$parking = $_POST['parking'];

// Calculate the total cost of units:
$tuition = $residency * $units;
$services = $health + $csc + $parking;
$totaltuition = $tuition + $services;
$scholarship = rand(0,$totaltuition);
$totalpay = $totaltuition - $scholarship;

// Print out the results:
print "<p>Your calculated tuition is:<br><span class=\"number\">$residency Galleons</span> each unit for 
<span class=\"number\">$units</span> units with <span class=\"number\">$health Galleons</span> 
health services fee, <span class=\"number\">$csc Galleons</span>
express owl services fee and a <span class=\"number\">$parking Galleons</span> storage fee.<br>

<br>
Your total tuition is <span class=\"number\">$totaltuition Galleons</span> but with
the scholarship of <span class=\"number\">$scholarship Galleons</span> 
comes to <span class=\"number\">$totalpay Galleons</span>.<br>";

?></div></div>
</body>
</html>