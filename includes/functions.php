
<?php

/**
 * functions.php
 * Description: This file contains all the functions being used on my webd webpage
 * since Lab 5. It also includes the constants being used for data validation on Lab 10.
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 4.0 April 19, 2022
 */
 /***************************************************************************************************************************/
 //Term Test 3 Functions & Constants:
 /*This constants were created to validate the user inputs on term test 3 form
 according to the max and min values set for these fields on the courses tables (on the database)*/
 define("COURSE_CODE_LENGTH", 8);
 define("MAX_COURSE_TITLE_LENGTH", 64);
 define("MAX_GPA_WEIGHTING", 5);
 define("MIN_GPA_WEIGHTING", 0);


 function validate_course_code($course_code, &$error)
 {
   $is_valid = true;
   //start checking if course code is not blank
   if(!isset($course_code) || strlen($course_code) == 0)
   {
     //if so, display an error message
     $error = "You did not enter a course code.<br/>";
     $is_valid = false;
   }//check if it's exactly equal to course_code_lenght.
   else if(!(strlen($course_code) == COURSE_CODE_LENGTH))
   {
     //if so, display an error message
     $error .= "The course code must be exactly " . COURSE_CODE_LENGTH . " characters, '" . $course_code . "' is not.<br/>";
     $is_valid = false;
   }

   //Check if course code already exists on the database using the function is_course_code_duplicated()
   $is_valid = is_course_code_duplicated($course_code, $error);

   return $is_valid;
 }

 function validate_gpa($gpa_weighting, &$error)
 {
   $is_valid = true;
   //check if gpa is not blank
   if(!isset($gpa_weighting) || strlen($gpa_weighting) == 0)
   {
     //if so, display an error message
     $error .= "You did not enter a gpa.<br/>";
     $is_valid = false;
   }//check if gpa is a number.
   else if(!(is_numeric($gpa_weighting)))
   {
     //if gpa is not a number display an error message.
     $error .= "GPA must be a numeric value. You entered: " . $gpa_weighting . ".<br/>";
     $is_valid = false;
   }//check if it's within the max characters range.
   else if(!$gpa_weighting <= MAX_GPA_WEIGHTING)
   {
     //if not, display an error message
     $error .= "GPA must be less than " . MAX_GPA_WEIGHTING . ", you entered: " . $gpa_weighting . ".<br/>";
     $is_valid = false;
   }//check if it's within the min characters range.
   else if(!$gpa_weighting >= MIN_GPA_WEIGHTING)
   {
     //if not, display an error message
     $error .= "GPA must be more than " . MIN_GPA_WEIGHTING . ", you entered: " . $gpa_weighting . ".<br/>";
     $is_valid = false;
   }
   return $is_valid;
 }

 /*
 ** Validates if code is duplicated by comparing it with all course code registers on the database.
 */
 function is_course_code_duplicated($course_code, &$error)
 {
   $is_valid = true;
   //Check if course code is already taken (already exists on the database)
   //create a query statement to compare the code entered by the user with all code registers on the database
   $connect = db_connect();
   $query = "SELECT * FROM courses WHERE code='$course_code'";
   $query_result = pg_query($connect, $query);

   if(pg_num_rows($query_result) == 1)
   {
     //if query return any results it means code is already taken, so display an error message ...
     $error .= "The course code " . $course_code . " already exists in our system. Please try another.<br/>";
     $is_valid = false;
   }
   return $is_valid;
 }

 function validate_course_title($course_title, &$error)
 {
   $is_valid = true;
   //start checking if course title is not blank
   if(!isset($course_title) || strlen($course_title) == 0)
   {
     //if so, display an error message
     $error = "You did not enter a course title.<br/>";
     $is_valid = false;
   }//check if it's within the min characters range.
   else if(strlen($course_title) > MAX_COURSE_TITLE_LENGTH)
   {
     //if so, display an error message
     $error .= "A course title must be less than " . MAX_COURSE_TITLE_LENGTH . " characters, '" . $course_title . "' is too long.<br/>";
     $is_valid = false;
   }
   return $is_valid;
 }
/*
**Retrieves all the information from the courses table in the database and displays it on a table format.
*/
function display_courses_table(&$output, &$error){
  $connect = db_connect();
  //create a query to retrieve the data
  $query = "SELECT code, title, weighting FROM courses ORDER BY code DESC";
  $result = pg_query($connect, $query);
  //if query successful
  if($result){
    $records = pg_num_rows($result);
    //generate the table
    $output = "<table>\n\t<tr><th>Course Code</th><th>Course Title</th><th>GPA Weighting</th></tr>";
    for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
      $output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "code")."</td>";
      $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>";
      $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "weighting")."</td>\n\t</tr>";
    }
    $output .= "</table>";
  }
  else{
    $error .= "Something .<br/>";
  }
}

