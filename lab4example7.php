<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Using Constants 2";
$description = "This page demonstrate PHP example 7 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Using Constants 2
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Using Constants 2</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Now that we know how to define a constant of our own we will practice how to use some of the PHP predefined ones.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Using Constants 2: PHP Predefined Constants</caption>
          <tr>
            <th class="top-left-radius">Constant Name</th>
            <th class="top-right-radius">Constant Value</th>
          </tr>
          <tr>
            <td><b>__FILE__</b></td>
            <td>The name of the script file being parsed.</td>
          </tr>
          <tr>
            <td><b>__LINE__</b></td>
            <td>The number of the line in the script being parsed.</td>
          </tr>
          <tr>
            <td><b>PHP_VERSION</b></td>
            <td>The version of PHP in use.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius"><b>PHP_OS</b></td>
            <td class="bottom-right-radius">The operating system using PHP.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>Now we create a PHP block of code and concatenate the constants from the table above to print their values using echo.</p>
        <?php
        echo "<br/>This file is ".__FILE__;
        echo "<br/>This is line number ".__LINE__;
        echo "<br/>I am using ".PHP_VERSION;
        echo "<br/>This test is being run on ".PHP_OS;
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
