<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Assignment Operators";
$description = "This page demonstrate PHP example 8 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Assignment Operators
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Assignment Operators</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Operators are used to assign a value, changing a value or comparing the values of variables. The main PHP operators are as follows:</p>
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
            <td><b>+=</b></td>
            <td><b>$a += 3;</b></td>
            <td>Changes the value of a variable to the current value plus the value on the right side.</td>
          </tr>
          <tr>
            <td><b>-=</b></td>
            <td><b>$a -= 3;</b></td>
            <td>Changes the value of a variable to the current value minus the value on the right side.</td>
          </tr>
          <tr>
            <td><b>.=</b></td>
            <td><b>$a .= "string";</b></td>
            <td>Concatenates (adds on to) the value on the right side with the current value.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius"><b>.=</b></td>
            <td><b>$a .= "string";</b></td>
            <td class="bottom-right-radius">Concatenates (adds on to) the value on the right side with the current value.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>To demonstrate how operators work we will create an integer variable, assign it a value of 100 and then perform some operations.</p>
        <?php
        $origVar = 100;
        echo "<p>The original value is $origVar</p>";
        $origVar += 25;
        echo "<p>Added a value, now it's $origVar</p>";
        $origVar -= 12;
        echo "<p>Subtracted a value, now it's $origVar</p>";
        $origVar .= " chickens";
        echo "<p>Concatenate something, final answer is $origVar</p>";
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
