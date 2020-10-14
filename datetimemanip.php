<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>
<body>
<?php require "header.php";?>
<?php
    echo "<h1>Date and Time Manipulation</h1>";
    $datenow = getdate();
    echo "<p>Today's date is: </p>";
    //echo "<p>".$datenow['mday']."</p>";
    //echo "<p>".$datenow['mon']."</p>";
    //echo "<p>".$datenow['year']."</p>";

    echo "<p>Today's date is: ".$datenow['year']."-".$datenow['mon']."-".$datenow['mday']."</p>";

    echo "<p>Current time: </p>";

    print date("yy/m/d G:i:s<br/>", time())."<br/>";
?>
<?php include "footer.php";?>
</body>
</html>