<?php
$file = "termtest2.php";
$date = "April 1,2022";
$title = "Term Test 2";
$description = "This page was created as a Term Test 2 requirement.";
$banner = "Term Test 2";

include ("./header.php");

/**
 * Term Test 2
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 2.0 April 1, 2022 //Updated after the test 
 * Course WEBD2201
 */

 define("CDN_TO_EURO", 0.678889);
 define("CDN_TO_POUND", 0.526186);
 $conversions = "$1.00CDN = &euro;" . number_format(CDN_TO_EURO, 2) . " = " . "&pound;" . number_format(CDN_TO_POUND, 2) .".";
?>
    <h3>Europe Trip Planner - Canadian Currency Converter</h3>
    <p>This web page will implement several topics that have been covered in the <em>Web Development - Fundamentals</em>
      course (WEBD2201) course this semester.  This page still implements CSS technology, and ensures XHTML validation but
      was created to demonstrate PHP functionality including working with HTML forms, data validation
      (including making the forms "sticky"), PHP constants and functions.</p>
    <p>The page, after doing some data validation, will convert a Canadian dollar amount into Euros or Pounds, depending on the data you input.
      The conversion from Canadian dollars to the Euro and British pound is: </br></p>
    <p><?php echo $conversions; ?></p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <!--Test 2 sticky form and validation block -->
        <?php
          //Variable Declarations
          //define("CDN_TO_EURO", 0.678889); //defined at the top to be used on the description
          //define("CDN_TO_POUND", 0.526186);
          $pound_uk = "UK";
          $pound_england = "England";
          $converted_money = "";
          $output = "";
          $error = "";

          if($_SERVER["REQUEST_METHOD"] == "GET"){
            //default mode when the page loads the first time
	          //can be used to make decisions and initialize variables
	          $location = "";
            $amount = "";
          }else if($_SERVER["REQUEST_METHOD"] == "POST"){
            //the page got here from submitting the form, let's try to process
	          $location = trim($_POST["location_country"]); //the name of the input box on the form, white-space removed
            $amount = trim($_POST["amount_money"]);
          }

            //Validate country input
	          if(!isset($location) || $location == ""){
              //means the user did not enter anything
		          $error .= "You must enter a country to be visited.<br/>";
	          }

            //Validate amount of money input
            if(!isset($amount) || $amount == ""){
              //means the user did not enter anything
              $error .= "You must enter an amount to be converted.<br/>";
            }else if(!is_numeric($amount)){
              //means the user entered something, but not a number
              //give them a detailed message
              $error .= "The amount to be converted <u>MUST</u> be a number, you entered: " . $amount . ".<br/>";
              //empty out the invalid data
              $amount = "";
            }else if (!($amount > 0)){
              //means that amount is not positive.
              //In this case I can print an error and ask the user to re-enter the value.
              $error .= "The amount to be converted <u>MUST</u> be a positive number, you entered: " . $amount .".<br/>";
              //empty out the invalid data
              $amount = "";
            }

            //end of individual validation
            //now we proceed to next set of validations.

            if($error == ""){ //if error is an empty string meaning with nothing went wrong in the validation above.
                //when all values are valid proceed with the calculation
                if($location == $pound_uk || $location == $pound_england)
                {
                  $converted_money = $amount * CDN_TO_POUND;
                  $output = "You are visiting " . $location . " with $" . $amount . " CND</br> that means for your trip you will have: &pound" . number_format($converted_money, 2) .".<br/>";
                }else{
                  $converted_money = $amount * CDN_TO_EURO;
                  $output = "You are visiting " . $location . " with $" . $amount . " CND</br> that means for your trip you will have: &euro;" . number_format($converted_money, 2) .".<br/>";
                }
	           }else{
              //there were problems, concatentate the TRY AGAIN message
		          $error .= "Please Try Again.";
         	   }
        ?>
        <!--Error messages are displayed above the form -->
        <h3><?php echo $error; ?></h3>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
          <table style="border:1; background-color:#D2ECF9;">
            <tr>
              <td class="smaller-bold-example top-left-radius" style="border:1">Country you are visiting:</td>
              <td class="top-right-radius" style="border:1"><input type="text" name="location_country" size="18" value="<?php echo $location; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">Money to be converted:</td>
              <td style="border:1;"><input type="text" name="amount_money" size="18" value="<?php echo $amount; ?>"/></td>
            </tr>
            <tr>
              <td colspan="2" class="center-aligned bottom-left-radius bottom-right-radius" style="border:1"><input type="submit" name="submit" value="Convert Currency"/></td>
            </tr>
          </table>
        </form>
        <h2><?php echo $output; ?></h2>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
