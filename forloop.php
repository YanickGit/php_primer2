<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loop</title>
</head>
<body>
<?php require "header.php";?>
<?php
    echo "<h1>For Loop</h1>";
    echo "<hr>";

        echo "<form method='post'>
        Type the loop quantity below:(eg. 10)<br>
        <input type='number' id='loopQty' name='loopQty'><br><br>
        Type the loop text below:(eg. Hello World)<br>
        <input type='text' id='loopText' name='loopText'><br>

        <input type='submit' id='submit' name='submit'>
        </form>";

        $loopQty = 10;
        $loopText = "Hello World";

        if(isset($_REQUEST['submit'])){
        $loopQty = $_REQUEST['loopQty'];
        $loopText = $_REQUEST['loopText'];

        $loopQ = $loopQty;
        $loopT = $loopText;

    //For Loop
    for ($count=0; $count < $loopQ ; $count++) { 
        echo "<p>$loopText</p>";
    }

    for ($count=0; $count < $loopQ ; $count++) { 
        echo "<p>The Count is: $count</p>";
    }
    }
?>
<?php include "footer.php";?>
</body>
</html>