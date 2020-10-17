<?php 
    $title = "Date and Time Manipulation";
    require "includes/header.php";
?>

<?php
    echo "<h1>$title</h1>";
    /*
    $datenow = getdate();
    echo "<p>Today's date is: </p>";
    echo "<p>".$datenow['mday']."</p>";
    echo "<p>".$datenow['mon']."</p>";
    echo "<p>".$datenow['year']."</p>";

    echo "<p>Today's date is: ".$datenow['year']."-".$datenow['mon']."-".$datenow['mday']."</p>";

    echo "<p>Current time: </p>";

    print date("yy/m/d G:i:s", time())."<br/>";
    print date("j of F Y, \a\\t g.i a", time())."<br/>";

    //https://stackoverflow.com/questions/4755704/php-timezone-list
    */

    echo "<hr>";
    echo "<h3>Jamaica</h3>";
    date_default_timezone_set('America/Bogota');
    $jamaica = date("yy/m/d, g:i a", time());
    echo "<p>The current date and time is: ".$jamaica."</p>";

    echo "<hr>";
    echo "<h3>Cairo</h3>";
    date_default_timezone_set('Africa/Cairo');
    $cairo = date("yy/m/d, g:i a", time());
    echo "<p>The current date and time is: ".$cairo."</p>";

    echo "<hr>";
    echo "<h3>Moscow</h3>";
    date_default_timezone_set('Europe/Moscow');
    $moscow = date("yy/m/d, g:i a", time());
    echo "<p>The current date and time is: ".$moscow."</p>";

    echo "<hr>";
    echo "<h3>Singapore</h3>";
    date_default_timezone_set('Asia/Singapore');
    $singapore = date("yy/m/d, g:i a", time());
    echo "<p>The current date and time is: ".$singapore."</p>";

    echo "<hr>";
    echo "<h3>Sydney</h3>";
    date_default_timezone_set('Australia/Sydney');
    $sydney = date("yy/m/d, g:i a", time());
    echo "<p>The current date and time is: ".$sydney."</p>";
?>

<?php include "includes/footer.php";?>