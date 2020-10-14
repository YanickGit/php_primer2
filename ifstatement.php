<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body>
<?php require "header.php";?>
    <?php
        //An if statement will carry out an action based on the value of a variable
        echo "<h1>If-Else Statement</h1>";

        $grade = 5;

        if($grade >= 50){
            echo "<h2 style='color: green'>YOU HAVE PASSED</h2>";       
         } else
         {
            echo "<h2 style='color: red'>YOU HAVE FAILED</h2>";
         }
         echo "<h2>Grade: $grade</h2>";
        
         echo "<hr/>";

         $grade = "C";
         //If-Else If-Else
         if ($grade == "A"){
             echo "<h2 style='color: green'>YOU ARE A SUPERSTAR!!!!!</h2>";
         }
         elseif ($grade  == "B"){
            echo "<h2 style='color: orange'>YOU DID WELL!!!!!</h2>";
        }
        elseif ($grade  == "C"){
            echo "<h2 style='color: blue'>YOU DID GOOD!!!!!</h2>";
        }
        else{
            echo "<h2 style='color: red'>YOU HAVE FAILED!!!!!</h2>";
        }
        echo "<h2>Grade: $grade</h2>";
    ?>
<?php include "footer.php";?>
</body>
</html>