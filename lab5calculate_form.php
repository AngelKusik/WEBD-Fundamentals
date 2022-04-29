<?php
$file = "lab5.php";
$date = "March 1,2022";
$title = "Lab 5 - Calculation Form";
$description = "This page demonstrates Lab 5 first example: Creating a Calculation Form.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - Creating a Calculation Form
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 1, 2022
 */
?>

    <h2>Creating a Calculation Form</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>A calculation script is divided into two parts, a front end and a back end. This example demonstrates how to create the front end form of our calculation script
    where the user can enter two values and choose the type of calculation that must be performed. Check out the table below to learn how to create the form. </p>

    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Creating a Calculation Form</caption>
          <tr>
            <th class="top-left-radius">HTML form elements</th>
            <th class="top-right-radius">What it does</th>
          </tr>
          <tr>
            <td>&lt;form&gt;&lt;/form&gt;</td>
            <td>To create a form you need to use the HTML form tags.</td>
          </tr>
          <tr>
            <td>METHOD=""</td>
            <td>The method must be specified inside the opening form tag and it can be either "post" or "get". The method defines how the values entered in the form are passed to the script. We will be using post in this example.</td>
          </tr>
          <tr>
            <td>ACTION=""</td>
            <td>The action must also be specified inside the form opening tag and it is used to define the script to which the values will be passed to.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">Submit button</td>
            <td class="bottom-right-radius">The submit or calculate button triggers the method and action elements to send the input to the back end script. </td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>And here we have our form after implementing the elements above. If you enter two values, select a type of calculation, and hit enter you will be redirected to our next example where the result of the calculation will be displayed. Go ahead, give it a try:</p>
        <form method="post" action="lab5calculate.php">
          <p>Value 1: <input type="text" name="val1" size="10" value="" /> </p>
          <p>Value 2: <input type="text" name="val2" size="10" value="" /> </p>
          <p>Calculation:
            <br/>
            <input type="radio" name="calc" value="add"/>  add
            <input type="radio" name="calc" value="subtract"/>  subtract
            <input type="radio" name="calc" value="multiply"/>  multiply
            <input type="radio" name="calc" value="divide"/>  divide
          </p>
          <p> <input type="submit" name="submit" value="Calculate"/> </p>
        </form>
        <br/>
        <p>To see the next example, please fill the form above and click calculate.</p>
        <!-- I changed the link to the second example in the main Lab 5 page because it does not allow me to access the page unless I fill out the form.
        When I accessed it from my localhost it would load the page and show me some errors, but when I uploaded it on the server I could't access the page anymore without the inputs. -->
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
