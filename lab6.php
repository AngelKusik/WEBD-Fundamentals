<?php
$file = "lab6.php";
$date = "March 16,2022";
$title = "Lab 6 - Self-referring Forms";
$description = "This page was created as a Lab 6 requirement and implements the use of self-referring forms with data validation.";
$banner = "Lab 6";

include ("./header.php");

/**
 * Lab 6 - Self-referring Forms
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 16, 2022
 */
?>

    <!-- Subtitle & Description Section -->
    <h2>Self-referring Forms with data validation</h2>
    <p>In Lab 6 we will learn how we can create a "sticky" self-referring form with data validation.
     A self-referring form is a form that refers back to itself which means that after we enter the input on the form it will check if
     the information that was entered is valid (that's the validation part) and it will load the form page again but this time including the output (if the data entered was valid),
    or an error message if is there something that needs to be fixed. It may seem an obvious behavior but there are some websites out there
    with non-self-referring forms that will take you to another page to display an error message if something goes wrong in the validation,
    for example, requiring the user to take an additional step and going back to the form page to fix the problem (very awkward).</p>
    <p>But what about sticky forms? Well, a sticky form is a form that keeps the valid data entered if the user fails the validation in one of the fields
     of the form. Long story short, imagine you filled out a form with 15 fields and ended up entering an invalid email address,
     if it's a self-referring form it will return an error message asking you to re-enter your email address but all the information entered in the other 14 fields is still there so you do not have to type everything again.</p>
    <hr/>
    <br/>
    <br/>
    <!-- Examples Section -->
    <div class="white-container">
      <div class="white-text-div">
        <h2>Test Code Example</h2>
        <p>The form below allows you to convert a range of temperatures from Celsius to Fahrenheit. This is a sticky self-referring form with data validation, so to see how all these concepts work enter some invalid data as well to see what happens. </p>
        <h3>Temperature Conversion Form</h3>
        <p>Please enter the start temperature (the lowest Celsius temperature to convert), the stop temperature (the highest Celsius temperature to convert), and the temperature increment (that determines what temperatures will be displayed on your table and how many).</p>
        <?php
          //Variable Declarations
          define("MAX_ITERATIONS", 100);
          $output = "";
          $error = "";

          if($_SERVER["REQUEST_METHOD"] == "GET"){
            //default mode when the page loads the first time
	          //can be used to make decisions and initialize variables
	          $start = "";
            $incr = "";
            $stop = "";
          }else if($_SERVER["REQUEST_METHOD"] == "POST"){
            //the page got here from submitting the form, let's try to process
	          $start = trim($_POST["start_temp"]); //the name of the input box on the form, white-space removed
            $incr = trim($_POST["increment_temp"]);
            $stop = trim($_POST["stop_temp"]);

            //Validate start Celsius Temperature input
	          if(!isset($start) || $start == ""){
              //means the user did not enter anything
		          $error .= "You must enter a start temperature in the textbox.<br/>";
	          }else if(!is_numeric($start)){
              //means the user entered something, but not a number
		          //give them a detailed error message
		          $error .= "The start temperature <u>MUST</u> be a number, you entered: " . $start . ".<br/>";
	            //empty out the invalid data
		          $start = "";
            }

            //Validate Temperature increment input
            if(!isset($incr) || $incr == ""){
              //means the user did not enter anything
              $error .= "You must enter a temperature increment in the textbox.<br/>";
            }else if(!is_numeric($incr)){
              //means the user entered something, but not a number
              //give them a detailed message
              $error .= "The increment temperature <u>MUST</u> be a number, you entered: " . $incr . ".<br/>";
              //empty out the invalid data
              $incr = "";
            }

            //Validate stop Temperature input
            if(!isset($stop) || $stop == ""){
              //means the user entered something, but not a number
              //give them a detailed message
              $error .= "You must enter a stop temperature in the textbox.<br/>";
              //empty out the invalid data
              $stop = "";
            }else if(!is_numeric($stop)){
              //means the user entered something, but not a number
              //give them a detailed message
              $error .= "The stop temperature <u>MUST</u> be a number, you entered: " . $stop . ".<br/>";
              //empty out the invalid data
              $stop = "";
            }
            //end of individual validation
            //now we proceed to next set of validations.

            if($error == ""){ //if error is an empty string meaning with nothing went wrong in the validation above
              //check if start temp is less than the stop temp.
              if (!($start < $stop)){
                //means that start temperature is not less than the stop temperature
                //In this case I can print an error and ask the user to re-enter the values.
                //Here I could also switch the values but I decided to go with an error message to keep it consistent with was done in the previous step.
                $error .= "The start temperature <u>MUST</u> be less than the stop temperature, you entered: start: " . $start . ", stop: " . $stop . ".<br/>";
                //empty out the invalid data
                $start = "";
                $stop = "";
              }else if (!($incr > 0)){
                //means that the increment is a negative number and it will generate an infinite loop.
                $error .= "The temperature increment <u>MUST</u> be a positive number. You entered: " . $incr . ".<br/>";
                $incr = "";
              }else if (!(($stop - $start)/$incr <= MAX_ITERATIONS)){
                //means that the number of iterations needed to generate the output is greater than
                //the MAX_ITERATIONS meaning the table will have more than 100 rows, we don't want that so user must change the increment.
                $error .= "You exceed the maximum number of temperatures that can be displayed at the output table at time: " . MAX_ITERATIONS . ". Please review the increment and/or stop values.";
                $incr = "";
              } else {
                //when all values are valid proceed with the calculation
                //to do the calculation we call the ConvertCelsiusToFahrenheit2() function
                //and pass the values of $start, $incr and $stop.
                $output = ConvertCelsiusToFahrenheit2($start, $incr, $stop);
              }
	          }else{
              //there were problems, concatentate the TRY AGAIN message
		          $error .= "Please Try Again.";
         	 }
         }
        ?>
        <!--Error messages are displayed above the form -->
        <h3><?php echo $error; ?></h3>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
          <table style="border:none; background-color:#F0F0F0;">
            <tr>
              <td class="smaller-bold-example" style="border:none">Enter a start temperature:</td>
              <td style="border:none"><input type="text" name="start_temp" size="18" value="<?php echo $start; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:none">Enter a temperature increment:</td>
              <td style="border:none;"><input type="text" name="increment_temp" size="18" value="<?php echo $incr; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:none">Enter a stop temperature:</td>
              <td style="border:none"><input type="text" name="stop_temp" size="18" value="<?php echo $stop; ?>"/></td>
            </tr>
            <tr>
              <td colspan="2" class="center-aligned" style="border:none"><input type="submit" name="submit" value="Generate Temperature Conversion Table"/></td>
            </tr>
          </table>
        </form>
        <h2><?php echo $output; ?></h2>
      </div>
    </div>

<?php

include ("./footer.php");
?>
