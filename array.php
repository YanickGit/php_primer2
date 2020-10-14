<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>
<?php require "header.php";?>
<?php
echo "<h1>Arrays</h1>";
    //An Array
    //Homogeneous Array Same Data Type
    $numbers = array(1,2,3,4,5,6,7,8,9,110,22,77,88,34);
    
    echo "<p>$numbers[5]</p>";
    echo "<p>$numbers[11]</p>";
    
    $size = count($numbers);
    echo "<p>The Array size is: $size</p>";

    for ($count=0; $count < $size; $count++) { 
        echo "<p>$numbers[$count]</p>";
    }
?>
<?php include "footer.php";?>
</body>
</html>