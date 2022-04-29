<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - PHP Variable and Value Types";
$description = "This page demonstrate PHP example 5 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - PHP Variable and Value Types
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>PHP Variable and Value Types</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>The two main types of variables in PHP are scalar and array. Scalar is a variable that can have only one value at time. Arrays have a list of values or even another array.
    Usually variables have one of the following three value types: <b>integer, floating-point, or string</b>. Integer variables are used for whole numbers, float or double variables
    are used for decimal numbers and, string variables are used for text or numeric information (that will be interpreted as text) and must be enclosed in quotation marks. Check out
    the table below to learn how to assign these values to a variable.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">PHP Variable and Value Types</caption>
          <tr>
            <th class="top-left-radius">Value Type</th>
            <th class="top-right-radius">Variable Declaration</th>
          </tr>
          <tr>
            <td>Integer <b>$intVariable = 123</b></td>
            <td>To declare an integer variable we need the dollar sinal, the name of the variable (always give it a meaningful name), the equal signal, quotation marks and, finally the value, that in this case must be a whole number.</td>
          </tr>
          <tr>
            <td>Float / Double <b>$floatVariable = 1.23</b></td>
            <td>To declare a float variable we need the same structure, except that here the value must be a decimal number.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">String <b>$stringVariable = "Hello, 123"</b></td>
            <td class="bottom-right-radius">To declare a string variable we use the same structure but we must enclose the value within single or double quotation marks.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php
         $intVariable = "123";
         $floatVariable = "1.23";
         $stringVariable = "Hello, 123";
         echo "<p><em>integer: $intVariable</em></p>";
         echo "<p><em>float: $floatVariable</em></p>";
         echo "<p><em>string: $stringVariable</em></p>";?>
        <p>The values above are being displayed using the variables that we created in the table. Cool right?</p>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
