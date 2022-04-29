<?php
$file = "lab10.php";
$date = "April 12,2022";
$title = "Lab 10 - Database/PHP User Registration";
$description = "This page was created as a Lab 10 requirement.";
$banner = "Lab 10";

include ("./header.php");

/**
 * Lab 10
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 April 12, 2022
 * Course WEBD2201
 */

?>
    <h3>Lab 10 Database/PHP User Registration</h3>
    <p>In our last example we created a login page and liked it with our database.
    This time we are taking our webpage one step further and creating a register page for new users.
    This register page validates the information entered on the register form, insert it on the database if all the information is valid, and
    redirects the user to the login page we created for lab 9. Give it a try and register in our system! </p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <!--Lab 10 sticky form and validation block -->
        <?php
          //Variable Declarations
          //initialize the variables in this scope to enable the reset/clear button functionality.
          $error = "";
          $login = "";
          $password = "";
          $password_confirm = "";
          $first_name = "";
          $last_name = "";
          $email = "";

          if($_SERVER["REQUEST_METHOD"] == "GET"){
            //default mode when the page loads the first time
	          //set variables to default value (blank in this case) when page loads in get mode.
	          $login = "";
            $password = "";
            $password_confirm = "";
            $first_name = "";
            $last_name = "";
            $email = "";
            $is_valid = "";

          }else if($_SERVER["REQUEST_METHOD"] == "POST"){
            //connect to the server
            $connect = db_connect();
            //the page got here from submitting the form, so let's validate the data.
            //get the data from each field on the form and remove white-space
	          $login = trim($_POST["login_info"]);
            $password = trim($_POST["password_info"]);
            $password_confirm = trim($_POST["password_confirm"]);
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $email = trim($_POST["email_address"]);

            //validate user data entered on the form.

            //validate login using validate_id() (from includes/functions)
            $is_valid = validate_id($login, $error);
            if($is_valid == false)
            {
              //if login is not valid, reset it
              $login = "";
            }

            //validate password using validate_password() (from includes/functions)
            $is_valid = validate_password($password, $password_confirm, $error);
            if($is_valid == false)
            {
              //if password & password_confirm are not valid, reset it
              $password = "";
              $password_confirm = "";
            }

            //validate first name using validate_first_name() (from includes/functions)
            $is_valid = validate_first_name($first_name, $error);
            if($is_valid == false)
            {
              //if first name is not valid, reset it
              $first_name = "";
            }

            //validate last name using validate_last_name() (from includes/functions)
            $is_valid = validate_last_name($last_name, $error);
            if($is_valid == false)
            {
              //if last name is not valid, reset it
              $last_name = "";
            }

            //validate email using validate_email_address() (from includes/functions)
            $is_valid = validate_email_address($email, $error);
            if($is_valid == false)
            {
              //if email is not valid, reset it
              $email = "";
            }

            //if there are no errors carry on
            if(strlen($error) == 0)
            {
              //declare a variable to capture the date and time the user enrolled.
              $today = date("Y-m-d", time());

              //Add the user's information entered on the registration form to the database.
              //create a query to insert the data on the database
              $query = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access)
              VALUES('$login', '$password', '$first_name', '$last_name', '$email', '$today', '$today')";

              //use pg_query function to send it to the database
              $query_result = pg_query($connect, $query);

              //check if query was successful
              if($query_result)
              {
                //if user data was successfully inserted on the database redirect user to log in
                //page using header function.
                header('location:lab9.php');
                //flush buffer
                ob_flush();
              }
            }
          }
        ?>
        <!--Error messages are displayed above the form -->
        <h3><?php echo $error; ?></h3>
        <h3>Please register in our system</h3>
        <p>Please enter your personal information.</p>
        <br/>
        <!-- Form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <table style="border:1; background-color:#D2ECF9;">
            <tr>
              <td class="smaller-bold-example top-left-radius" style="border:1">Login ID:</td>
              <td class="top-right-radius" style="border:1"><input type="text" name="login_info" size="40" value="<?php echo $login; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">Password:</td>
              <td style="border:1"><input type="password" name="password_info" size="40" value=""/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">Confirm Password:</td>
              <td style="border:1"><input type="password" name="password_confirm" size="40" value=""/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">First Name:</td>
              <td style="border:1"><input type="text" name="first_name" size="40" value="<?php echo $first_name; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example" style="border:1">Last Name:</td>
              <td style="border:1"><input type="text" name="last_name" size="40" value="<?php echo $last_name; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example bottom-left-radius" style="border:1">Email Address:</td>
              <td class="bottom-right-radius" style="border:1;"><input type="text" name="email_address" size="40" value="<?php echo $email; ?>"/></td>
            </tr>
          </table>
          <p><input type="submit" name="register" value="Register"/>
          <input type="reset" name="clear" value="   Clear   "/></p>
        </form>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
