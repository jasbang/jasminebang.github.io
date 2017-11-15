
<?php // Script 11.4 - upload_file.php
/* This script displays and handles an HTML form. This script takes a file upload and stores it on the server. */
include('templates/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

	// Try to move the uploaded file:
	if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "uploads/{$_FILES['the_file']['name']}")) {
	
		echo '<img src="uploads/'.$_FILES['the_file']['name'].'"/>';
		// Print a message:
            $first         = htmlspecialchars($_POST['first_name']);
            $last          = htmlspecialchars($_POST['last_name']);
            $to            = htmlspecialchars($_POST['email']);
            $email_subject = "Confirmation";
            $email_body    = "Thank you for using our services, $first $last ! The upload went as planned.";
            $headers       = "From: ang.jdb@gmail.com \r\n";

            mail($to, $email_subject, $email_body, $headers);
            ob_end_clean(); //Destroy the buffer!
            header("Location: welcome.php");
            exit();
	
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

<form action="upload.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="300000">
	<p><input type="file" name="the_file"></p>
	<p><input type="submit" name="submit3" value="Upload"></p>
</form>

</body>
<?php include('templates/footer.html'); // Need the footer.?>