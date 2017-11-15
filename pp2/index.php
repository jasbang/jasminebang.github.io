<?php // Script 8.9 - register.php
/* This page lets people register and login into the site (in theory). */


// Set the page title and include the header file:
define('TITLE', 'Index');
include('templates/header.html');

/*IMPORTANT In order for the forms to be STICKY they NEED to be on the SAME PAGE 
so that the form can self-send https://www.youtube.com/watch?v=H3AWWlNDWRg -->
Think of adding htmlspecialchars whenever needed*/

//  SIGN IN
// Check if the form has been submitted:
if (isset($_POST["submit2"])) { //Beside being a basic security measure it avoid the random displaying of premature feedback message
    //form has been submitted
    //do validation and database operation and whatever you need
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Check if the method the form was sent with is post
        
       
        

        // Handle the form:
        if ((!empty($_POST['email1'])) && (!empty($_POST['password']))) { //If there is an email and a password
            
            if ((strtolower($_POST['email1']) == 'me@example.com') && ($_POST['password'] == 'testpass')) { // Correct!
                $logMail = $_POST['email1']; //possibly usefull for sticky form
                $logPass = $_POST['password']; //possibly usefull for sticky form
                
                ob_end_clean(); //Destroy the buffer!
                header("Location: welcome.php");
                exit();
                
            } else { // Incorrect!
                echo $alertStart;
                print '<p>Email and password do not match those on file!</p>';
                echo $alertEnd;
                
            }
            
        } else { // Forgot a field.
            echo $alertStart;
            print 'Please enter both email and password!';
            echo $alertEnd;
        }
        
    } else { // if the form did get get received
            echo $alertStart;
            print 'Form was not sent the right way.';
            echo $alertEnd;
        
        
    } //Finish the POST validation
} //Close Isset
?>

<?php
//  SIGN UP
if (isset($_POST["submit"])) 
{
    // Check if the form has been submitted:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   {
        
        $problem = false; // No problems so far.
        
        // Check for each value...
        if (empty($_POST['first_name'])) 
        {
            $problem = true;
            echo $alertStart;
            print 'Please enter your first name.';
            echo $alertEnd;
        }
        
        if (empty($_POST['last_name'])) 
        {
            $problem = true;
            echo $alertStart;
            print 'Please enter your last name.';
            echo $alertEnd;
        }
        
        if (empty($_POST['email'])) 
        {
            $problem = true;
                echo $alertStart;
            print 'Please enter your email address.';
            echo $alertEnd;
        }
        
        if (empty($_POST['password1'])) 
        {
            $problem = true;
            echo $alertStart;
            print 'Please enter a password.';
            echo $alertEnd;
        }
        
        if ($_POST['password1'] != $_POST['password2']) 
        {
            $problem = true;
            echo $alertStart;
            print 'Passwords do not match!';
            echo $alertEnd;
            $noMatch = true; //see elseif(!noMatch)
        }
        
        if (!$problem) 
        { // If there weren't any problems
            
            echo $confirmStart;
            echo "Success! You will recieve an email soon.";
            echo $confirmEnd;
            
            // Print a message:
            $first         = htmlspecialchars($_POST['first_name']);
            $last          = htmlspecialchars($_POST['last_name']);
            $pass          = htmlspecialchars($_POST['password1']);
            $to            = htmlspecialchars($_POST['email']);
            $email_subject = "Confirmation";
            $email_body    = "Thank you, $first $last for registering with the Superhero Registrar. Your password is $pass.";
            $headers       = "From: ang.jdb@gmail.com \r\n";
            
            mail($to, $email_subject, $email_body, $headers);
            ob_end_clean(); //Destroy the buffer!
            header("Location: welcome.php");
            exit();
            

        } 
    } 
    else 
    { // if the form did not get received 
            echo $alertStart;
            print 'Form was not sent the right way.';
            echo $alertEnd;
        // End of handle form IF.
        
    } //Finish the POST validation
} //Close Isset

?>

<!--do not make any fields "required" so that stickiness can be tested-->
<div id="wrapper">
    <!-- Registration Form -->
    <div id="register"><h2>Registration Form</h2>
    <form action= "index.php"
    method="post" class="form--inline">

<!--htmlspecialchars($_SERVER['PHP_SELF'])-->

    <input type="text" name="first_name" size="20" placeholder="Superhero Name"
    value="<?php
if (isset($_POST['first_name']))
    echo htmlspecialchars($_POST['first_name']);
?>"><!-- this is no typo -->
    
    <input type="text" name="last_name" size="20" placeholder="Superhero Last Name"
    value="<?php
if (isset($_POST['last_name']))
    echo htmlspecialchars($_POST['last_name']);
?>"><!-- sticky form-->
    
    <input type="email" name="email" size="20" placeholder="Amazing Email Address"
    value="<?php
if (isset($_POST['email']))
    echo htmlspecialchars($_POST['email']);
?>">
   
    <input type="password" name="password1" size="20" placeholder="Super Secret Password"
    value="<?php
if (isset($_POST['password1']))
    echo htmlspecialchars($_POST['password1']);
?>">
    
    <input type="password" name="password2" size="20" placeholder="Confirm Super Secret Password"
    value="<?php
if (isset($_POST['password2']))
    echo htmlspecialchars($_POST['password2']);
?>">
    <input class="myBtn" type="submit" name="submit" value="Register Now!">
    </form></div>


    




<div class="push"></div> <!-- So the footer is down -->
  </div>
<?php
include('templates/footer.html'); // Need the footer. 
?>