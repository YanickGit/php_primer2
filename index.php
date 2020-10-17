<?php 
    $title = "Index";
    require "includes/header.php";
?>

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

<?php include "includes/footer.php";?>