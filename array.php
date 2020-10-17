
<?php 
    $title = "Arrays and Printouts";
    require "includes/header.php";
?>

<?php
    echo "<h1>$title</h1>";
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

<?php include "includes/footer.php";?>