/***************************************************************************************************************************/
//Lab 10 Functions & Constants:
/*This constants were created to validate the user inputs on lab 10
according to the max and min values set for these fields on the users tables (on the database)*/
define("MINIMUM_ID_LENGHT", 5);
define("MAXIMUM_ID_LENGTH", 20);
define("MINIMUM_PASSWORD_LENGTH", 6);
define("MAXIMUM_PASSWORD_LENGTH", 15);
define("MAX_FIRST_NAME_LENGTH", 20);
define("MAX_LAST_NAME_LENGTH", 30);
define("MAXIMUM_EMAIL_LENGTH", 255);



/*
** Validates login info entered on the login field of the register form checking if its not blank, too long, too short
** or duplicated based on database registers.
*/
function validate_id($login, &$error)
{
  $is_valid = true;
  //start checking if login is not blank
  if(!isset($login) || strlen($login) == 0)
  {
    //if so, display an error message
    $error = "You did not enter a user id.<br/>";
    $is_valid = false;
  }//check if it's within the min characters range.
  else if(!(strlen($login) >= MINIMUM_ID_LENGHT))
  {
    //if so, display an error message
    $error .= "A user id must be at least " . MINIMUM_ID_LENGHT . " characters, '" . $login . "' is not long enought.<br/>";
    $is_valid = false;
  }//check if it's within the max characters range.
  else if(!(strlen($login) <= MAXIMUM_ID_LENGTH))
  {
    //if so, display an error message
    $error .= "A user id must be less than " . MAXIMUM_ID_LENGTH . " characters, '" . $login . "' is too long.<br/>";
    $is_valid = false;
  }

  //Check if login already exists on the database using the function is_id_duplicated()
  $is_valid = is_id_duplicated($login, $error);

  return $is_valid;
}


/*
** Validates if login is duplicated by comparing it with all login registers on the database.
*/
function is_id_duplicated($login, &$error)
{
  $is_valid = true;
  //Check if login is already taken (already exists on the database)
  //create a query statement to compare the login entered by the user with all id registers on the database
  $connect = db_connect();
  $query = "SELECT * FROM users WHERE id='$login'";
  $query_result = pg_query($connect, $query);

  if(pg_num_rows($query_result) == 1)
  {
    //if query return any results it means login is already taken, so display an error message ...
    $error .= "The user id " . $login . " already exists in our system. Please try another.<br/>";
    $is_valid = false;
  }
  return $is_valid;
}


/*
** Validates password entered by the user on password and confirm password fields of register form.
** Checks if passwords match, if they are not blank, too long or too short.
*/
function validate_password($password, $password_confirm, &$error)
{
  $is_valid = true;
  //check if password and password_confirm are the same using the
  //string comparisson function. If the function return 0 it means strings are equal.
  if(strcmp($password, $password_confirm) != 0)
  {
    //if passwords are not the same display an error message
    $error .= "The password and confirm password were not the same.<br/>";
    $is_valid = false;

  }//if passwords match, check if they are not blank.
  else if(!isset($password) || strlen($password) == 0)
  {
    //if passwords are blank display an error message
    $error .= "You did not enter a password.<br/>";
    $is_valid = false;

  }//if user entered a password, check if the number of characters is within the min range
  //using the string lenght function.
  else if(!(strlen($password) >= MINIMUM_PASSWORD_LENGTH))
  {
    //if so, display an error message
    $error .= "Your password must be at least " . MINIMUM_PASSWORD_LENGTH . " characters.<br/>";
    $is_valid = false;
  }//if user entered a password, check if the number of characters is within the max range
  //using the string lenght function.
  else if (!(strlen($password) <= MAXIMUM_PASSWORD_LENGTH))
  {
    //if so, display an error message
    $error .= "Your password cannot be more than " . MAXIMUM_PASSWORD_LENGTH . " characters.<br/>";
    $is_valid = false;
  }
  return $is_valid;
}


