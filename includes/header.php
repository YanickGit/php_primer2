<?php
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP Primer - $title</title>
    </head>
    <body>
    <div class="container">
    <h2>Welcome to PHP Primer</h2>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Index</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="ifstatement.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple If Statement</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="switchstatement.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple Switch Statement</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="forloop.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple For Loop</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="whiledowhileloop.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple While/Do While Loop</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="array.php">Simple Array and Printouts</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="stringmanip.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple String Manipulation</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="datetimemanip.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple Date and Time Manipulation</a>
        </li>

        <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="functions.php" role="tab" aria-controls="pills-home" aria-selected="false">Simple Functions</a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>

    ';
    
?>

<!--
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
-->