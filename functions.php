<?php 
    $title = "Functions";
    require "includes/header.php";
?>

<?php
    echo "<h1>$title</h1>";
    echo "<hr/>";

    //Defining a Function
    echo "<h3>Regular Function</h3>";
    function writeMessage(){
        echo "<p>You are really a wonderful person!!!</p>";
    }

    //Calling a Function
    writeMessage();
    writeMessage();

    //Functions With Parameters
    echo "<h3>Function with Parameters</h3>";
    function addFunction ($num1, $num2){
        $sum = $num1 + $num2;
        echo "<p>The sum of $num1 and $num2 is:  $sum </p>";
    }

    // Calling a Function
    addFunction(5, 6);

    //Pass by Reference - use ampersand in parameter
    echo "<h3>Function: Pass by Reference</h3>";
    function changeNum(&$num){
        $num = $num +150;
        //$num+= 10;
    }

    function returnProduct ($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    addFunction(10, 40);
    addFunction(10, $num);
    addFunction('11', "10");

    changeNum($num);
    echo $num.'<br/>';
?>

<?php include "includes/footer.php";?>