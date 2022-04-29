<?php
$file = "lab4.php";
$date = "February 24,2022";
$title = "Lab 4 - Code Cohabitation";
$description = "This page demonstrate PHP example 2 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Code Cohabitation
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 24, 2022
 */
?>

    <h2>Code Cohabitation</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Code cohabitation means that you can have chunks of PHP code within a HTML file. This page shows the three elements that a block of code need in order to be embeded in your HTML file.</p>

    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Code Cohabitation</caption>
          <tr>
            <th class="top-left-radius">Element</th>
            <th class="top-right-radius">Why you need it</th>
          </tr>
          <tr>
            <td>The command (echo)</td>
            <td>In the example below we will be using the echo command to output information in our HTML file.</td>
          </tr>
          <tr>
            <td>The string (I'm using PHP!)</td>
            <td>The string is the information we want to output.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">Semicolon ;</td>
            <td class="bottom-right-radius">The semicolon tells the PHP parser where the command ends. Without the semicolon the code will display an error.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php echo "<p><em>Hello World! I'm using PHP!</em></p>";?>
        <p>To print the output above we used the PHP tag discussed in the previous example along with the echo command and the semicolon. If we were to forgot the semicolon we would get the following message:</p>
        <br/>
        <p class="italic">Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in C:\webd2201\kusika\lab_4\lab4example2.php on line 50</p>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
