<?php 
    $title = "For Loop";
    require "includes/header.php";
?>

<?php
    echo "<h1>$title</h1>";
    echo "<hr/>";

        echo "<form method='post'>
        Type the loop quantity below:(eg. 10)<br/>
        <input type='number' id='loopQty' name='loopQty'><br/><br/>
        Type the loop text below:(eg. Hello World)<br/>
        <input type='text' id='loopText' name='loopText'><br/>

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

<?php include "includes/footer.php";?>