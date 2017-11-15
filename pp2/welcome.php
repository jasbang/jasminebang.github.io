<?php //Script 9.6
/* This page is the welcome page, and in theory, the home page of the social network. */
session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['first_name'] = $_POST['first_name'];
            $_SESSION['last_name'] = $_POST['last_name'];
            $_SESSION['loggedin'] = time();
           
            define('TITLE', 'Welcome');
            include('templates/header.html');
            
            
?>

<div id="wrapper">
<div id="welcome">
    <!--<a href="upload.php">Upload a file</a>-->
<?php
$name = trim($_POST['first_name']) . trim($_POST['last_name']);
$first_name = trim($_POST['first_name']);

date_default_timezone_set('America/Los_Angeles');
            echo "<h1>Welcome $first_name</h1>";
            echo "<p>You are now logged in!</p>";
            echo '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '!</p>';
            echo '<p><a href= "logout.php" class="logout">Wanna end your superhero session?</a></p>';
            ?>
    <br/>
<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	// Try to move the uploaded file:
	if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "uploads/{$_FILES['the_file']['name']}")) {
	
		echo '<img src="uploads/'.$_FILES['the_file']['name'].'"/>';
	
	} else { // Problem!

		print '<p style="color: red;">Your file could not be uploaded because: ';
		
		// Print a message based upon the error:
		switch ($_FILES['the_file']['error']) {
			case 1:
				print 'The file exceeds the upload_max_filesize setting in php.ini';
				break;
			case 2:
				print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
				break;
			case 3:
				print 'The file was only partially uploaded';
				break;
			case 4:
				print 'No file was uploaded';
				break;
			case 6:
				print 'The temporary folder does not exist.';
				break;
			default:
				print 'Something unforeseen happened.';
				break;
		}
		
		print '.</p>'; // Complete the paragraph.

	} // End of move_uploaded_file() IF.
	
} // End of submission IF.

// Leave PHP and display the form:
?>

<form action="welcome.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="300000">
	<p><input type="file" name="the_file"></p>
	<p><input type="submit" name="submit3" value="Upload"></p>
</form>
</div>



</div>




<div class="push"></div> <!-- So the footer is down -->
        </div>
<?php
include('templates/footer.html'); // Need the footer. 
?>