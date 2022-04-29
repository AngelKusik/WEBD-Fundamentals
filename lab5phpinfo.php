<?php
$file = "lab5.php";
$date = "March 6,2022";
$title = "Lab 5 - PHP Info";
$description = "This page demonstrates Lab 5 third example: PHP info.";
$banner = "Lab 5";

include ("./header.php");

/**
 * Lab 5 - PHP info
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 March 6, 2022
 */
?>

    <h2>PHP Info</h2>
    <h3>Please click <a href="./lab5.php">here</a> to go back to Lab 5 page.</h3>
    <p>The phpinfo() function is a PHP predefined function that can be used to see information about the web server software, the version of PHP you are running, and the environment variables.</p>
    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <br/>
        <h3>Test Code Example:</h3>
        <p>See below an example of how the output of the phpinfo() function is displayed. The output of the phpinfo() is quite extensive and contains a wealth of information. The image below shows the first part of the output: </p>
        <br/>
      </div>
      <img src="./images/phpimage.png" alt="PHP Info Output"/>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
