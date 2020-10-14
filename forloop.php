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
    //For Loop
    for ($count=0; $count < 10 ; $count++) { 
        echo "<p>Hello World</p>";
        //echo"<>";
    }

    for ($count=0; $count < 10 ; $count++) { 
        echo "<p>The Count is: $count</p>";
    }

?>
<?php include "footer.php";?>
</body>
</html>