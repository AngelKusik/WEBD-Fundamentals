<?php
$file = "lab5.php";
$date = "March 1,2022";
$title = "Lab 5 - Calculate";
$description = "This page demonstrates Lab 5 second example: Creating a Calculation Script.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - Creating a Calculation Script
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 1, 2022
 */
?>
    <h2>Creating a Calculation Script</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>Now that we have created the form, it's time to write the script that gives it functionality. Our sript must accept three inputs; the two values typed by the user plus the radio button input that
    specifies the type of calculation that must be performed. These inputs will be placed in a superglobal called $_POST[] (because we used the post method) as shown in the table below and they will be used in a serie of if statements to determine what the program must do based on their value. </p>

    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Creating a Calculation Script</caption>
          <tr>
            <th class="top-left-radius">Post Superglobal Value</th>
            <th class="top-right-radius">What it does</th>
          </tr>
          <tr>
            <td>$_POST['val1']</td>
            <td>This superglobal contains the value entered on the first field of the form, which we called <i>val1</i>.</td>
          </tr>
          <tr>
            <td>$_POST['val2']</td>
            <td>This superglobal contains the value entered on the second field of the form, which we called <i>val2</i>.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">$_POST['calc']</td>
            <td class="bottom-right-radius">This superglobal contains a value of either <i>add, subtract, multiply or divide</i> depending on the radio button that the user selected.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php
          //This was the Professor attempt to solve the error messages that I was getting in the calculate page when
          //the page is accessed without entering a number in the form.
          //$val1 = !isset($_POST['val1'])?"":$_POST['val1'];
          //$val2 = !isset($_POST['val2'])?"":$_POST['val2'];
          //$calc = !isset($_POST['calc'])?"":$_POST['calc'];
          $val1 = ($_POST['val1']);
          $val2 = ($_POST['val2']);
          $calc = ($_POST['calc']);
          $result = null;
          $error = "You must fill the form in order to calculate, please go back  to the previous example.";

          //This is another option for validation that I came accross when I was trying
          //to find a solution to the error messages in the page when a value is not entered in the form.
          //I am keeping it here for future reference.
          //if (isset($_POST['val1']) && isset($_POST['val2']) && isset($_POST['calc'])){
            //$val1 = $_POST['val1'];
            //$val2 = $_POST['val2'];
            //$calc = $_POST['calc'];
          //}

          if (($val1 == "") || ($val2 == "") || ($calc == "")) {
            header("Location: lab5calculate_form.php");
            exit;
            //$val1 = 0;
            //$val2 = 0;
            //$calc = "blank";
          }

          if ($calc == "add") {
            $result = $val1 + $val2;
          } else if ($calc == "subtract") {
            $result = $val1 - $val2;
          } else if ($calc == "multiply") {
            $result = $val1 * $val2;
          } else if ($calc == "divide") {
            $result = $val1 / $val2;
          } //else {
            //$result = $error;
          //}
        ?>
        <p>Once the values are passed to the script the first step is writing an if statement to check if the user entered the values as expected and the values are not blank.
        Next we check if the value of $_POST[calc] is either add, subtract, multiply or divide and perform the calculation accordingly. See below the results of the calculation:</p>
        <h4>The result of the calculation is: <?php echo "$result"; ?> </h4>
        <br/>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
