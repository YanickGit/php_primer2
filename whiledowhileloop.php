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
        echo "<hr>";

        echo "<form method='post'>
        Type the loop quantity below:(eg. 10)<br>
        <input type='number' id='loopQtyW' name='loopQtyW'><br><br>

        Type the loop ceiling below:(eg. 20)<br>
        <input type='number' id='loopCeilingW' name='loopCeilingW'><br><br>

        <input type='submit' id='submitW' name='submitW'>
        </form>";

        $loopQtyW = 0;
        $loopCeilingW = 0;

        if(isset($_REQUEST['submitW'])){
        $loopQtyW = $_REQUEST['loopQtyW'];
        $loopCeilingW = $_REQUEST['loopCeilingW'];

        $loopQW = $loopQtyW;
        $loopW = $loopCeilingW;

        //Infinite Loop   
            //while ($grade < 10) {
            //echo "<p>I AM LESS THAN 10!</p>";
            //} 
        //Pre-Condition Loop   
            while ($loopW <= $loopQW) {
                echo "<p>I AM LESS THAN $loopQW.</p>";
                $loopW++;
            }
            echo "<p>Exit While Loop!</p>";
        }
    ?>

<?php
        echo"<h1>Do-While Loop</h1>";
        echo "<hr>";

        echo "<form method='post'>
        Type the loop quantity below:(eg. 10)<br>
        <input type='number' id='loopQty' name='loopQty'><br><br>

        <input type='submit' id='submitW' name='submitW'>
        </form>";

        $loopQty = 10;

        if(isset($_REQUEST['submitW'])){
        $loopQty = $_REQUEST['loopQty'];

        $loopQ = $loopQty;
        $loopW = 0;



        //Post Condition Loop
        $grade = 0;
        do {
            echo "<p>I am Do-While Loop</p>";
            $grade++;
        } while ($grade <= 10);
        echo "<p>Exit Do-While Loop!</p>";
    }
    ?>
<?php include "footer.php";?>
</body>
</html>