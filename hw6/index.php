<!doctype html>
<html>
<head><title>PHP Calculator</title>
<link rel = "stylesheet"
   type = "text/css"
   href = "style.css" /></head>

<?php

function math($a, $b,$operator)
{
    switch ($operator) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            $result = $a / $b;
            break;
        default:
            $result = " ";
            break;
    };
    echo $result;
};

$operator = $_POST['operator'];
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];


?>
 <body>
 <div class="calculator"><form action="index.php" method="post">
 <input type="text" name="value1" value="0" />
 <select name="operator">
  <option value="*">*</option>
  <option value="/">/</option>
  <option value="+">+</option>
  <option value="-">-</option>
</select>
 <input type="text" name="value2" value="0" />
 <input type="submit" value="Calculate values"/>
 </form></div>
 
 <div class="answer">
 <?php
            echo $value1 . $operator . $value2 . " = ";
            echo math($value1,$value2,$operator);
?></div>
 </body>
</html>