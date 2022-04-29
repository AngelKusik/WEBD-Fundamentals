<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Escaping Your Code";
$description = "This page demonstrate PHP example 3 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Escaping Your Code
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Escaping Your Code</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Escaping your code means that if you have quotation marks in the string that your PHP tag must display you have to use the escape character (\) to indicate to the parser that the quotation marks within the text must be interpret as a string and not as a special key, otherwise we will get an error. Escaping the code is necessary because we use quotation marks in the PHP tag to indicate to the parser what part is the content to be displayed.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Escaping your Code</caption>
          <tr>
            <th class="top-left-radius">Syntax</th>
            <th class="top-right-radius">Description</th>
          </tr>
          <tr>
            <td>"I think this is \"cool\"!""</td>
            <td>Do you see how the string is enclosed by quotation marks and the quotation marks within the text have backslash right after? This is the rigth way to escape the code.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">"I think this is "cool"!""</td>
            <td class="bottom-right-radius">Here we do not have the backslash and it would cause an error.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php echo "<p><em>I think this is \"cool\"!</em></p>";?>
        <p>To sentence above is being displayed using the right escaping code syntax. Without the escape character we would get the error below.</p>
        <p class="italic">Parse error: syntax error, unexpected 'cool' (T_STRING), expecting ',' or ';' in C:\webd2201\kusika\lab_4\lab4example3.php on line 46</p>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
