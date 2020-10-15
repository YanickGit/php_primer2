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
        echo "<hr>";

        echo "<form method='post'>
        Type your grade percentage below (eg. 90)<br>
        to see your grade letter. <br>
        <input type='number' id='gradeNumber' name='gradeNumber'><br>
        <input type='submit' id='submitN' name='submitN'>
        </form>";

        $gradeNumber = 0;
        if(isset($_REQUEST['submitN'])){
        $gradeNumber = $_REQUEST['gradeNumber'];

        $gradeN = $gradeNumber;

        if($gradeN >= 50){
            echo "<h2 style='color: green'>YOU HAVE PASSED</h2>";       
         } else
         {
            echo "<h2 style='color: red'>YOU HAVE FAILED</h2>";
         }
         echo "<h2>Grade: $gradeN</h2>";
    
        }
    ?>

    <?php
        echo "<h1>If-Else Statement</h1>";
        echo "<hr/>";

        echo "<form method='post'>
        Type your grade letter below (eg. A)<br>
        to see you comments.<br>
        <input type='text' id='gradeText' name='gradeText'><br>
        <input type='submit' id='submitT' name='submitT'>
        </form>";

        $gradeText = 'F';
        if(isset($_REQUEST['submitT'])){
        $gradeText = $_REQUEST['gradeText'];

        $gradeT = $gradeText;
         //If-Else If-Else
         if ($gradeT == "A"){
             echo "<h2 style='color: green'>YOU ARE A SUPERSTAR!!!!!</h2>";
         }
         elseif ($gradeT  == "B"){
            echo "<h2 style='color: orange'>YOU DID WELL!!!!!</h2>";
        }
        elseif ($gradeT == "C"){
            echo "<h2 style='color: blue'>YOU DID GOOD!!!!!</h2>";
        }
        else{
            echo "<h2 style='color: red'>YOU HAVE FAILED!!!!!</h2>";
        }
        echo "<h2>Grade: $gradeT</h2>";
    }
    ?>

<?php include "footer.php";?>
</body>
</html>