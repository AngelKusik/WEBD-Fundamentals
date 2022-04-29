<?php
$file = "lab5.php";
$date = "March 7,2022";
$title = "Lab 5 - Function Temperature Conversion";
$description = "This page demonstrates Lab 5 seventh example: Function Temperature Conversion.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - Function Temperature Conversion
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 7, 2022
 */
?>

    <h2>Function Temperature Conversion</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>Remember our temperature conversion table from the previous example? Here it is again. However instead of writing the code that generates the table in the body of this page, this time we will be using a function. A function enable us to easily reuse a piece of code that executes a certain task.
    To keep things organized we created a separate file called myfunctions.php where we can keep all functions and in order to access them we can use two predefined PHP functions, include() or require().
    Have a look at the table below to learn more about these functions.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Using Functions in Your Code</caption>
          <tr>
            <th class="top-left-radius">Function</th>
            <th class="top-right-radius">What it does</th>
          </tr>
          <tr>
            <td>include()</td>
            <td>The code in the file included in the include() becomes part of the script from the calling point foward. If the file can't be reached for some reason (permissions, wrong location) you will get a warning, but the code will still execute to its best hability. </td>
          </tr>
          <tr>
            <td class="bottom-left-radius">require()</td>
            <td class="bottom-right-radius">It does the same thing as include(), the difference is that if the file can't be reached the program will crash. </td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>And here is our table! Now that the code for the table was turned into a function all that is left to do is adding the include() function with the path to myfunctions.php file to this page and calling the temperature_conversion() where we want the table to be displayed. </p>
        <br/>
        <?php
        $celsius = -40;
        ConvertCelsiusToFahrenheit($celsius);
        ?>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
