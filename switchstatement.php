<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>
<body>
<?php require "header.php";?>
    <?php
        echo "<h1>Switch Statement</h1>";
        $grade = "x";

        switch ($grade) {
            case "A":
                echo "<h2 style='color: green'>YOU ARE A SUPERSTAR!!!!!</h2>";
                break;
            case "B":
                echo "<h2 style='color: orange'>YOU DID WELL!!!!!</h2>";
                break;
            case "C":
                echo "<h2 style='color: blue'>YOU DID GOOD!!!!!</h2>";
                break;
            default:
                echo "<h2 style='color: red'>YOU HAVE FAILED!!!!!</h2>";
                break;
        }
        echo "<h2>Grade: $grade</h2>";



    ?>
<?php include "footer.php";?>
</body>
</html>