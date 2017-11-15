<?php //Script 9.8
// This is the logout page.
//Need the Session
session_start();

//Reset the Session Array:
$_SESSION = [];

//Destroy the Session Data on the server:
session_destroy();
?>

<?php


// Set the page title and include the header file:
define('TITLE', 'Logout');
include('templates/header.html');
?>




<div id="welcome">
<p>Thank you for logging into the Superhero Registrar!<br>
         You are now logged out.</p>
</div>













<div class="push"></div> <!-- So the footer is down -->
<?php
include('templates/footer.html'); // Need the footer. 
?>