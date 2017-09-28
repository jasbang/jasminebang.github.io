<!doctyle html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
<title>Title of the document</title>

</head>
<body>
    <h1>Thank you!</h1>
<?php
$title = $_POST['title'];
$name = $_POST['name'];
$mailing = $_POST['mailing'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$interview = $_POST['interview'];
print "<p>Thank you $name, we have recieved your application for the $title position and your brief cover letter which says:</p><p> '$comment'</p><p>
You $mailing recieve our newsletter. We will contact you at $email. Your interview will
be on $interview.</p>";

?>
</body>
</html>