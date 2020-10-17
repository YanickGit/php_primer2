<?php 
    $title = "Switch Statement";
    require "includes/header.php";
?>

<?php
    echo "<h1>$title</h1>";
    echo "<hr/>";

    echo "<form method='post'>
    Type your grade letter below (eg. A)<br/>
    to see your comments. <br/>
    <input type='text' id='gradeText' name='gradeText'><br/>
    <input type='submit' id='submitT' name='submitT'>
    </form>";

    $gradeText = 'F';
    if(isset($_REQUEST['submitT'])){
        $gradeText = $_REQUEST['gradeText'];

        $gradeT = $gradeText;

    switch ($gradeT) {
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
        echo "<h2>Grade: $gradeT</h2>";
    }
    ?>

<?php include "includes/footer.php";?>