<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
<?php require "header.php";?>
<?php
echo "<h1>PHP String Manipulation</h1>";
    //Concatenation of Strings
    $phrase1 = "The team member";
    $phrase2 = "that came late to work, had an excuse.";
    $name = "yanick levy";
    echo "<p>$phrase1.'whose name is Betty'.$phrase2</p>";
    echo "<hr/>";

    //String Transformation
    echo "<p>Uppercase first letter: ".ucfirst($name)."</p>"; //Change the first letter to uppercase
    echo "<p>Uppercase first letter of each word: ".ucwords($name)."</p>"; //Change the first letter of every word to uppercase
    echo "<p>Uppercase all the letters: ".strtoupper($name)."</p>"; //Change all the letters to uppercase
    echo "<p>Lowercase all the letters: ".strtolower("YANICK LEVY")."</p>"; //Change all the letters to uppercase
    echo "<hr/>";

    echo "<p>Repeat String: ".str_repeat('a ',5)."</p>";
    echo "<p>Repeat String - Nested Functions: ".strtoupper(str_repeat('a ',5))."</p>";
    echo "<p>Get a Substring: ".substr($name, 3, 6)."</p>";
    echo "<p>Get position of string: ".strpos($name, 'v')."</p>";
    echo "<hr/>";

    echo '<p>Find Character "Y": '.strchr($name, "Y").'</p>';
    echo '<p>Find Character "n": '.strchr($name, "n").'</p>';
    echo '<p>Find Character "e": '.strchr($name, "e").'</p>';
    echo '<p>Find Character "y": '.strchr($name, "y").'</p>';
    echo "<hr/>";

    echo "<p>Find the length of the string: ".strlen($name)."</p>";
    echo "<p>Without Trim: ".'A'.' B C D '.'E'."</p>";
    echo "<p>Trim spaces on both sides: ".'A'.trim( ' B C D ' ).'E'."</p>";
    echo "<p>Trim spaces on the left side: ".'A'.ltrim( ' B C D ' ).'E'."</p>";
    echo "<p>Trim spaces on the right side: ".'A'.rtrim( ' B C D ' ).'E'."</p>";

    echo "<p>Replace string with another: ".str_replace('team', 'group', $phrase1)."</p>";
?>
<?php include "footer.php";?>
</body>
</html>