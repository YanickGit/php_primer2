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
echo "<hr>";
echo "<h3>Concatenation of Strings</h3>";

//Concatenation of Strings
    echo "<form method='post'>
        Type phrase #1<br>
        <input type='text' id='phrase1TXT' name='phrase1TXT'><br><br>

        Type phrase #2<br>
        <input type='text' id='phrase2TXT' name='phrase2TXT'><br><br>

        Type phrase #3 (Will be inserted between phrase1 & 2.)<br>
        <input type='text' id='phrase3TXT' name='phrase3TXT'><br>

        <input type='submit' id='submitCONCAT' name='submitCONCAT'>
        </form>";

        $phrase1;
        $phrase2;
        $phrase3;

        if(isset($_REQUEST['submitCONCAT'])){
        $phrase1 = $_REQUEST['phrase1TXT'];
        $phrase2 = $_REQUEST['phrase2TXT'];
        $phrase3 = $_REQUEST['phrase3TXT'];    

        echo "<p><b>RESULT: </b>$phrase1 $phrase3 $phrase2</p>";
        echo "<p><b>Replace phrase#1 string with another (a=>e): </b>".str_replace('a', 'e', $phrase1)."</p>";
        echo "<hr/>";
        }

    //String Transformation
    echo "<h3>String Transformation</h3>";

    echo "<form method='post'>
    Type two or more words with space/s:<br>
    <input type='text' id='stringTRANS' name='stringTRANS'><br>
        
    <input type='submit' id='submitTRANS' name='submitTRANS'>
    </form>";

    $string;

    if(isset($_REQUEST['submitTRANS'])){
    $string = $_REQUEST['stringTRANS'];

        echo "<p><b>FORMATTING FUNCTION</b></p>";
        echo "<p>Uppercase first letter:<b>".ucfirst($string)."</b></p>"; //Change the first letter to uppercase
        echo "<p>Uppercase first letter of each word: <b>".ucwords($string)."</b></p>"; //Change the first letter of every word to uppercase
        echo "<p>Uppercase all the letters: <b>".strtoupper($string)."</b></p>"; //Change all the letters to uppercase
        echo "<p>Lowercase all the letters: <b>".strtolower($string)."</b></p>"; //Change all the letters to uppercase
        echo "<hr/>";

        echo "<p><b>REPEAT, SUBSTRING & POSITION FUNCTION</b></p>";
        echo "<p>Repeat String (x5): <b>".str_repeat($string.' ',5)."</b></p>";
        echo "<p>Repeat String (x5) - Nested Functions (UPPERCASE): <b>".strtoupper(str_repeat($string.' ',5))."</b></p>";
        echo "<p>Get a Substring: <b>".substr($string, 3, 6)."</b></p>";
        echo "<p>Get position of string (e): <b>".strpos($string, 'e')."</b></p>";
        echo "<hr/>";

        echo "<p><b>FIND FUNCTIONS</b></p>";
        echo '<p>Find Character "A": <b>'.strchr($string, "A").'</b></p>';
        echo '<p>Find Character "e": <b>'.strchr($string, "e").'</b></p>';
        echo '<p>Find Character "I": <b>'.strchr($string, "I").'</b></p>';
        echo '<p>Find Character "o": <b>'.strchr($string, "o").'</b></p>';
        echo '<p>Find Character "U": <b>'.strchr($string, "U").'</b></p>';
        echo "<p>Find the length of the string: <b>".strlen($string)."</b></p>";
        echo "<hr/>";
    }
        echo "<p><b>TRIM FUNCTIONS</b></p>";
        echo "<p>Without Trim: <b>".'A'.' B C D '.'E'."</b></p>";
        echo "<p>Trim spaces on both sides: <b>".'A'.trim( ' B C D ' ).'E'."</b></p>";
        echo "<p>Trim spaces on the left side: <b>".'A'.ltrim( ' B C D ' ).'E'."</b></p>";
        echo "<p>Trim spaces on the right side: <b>".'A'.rtrim( ' B C D ' ).'E'."</b></p>";

        
?>
<?php include "footer.php";?>
</body>
</html>