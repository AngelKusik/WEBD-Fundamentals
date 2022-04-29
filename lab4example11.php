<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Logical Operators";
$description = "This page demonstrate PHP example 11 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Logical Operators
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Logical Operators</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>According to our book, Logical operators allow your script to determine the status
      of conditions in the context of if &amp; else or while statements (similar to what we did on the previous example.). Some examples of logical operators are:</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Logical Operators</caption>
          <tr>
            <th class="top-left-radius">Operator</th>
            <th class="top-right-radius">Definition</th>
          </tr>
          <tr>
            <td><b>&amp;&amp;</b></td>
            <td>If both conditions are true, we execute the block of code within this statement.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius"><b>||</b></td>
            <td class="bottom-right-radius">If one of the conditions are true, we execute the block of code within this statement.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>To demonstrate how logical operators work we will declare two string variables: "degrees = 95" and "hot = yes". Next we will use an if statement to compare if degrees
        is greater than 100 or hot is equal to yes; if one of the conditions is true the program should output "it's really hot", if both are false it should output "it's bearable". Secondly we will use another if statement
        to check the same conditions but this time both conditions must be true for the program output "it's really hot". Let's see what happened:</p>
        <?php
        $degrees = "95";
        $hot = "yes";
        if (($degrees > 100) || ($hot == "yes")) {
        echo "<p>TEST 1: It's <strong>really</strong> hot!</p>";
        } else {
        echo "<p>TEST 1: It's bearable.</p>";
        }

        if (($degrees > 100) && ($hot == "yes")) {
        echo "<p>TEST 2: It's <strong>really</strong> hot!</p>";
        } else {
        echo "<p> TEST 2: It's bearable.</p>";
        }
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