/*
** Validates first name info entered on the register form checking if its not blank, numeric or too long.
*/
function validate_first_name($first_name, &$error)
{
  $is_valid = true;
  //check if first name is not blank
  if(!isset($first_name) || strlen($first_name) == 0)
  {
    //if so, display an error message
    $error .= "You did not enter your first name.<br/>";
    $is_valid = false;
  }//check if first name is not a number.
  else if(is_numeric($first_name))
  {
    //if first name is a number display an error message.
    $error .= "Your first name may not be a number. You entered: " . $first_name . ".<br/>";
    $is_valid = false;
  }//check if it's within the max characters range.
  else if(!(strlen($first_name) <= MAX_FIRST_NAME_LENGTH))
  {
    //if so, display an error message
    $error .= "Your first name must be less than " . MAX_FIRST_NAME_LENGTH . " characters, " . $first_name . " is too long.<br/>";
    $is_valid = false;
  }
  return $is_valid;
}


/*
** Validates last name info entered on the register form checking if its not blank, numeric or too long.
*/

function validate_last_name($last_name, &$error)
{
  $is_valid = true;
  //check if last name is not blank
  if(!isset($last_name) || strlen($last_name) == 0)
  {
    //if so, display an error message
    $error .= "You did not enter your last name.<br/>";
    $is_valid = false;
  }//check if last name is not a number.
  else if(is_numeric($last_name))
  {
    //if first name is a number display an error message.
    $error .= "Your last name may not be a number. You entered: " . $last_name . ".<br/>";
    $is_valid = false;
  }//check if it's within the max characters range.
  else if(!(strlen($last_name) <= MAX_LAST_NAME_LENGTH))
  {
    //if so, display an error message
    $error .= "Your last name must be less than " . MAX_LAST_NAME_LENGTH . " characters, " . $last_name . " is too long.<br/>";
    $is_valid = false;
  }
  return $is_valid;
}


/*
** Validates email address entered on register form checking if its not blank, too long or invalid.
*/
function validate_email_address($email, &$error)
{
  $is_valid = true;
  //check if email is not blank is not blank
  if(!isset($email) || strlen($email) == 0)
  {
    //if so, display an error message
    $error .= "You did not enter an email address.<br/>";
    $is_valid = false;
  }//check if email lenght is valid
  else if(!(strlen($email) <= MAXIMUM_EMAIL_LENGTH))
  {
    //if email is too long display an error message
    $error .= "'" . $email . "' is too long. Please enter an email with up to " . MAXIMUM_EMAIL_LENGTH . " characters.<br/>";
    $is_valid = false;
  }//check if email structure is valid using the filter_var function
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    //if email is not valid display an error message
    $error .= "'" . $email . "' is not a valid email address.<br/>";
    $is_valid = false;
  }
  return $is_valid;
}
//end

/************************************************************************************************************************************/

//Lab 9 Functions:

/*Connects to the database to enable data to be sent and retrieved. */
function db_connect()
{
  //Assing the pg_connect() with the information need to connect to the database to a variable.
  $connection = pg_connect("host=127.0.0.1 dbname=kusika_db user=kusika password=140810");
  //return the variable.
  return $connection;
}

/*Displays the copyright information on the footer of the page. */
function displayCopyrightInfo()
{
  //Display the copyright symbol, author's name and retrieves
  //the current year from the database.
  echo "&copy; Angelica Kusik " . date("Y");
}


/*******************************************************************************************************************************/

//Lab 5 & 6 Functions:

/*ConvertCelsiusToFahrenheit() converts a celsius temperature to Fahrenheit and displays the output
in a table starting from -40 degrees celsius up to 100 degrees celsius. */
function ConvertCelsiusToFahrenheit2($start, $incr, $stop) {
  $fahrenheit = 0;
  echo "<table>
    <tr>
      <th class=\"top-left-radius\">Celsius</th>
      <th class=\"top-right-radius\">Fahrenheit</th>
    </tr>";
    for($start; $start <= $stop; $start += $incr)
    {
      $fahrenheit = ($start * 9/5) + 32;

      if($start == $stop){
        echo "<tr>
          <td class=\"bottom-left-radius\">$start&deg;</td>
          <td class=\"bottom-right-radius\">$fahrenheit&deg;</td>
        </tr>
        ";
      }
      else{
        echo "<tr>
          <td>$start&deg;</td>
          <td>$fahrenheit&deg;</td>
        </tr>
        ";
      }
    }
  echo "</table>";
}
//end

/*ConvertCelsiusToFahrenheit() converts celsius temperatures to Fahrenheit starting from user input up to 100 C. */
function ConvertCelsiusToFahrenheit($celsius) {
  $fahrenheit = "";
  echo "<table>
    <tr>
      <th class=\"top-left-radius\">Celsius</th>
      <th class=\"top-right-radius\">Fahrenheit</th>
    </tr>";
    for ($celsius; $celsius <= 100; $celsius += 10)
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
  echo "</table>";
}
//end

?>
