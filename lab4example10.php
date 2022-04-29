<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Comparison Operators";
$description = "This page demonstrate PHP example 10 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Comparison Operators
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Comparison Operators</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Comparison operators are used to, well, compare two values. Comparison operators result in either true or false, which can be very useful especially
      along with if statements. See below some examples.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Assignment Operators</caption>
          <tr>
            <th class="top-left-radius">Operator</th>
            <th class="top-right-radius">Definition</th>
          </tr>
          <tr>
            <td><b>==</b></td>
            <td>Equal to</td>
          </tr>
          <tr>
            <td><b>!=</b></td>
            <td>Not equal to.</td>
          </tr>
          <tr>
            <td><b>&gt;</b></td>
            <td>Greater than.</td>
          </tr>
          <tr>
            <td><b>&lt;</b></td>
            <td>Less than.</td>
          </tr>
          <tr>
            <td><b>&gt;=</b></td>
            <td>Greater than or equal to.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius"><b>&lt;=</b></td>
            <td class="bottom-right-radius">Less than or equal to.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>To demonstrate how comparison operators work we will declare to integer variables with the values of 21 and 15 and compare them using an if else statement.</p>
        <?php
        $a = 21;
        $b = 15;
        echo "<p>The original value of \$a is $a and \$b is $b</p>";
        if ($a == $b) {
          echo "<p>Test 1: \$a equals \$b</p>";
        } else {
          echo "<p>Test 1: \$a is not equal to \$b</p>";
        }

        if ($a != $b) {
          echo "<p>Test 2: \$a is not equal to \$b</p>";
        } else {
          echo "<p>Test 2: \$a is equal to \$b</p>";
        }

        if ($a > $b) {
          echo "<p>Test 3: \$a is greater than \$b</p>";
        } else {
          echo "<p>Test 3: \$a is not greater than \$b</p>";
        }

        if ($a < $b) {
          echo "<p>Test 4: \$a is less than \$b</p>";
        } else {
          echo "<p>Test 4: \$a is not less than \$b</p>";
        }

        if ($a >= $b) {
          echo "<p>Test 5: \$a is greater than or equal to \$b</p>";
        } else {
          echo "<p>Test 5: \$a is not greater than or equal to \$b</p>";
        }

        if ($a <= $b) {
          echo "<p>Test 5: \$a is less than or equal to \$b</p>";
        } else {
          echo "<p>Test 5: \$a is not less than or equal to \$b</p>";
        }
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
