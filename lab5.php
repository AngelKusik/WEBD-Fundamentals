<?php
$file = "lab5.php";
$date = "March 7,2022";
$title = "Lab 5";
$description = "This page was created as a Lab 5 requirement to be included in my Webd2201 project.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - Main Page
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 7, 2022
 */

?>

    <!-- Page Description-->
    <br/>
    <br/>
    <h2>Basic PHP Scripting</h2>
    <p>Now that we have learned the basics of PHP it's time to take it a step further and start coding. Explore the links below to learn more about PHP and how we can use it to add some functionality to web pages. </p>
    <hr/>
    <br/>
    <br/>
    <!-- Lab 5 Examples Nav Bar -->
    <div class="white-container">
      <div class="white-text-div">
        <h2>PHP Basic Scripting</h2>
        <p>The first five examples below are based on the book <i>PHP 5 Fast Easy Web Development</i> by Julie C. Meloni. The last two examples apply some of the concepts discussed in the book, but are not entirely from the book. Click on the links below for more.</p>
        <ol>
          <li class="regular-list smaller-bold-example"><a href="./lab5calculate_form.php">Creating a Calculation Form (Chapter 6)</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5calculate_form.php">Creating the Calculation Script (Chapter 6) - Please fill the form and click Calculate to access this page.</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5phpinfo.php">PHP Info - HTTP Environment Variables</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5remoteaddress.php">Environment Variables: Remote Address (Chapter 6)</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5useragent.php">Environment Variables: User Agent (Chapter 6)</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5simpletempconvert.php">Simple Temperature Conversion</a></li>
          <li class="regular-list smaller-bold-example"><a href="./lab5functiontempconvert.php">Function Temperature Conversion</a></li>
        </ol>
      </div>
    <hr/>
  </div>

<?php

include ("./footer.php");
?>
