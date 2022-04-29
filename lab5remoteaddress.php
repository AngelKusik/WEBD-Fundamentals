<?php
$file = "lab5.php";
$date = "March 6,2022";
$title = "Lab 5 - Remote Address";
$description = "This page demonstrates Lab 5 fourth example: PHP remote address.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - PHP info
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 6, 2022
 */
?>

    <h2>PHP Environment Variables: REMOTE_ADDR</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>When the web server responds the request of a web browser it sends along a list of extra variables
      that are called environment variables. In this example we will learn about an environment variable called REMOTE_ADDR that is shown on the output of the phpinfo().
      Have a look at the table below for a brief explanation of what the REMOTE_ADDR variable does.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">HTTP Environment Variables</caption>
          <tr>
            <th class="top-left-radius">Environment Variable</th>
            <th class="top-right-radius">What it does</th>
          </tr>
          <tr>
            <td class="bottom-left-radius">REMOTE_ADDR</td>
            <td class="bottom-right-radius">This variable contains the IP address of the machine making the request. </td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>Environment variables are available to PHP scripts as $VAR_NAME by default, so the REMOTE_ADDR environment variable is contained as REMOTE_ADDR, however, if we want to be sure
        we can use the getenv() function to assign the value of the environment variable to a new variable and then use echo to print the output. See below the value of your REMOTE_ADDR: </p>
        <br/>
        <?php
          $address = getenv("REMOTE_ADDR");
          echo "<p>Your IP address is $address.</p>";
        ?>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
