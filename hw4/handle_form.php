<!doctype html>
<html>
    <head><meta charset=“utf-8”>
    <title>Favorite Things</title>
    <link href="form.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Indie+Flower" rel="stylesheet">
</head>
<?php
ini_set('display_errors',1); //learn from my mistakes
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$month = $_POST['month'];
$year = $_POST['year'];
$day = $_POST['day'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$okay = true;
$age = 2017 - $year;
$oldDate = "$year" . "-" . "$month" . "-" . "$day";
$today = date('Y-m-d'); // today date
$diff = strtotime($today) - strtotime($oldDate);
$days = (int)$diff/(60*60*24);

echo '<h1>Bad Animal Facts</h1>';


/* This script receives eight values from register.html:
first name, last name, email, password, confirm, birthdate, animal, submit */

// Address error management, if you want.

if ($password != $confirm) {
    print '<p class="error">Please enter the same password</p>';
    $okay=false;
}

if ($age < 13) {
        echo '<p class="error">Sorry, you are not old enough to register for this website!</p>';
       $okay = false;
        }
// If there were no errors, print a success message:
if ($okay) {
    switch ($_POST['animal']) {
    case 'penguin':
        echo "<p>Did you know male penguins tend to the children.</p>";
        break;
    case 'dolphin':
        echo "<p>Did you know dolphins do each other in the blowhole.</p>";
        break;
    case 'bear':
        echo "<p>Did you know bears can be gay.</p>";
        break;
    case 'rabbit':
        echo "<p>Did you know rabbits can die of fright.</p>";
        break;
    case 'kangaroo':
        echo "<p>Did you know the inside of a kangaroo's pouch is sticky.</p>";
        break;
    default:
        echo '<p class="error">Please choose a favorite animal<p>';
        break;
    }
        if ($age > 13 && $age < 18)  {
          print "<p>Thank you $first_name $last_name, you have been successfully
          registered (but not really).</p>
          <p>You will turn <span class=\"number\">$age </span> this year.</p>";
          echo "<p>You can use our website, but certain features remain blocked 
          since you aren't an adult.</p>";
          }
        else {
           print "<p>Thank you $first_name $last_name, you have been successfully registered (but not really).</p>
	<p>You will turn <span class=\"number\">$age </span> this year.</p>";
           echo "<p>You can use our website, with all its special features.</p>";
        }

} else {
    print '<p><a href="form.html">Please try again</a></p>';
}

print "<p>You are $days days old</p>";

if ($month == date('n')) {
    echo "<p>Happy birthday!</p>";
}

?>
    
</html>