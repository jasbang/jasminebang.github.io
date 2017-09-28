<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Homework 1: Hello World</title>
        <style>
            h1 {font-family:"Impact",fantasy;
                color: #fff;
            }
            body {font-family: "Baskerville", serif;
                  background-color: #BCb;
                  padding:20vh;
            }
            ul {list-style: square;}
            a:link {
                    color: red;
                   }

            /* visited link */
            a:visited {
                color: green;
            }
            
            /* mouse over link */
            a:hover {
                color: black;
            }
            
            /* selected link */
            a:active {
                color: blue;
            }
        </style>
    </head>
    <?php 
    /*
    * Filename: homework1.php
    * Name: Jasmine Ang
    * Date: 08/28/17
    */
    ?>
    <h1>About Me</h1>
    <p>My name is Jasmine Ang.
    I'm actually going to be a published author
    in 2018. My book is Urban Fantasy set in Long Beach, about a witch and his
    ex-boyfriend saving the city, and the entire world from unbridled magic.
    It comes out in March, 2018 from Ninestar Press under the name Jasmine Hong.
    I chose to use a pseudonym mostly because I wanted to keep it separate from
    my private life.</p>
    <ul>
        <li>Drawing</li>
        <li>Reading</li>
        <li>Writing</li>
    </ul>
    <?php
        print "<p>As far as websites go,
        I'm mostly on
        <a href=\"http://twitter.com/jhongwrites\">twitter</a>
        and <a href=\"https://www.facebook.com/jasminehongwrites\">Facebook</a>
        as part of promotion for my book.</p>
        <p>I found this assignment not hard at all to do since it's basically
        just html with a little php sprinkled in. Getting the
        links to work was a little tricky though.</p>";
    ?>
</html>