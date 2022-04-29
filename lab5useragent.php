<?php
$file = "lab5.php";
$date = "March 6,2022";
$title = "Lab 5 - Calculation Form";
$description = "This page demonstrates Lab 5 fifth example: PHP User Agent.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - PHP User Agent
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 6, 2022
 */
?>

    <h2>PHP Environment Variables: HTTP_USER_AGENT</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>The REMOTE_ADDR is not the only environment variable which value is shown in the phpinfo() output. The HTTP_USER_AGENT is another important environment variable that contains some very useful information. Check the table below for more information: </p>
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
            <td class="bottom-left-radius">HTTP_USER_AGENT</td>
            <td class="bottom-right-radius">This variable contains the browser type, browser version, language encoding, and platform. </td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <p>As per our previous example, we will be using the getenv() function to assign the value of HTTP_USER_AGENT to another variable and then we will use echo to print the output as follows: </p>
        <br/>
        <?php
          $agent = getenv("HTTP_USER_AGENT");
          echo "<p>You are using $agent.</p>";
        ?>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
