<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Arithmetic Operators";
$description = "This page demonstrate PHP example 9 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Arithmetic Operators
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Arithmetic Operators</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Arithmetic operators are used to perform basic mathematical tasks. See some examples of how they can be used in PHP.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Assignment Operators</caption>
          <tr>
            <th class="top-left-radius">Operator</th>
            <th>Example</th>
            <th class="top-right-radius">Action</th>
          </tr>
          <tr>
            <td><b>+</b></td>
            <td><b>$b = $a + 3;</b></td>
            <td>Adds values.</td>
          </tr>
          <tr>
            <td><b>-</b></td>
            <td><b>$b = $a - 3;</b></td>
            <td>Subtracts values.</td>
          </tr>
          <tr>
            <td><b>*</b></td>
            <td><b>$b = $a * 3;</b></td>
            <td>Multiplies values.</td>
          </tr>
          <tr>
            <td><b>/</b></td>
            <td><b>$b = $a / 3;</b></td>
            <td>Divides values.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius"><b>%</b></td>
            <td><b>$b = $a % 3;</b></td>
            <td class="bottom-right-radius">Returns the modulus, or remainder.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>To demonstrate how arithmetic operators work we will create two integer variables, assign the first the value of 85 and the second 24 and then perform some mathematical operations.</p>
        <?php
        $a = 85;
        $b = 24;
        echo "<p>The original value of \$a is $a and \$b is $b</p>";
        $c = $a + $b;
        echo "<p>Added \$a and \$b and got $c</p>";
        $c = $a - $b;
        echo "<p>Subtracted \$b from \$a and got $c</p>";
        $c = $a * $b;
        echo "<p>Multiplied \$a and \$b and got $c</p>";
        $c = $a / $b;
        echo "<p>Divided \$a by \$b and got $c</p>";
        $c = $a % $b;
        echo "<p>The modulus of \$a and \$b is $c</p>";
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
