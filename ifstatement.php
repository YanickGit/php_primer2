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
        echo "<h1>If Statement</h1>";
        echo "<hr/>";

        echo "
        <form method='post'>
        Type your grade below:<br>
        <input type='text' id='gradeEntered' name='gradeEntered'><br>
        <input type='submit' id='submit' name='submit'>
        </form>";

        $gradeEntered = 0;
        if(isset($_REQUEST['submit'])){
        $gradeEntered = $_REQUEST['gradeEntered'];

        $grade = $gradeEntered;

        if($grade >= 50){
            echo "<h2 style='color: green'>YOU HAVE PASSED</h2>";       
         } else
         {
            echo "<h2 style='color: red'>YOU HAVE FAILED</h2>";
         }
         echo "<h2>Grade: $grade</h2>";
        
         echo "<hr/>";
        }
    ?>

    <?php
        echo "<h1>If-Else Statement</h1>";
        $grade1 = "C";
         //If-Else If-Else
         if ($grade1 == "A"){
             echo "<h2 style='color: green'>YOU ARE A SUPERSTAR!!!!!</h2>";
         }
         elseif ($grade1  == "B"){
            echo "<h2 style='color: orange'>YOU DID WELL!!!!!</h2>";
        }
        elseif ($grade1  == "C"){
            echo "<h2 style='color: blue'>YOU DID GOOD!!!!!</h2>";
        }
        else{
            echo "<h2 style='color: red'>YOU HAVE FAILED!!!!!</h2>";
        }
        echo "<h2>Grade: $grade1</h2>";
    ?>

<?php include "footer.php";?>
</body>
</html>