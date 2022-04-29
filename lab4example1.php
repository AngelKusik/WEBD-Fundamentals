<?php
$file = "lab4.php";
$date = "February 24,2022";
$title = "Lab 4 - Start and End Tags";
$description = "This page demonstrate the first PHP example from Lab 4.";
$banner = "Lab 4";

include ("./header.php");

/**
 * Lab 4 - Start and End Tags
 * PHP version 7.1
 * @author Angelica Kusik
 * @version 1.0 February 24, 2022
 */
?>

    <h2>PHP Start and End Tags</h2>
    <h3>Please click <a href="./lab4.php">here</a> to go back to Lab 4 page.</h3>
    <p>This page shows the three different tags that can be used to embeded PHP code into your web page.</p>

    <hr/>
    <br/>
    <br/>
    <div class="white-container">
      <div class="white-text-div">
        <table>
          <caption class="small-bold-example">Basic PHP Start and End Tags</caption>
          <tr>
            <th class="top-left-radius">Opening Tag</th>
            <th class="top-right-radius">Closing Tag</th>
          </tr>
          <tr>
            <td>&lt;?php</td>
            <td>?&gt;</td>
          </tr>
          <tr>
            <td>&lt;?</td>
            <td>?&gt;</td>
          </tr>
          <tr>
            <td class="bottom-left-radius">&lt;scrip language="php"&gt;</td>
            <td class="bottom-right-radius">&lt;/scrip&gt;</td>
          </tr>
        </table>
        <br/>
        <h3>Test Code Example:</h3>
        <?php echo "<p>This is a test using the first tag type.</p>"; ?>
        <p>This is a test using the second tag type. The characters below are being shown because this type of tag is ignored by this page's server.</p>
        <p>";?&gt;</p>
        <p>The third type of tag is no longer supported by PHP 7 which is the version running on this page's server, so it won't work, but you get the idea right?</p>
      </div>
    <hr/>
  </div>

<?php
include ("./footer.php");
?>
