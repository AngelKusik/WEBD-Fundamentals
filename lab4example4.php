<?php
$file = "lab4.php";
$date = "February 25,2022";
$title = "Lab 4 - Commenting Your Code";
$description = "This page demonstrate PHP example 4 from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Commenting Your Code
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 25, 2022
 */
?>

    <h2>Commenting Your Code</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>Commenting your code is a good practice that can help you and others understand what is going on in a program. Comments can also be used to take parts of the code out of the execution flow for testing purposes, for example. Check out the table below to see how you can write a comment on a PHP code.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Commenting Your Code</caption>
          <tr>
            <th class="top-left-radius">Syntax</th>
            <th class="top-right-radius">Description</th>
          </tr>
          <tr>
            <td>// Your Comment</td>
            <td>You can write an inline comment by adding two slashs at the beggining of the line.</td>
          </tr>
          <tr>
            <td># Your Comment</td>
            <td>You can use a hashtag at the beggining of the line to write an inline comment.</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">/* Your Comment */</td>
            <td class="bottom-right-radius">You can use a slash-asterisk asterisk-slash to write a multiline comment, PHP will ignore everything in between.</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php echo "<p><em>If you inspect this page you can see all the comments that I added in this PHP section.</em></p>";
        // I have an inline comment Here
        /* I have a multiline comment Here
        that goes up to here */
        # I have another inline comment here.
        ?>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
