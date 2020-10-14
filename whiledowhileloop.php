<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do While Loops</title>
</head>
<body>
<?php require "header.php";?>
    <?php
        echo"<h1>While Loop</h1>";
        $grade = 11;
        //Infinite Loop   
            //while ($grade < 10) {
            //echo "<p>I AM LESS THAN 10!</p>";
            //} 
        //Pre-Condition Loop   
            while ($grade <= 10) {
                echo "<p>I AM LESS THAN 10!</p>";
                $grade++;
            }
            echo "<p>Exit While Loop!</p>";
    ?>

<?php
        echo"<h1>Do-While Loop</h1>";
        //Post Condition Loop
        $grade = 0;
        do {
            echo "<p>I am Do-While Loop</p>";
            $grade++;
        } while ($grade <= 10);
        echo "<p>Exit Do-While Loop!</p>";
    ?>
<?php include "footer.php";?>
</body>
</html>