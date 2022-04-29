<?php
$file = "lab9.php";
$date = "April 6,2022";
$title = "Lab 9 - Database/PHP User Login";
$description = "This page was created as a Lab 9 requirement.";
$banner = "Lab 9";

include ("./header.php");

/**
 * Lab 9
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 2.0 April 6, 2022
 * Course WEBD2201
 */

?>
    <h3>Lab 9 Database/PHP User Login </h3>
    <p>In this page we will be using queries to validate the login and password entered by the user by comparing it with the records we have on the databases.
    To do so a table called users was created and the information of 5 users was stored on it. If the user sucessfully login (both login and password are valid) the remaining user information will be retrieved from the database and displayed on the page, otherwise an error message will be displayed asking the user to try again.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <!--Lab 9 sticky form and validation block -->
        <?php
          //Variable Declarations
          $output = "";
          $error = "";
          $query = "";
          //initialize the variables that will hold the information being retrived from the database if log in succeed.
          $first_name = "";
          $last_name = "";
          $enrol_date = "";
          $last_access = "";

          if($_SERVER["REQUEST_METHOD"] == "GET"){
            //default mode when the page loads the first time
	          //can be used to make decisions and initialize variables
	          $login = "";
            $password = "";
          }else if($_SERVER["REQUEST_METHOD"] == "POST"){
            //connect to the server
            $connect = db_connect();
            //the page got here from submitting the form, let's try to process
	          $login = trim($_POST["login_info"]); //the name of the input box on the form, white-space removed
            $password = trim($_POST["password_info"]);

              //Query to check the if both login and password match registers.
              $query = "SELECT id FROM users WHERE id='$login' AND password='$password'";
              $query_result = pg_query($connect, $query);

              if(pg_num_rows($query_result) == 1)
              {
                //If login and password are valid create a query to return user information.
                $query = "SELECT first_name, last_name, email_address, last_access FROM users WHERE id='$login' AND password='$password'";
                $query_result = pg_query($connect, $query);
                //Use a for loop to fetch the results and store it on the appropriate variable.
                $first_name = pg_fetch_result($query_result, 0, "first_name");
                $last_name = pg_fetch_result($query_result, 0, "last_name");
                $email_address = pg_fetch_result($query_result, 0, "email_address");
                $last_access = pg_fetch_result($query_result, 0, "last_access");

                //Display a welcome message showing the information retrieved from the database
                $output = "Welcome back " . $first_name . " " . $last_name . ".\n Our records show that your email address is: " . $email_address .
                "\n and you last accessed our system: " . $last_access . ".\n";

                //Create another query to update the last_access record.
                $query = "UPDATE users SET last_access = '". date("Y-m-d", time()) . "' WHERE id = '" . $login ."'";
                pg_query($connect, $query);
              }
              else{
                //If the query don't return anything it means password is invalid.
                //Display an error message and set the password variable equal to blank.
                $error .= "Login/Password not found in the database. Please try again.\n";
                $password = "";

                //Create a query to check if the login exists on the database.
                $query = "SELECT id FROM users WHERE id='$login'";
                $query_result = pg_query($connect, $query);

                //If login entered by the user matches the database...
                if (pg_num_rows($query_result) == 1)
                {
                  //Keep log in info entered by the user on the form (sticky)
                }
                else
                {
                  //If query don't return any records it means the login information entered by the user is invalid.
                  //Remove login info from the form by setting login varible to blank.
                  $login = "";
                }
              }
          }
        ?>
        <!--Error messages are displayed above the form -->
        <h3><?php echo $error; ?></h3>
        <h3><?php echo $output; ?></h3>
        <h3>Please log in</h3>
        <p>Enter your login ID and password to connect to this system</p>
        <br/>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <table style="border:1; background-color:#D2ECF9;">
            <tr>
              <td class="smaller-bold-example top-left-radius" style="border:1">Login ID:</td>
              <td class="top-right-radius" style="border:1"><input type="text" name="login_info" size="18" value="<?php echo $login; ?>"/></td>
            </tr>
            <tr>
              <td class="smaller-bold-example bottom-left-radius" style="border:1">Password:</td>
              <td class="bottom-right-radius" style="border:1;"><input type="password" name="password_info" size="18" value=""/></td>
            </tr>
          </table>
          <p><input type="submit" name="submit" value="Log In"/>
          <input type="reset" name="reset" value="Reset"/></p>
        </form>
        <p>Please wait after pressing <b>Log in</b> while we retrieve your records from our database.<br/><i>(This may take a few seconds)</i></p>
        <br/>
        <p>New to our page? Click <a href="./lab10.php">here</a> to register.</p>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
