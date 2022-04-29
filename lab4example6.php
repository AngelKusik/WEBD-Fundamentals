<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Using Constants";
$description = "This page demonstrate PHP example 6 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Using Constants
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Using Constants</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Our book describe a contants as an identifier for a value that cannot change during the course of a script.
    We can define the value of a constant or we can use some of the predefine ones from PHP. To create our own
    constants we do not need a dollar sign, we must use uppercase, and we must use the define() function like in the example below.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <h3>Test Code Example:</h3>
        <p>Syntax to declare a constant called MYCONSTANT:</p>
        <p>define("MYCONSTANT", "This is a test of defining constants.");</p>
        <p>Now we print it using echo:</p>
        <?php
        define("MYCONSTANT", "This is a test of defining constants.");
        echo MYCONSTANT;?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
