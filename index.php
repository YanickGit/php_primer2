<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
<?php require "header.php";?>

<!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>

    <?php  
        echo "Hello PHP!";
        echo "<br/>";
        echo "Second PHP Line";
        echo "<br/> <br/>";
    ?>

    <?php 
    //declaring variables
    $name = "Yanick Levy";
    $age = "1000";

    echo $name;
    echo "<h1>My name is $name .</h1>";
    echo '<h1>My age is '.$age.'.</h1>';
    ?>
<?php include "footer.php";?>
</body>
</html>