<?php
$file = "lab5.php";
$date = "March 7,2022";
$title = "Lab 5 - Simple Temperature Conversion";
$description = "This page demonstrates Lab 5 sixth example: Simple Temperature Conversion.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - Simple Temperature Conversion
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 7, 2022
 */
?>

    <h2>Simple Temperature Conversion</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>In this example we will be using a for loop to calculate the Celsius and respective Fahrenheit temperatures from -40&deg; Celsius up to 100&deg; Celsius. Notice that the Celsius
      temperatures will be increased by 10&deg; every time the code iterates.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <h3>Test Code Example:</h3>
        <p>To convert the temperatures from Celsius to Fahrenheit we will use the formula <i>(celsius * 9/5) + 32</i>. An interesting thing
        to notice about this example is that we can use the echo to print the temperatures as well the table data cells, cool right? Here is the result: </p>
        <br/>
        <table>
          <tr>
            <th class="top-left-radius">Celsius</th>
            <th class="top-right-radius">Fahrenheit</th>
          </tr>
        <?php
          for ($celsius = -40; $celsius <= 100; $celsius += 10)
          {
            $fahrenheit = ($celsius * 9/5) + 32;

            if($celsius == 100){
              echo "<tr>
                <td class=\"bottom-left-radius\">$celsius&deg;</td>
                <td class=\"bottom-right-radius\">$fahrenheit&deg;</td>
              </tr>
              ";
            }
            else{
              echo "<tr>
                <td>$celsius&deg;</td>
                <td>$fahrenheit&deg;</td>
              </tr>
              ";
            }
          }
        ?>
        </table>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
